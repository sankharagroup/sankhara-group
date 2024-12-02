<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'admin/vendor/autoload.php'; // Adjust the path if necessary

$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $subscriberEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    // Validate the email address
    if (filter_var($subscriberEmail, FILTER_VALIDATE_EMAIL)) {
        // Hostinger SMTP configuration
        $smtpHost = 'smtp.hostinger.com';
        $smtpUsername = 'info@sankharagroup.com'; // Your Hostinger email
        $smtpPassword = 'Sankhara@1'; // Your Hostinger email password
        $smtpPort = 465; // Use 465 for SSL
        $smtpEncryption = 'ssl'; // SSL encryption for port 465

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        $ownerMailSent = false;
        $subscriberMailSent = false;

        try {
            // Server settings for owner email
            $mail->isSMTP();
            $mail->Host = $smtpHost;
            $mail->SMTPAuth = true;
            $mail->Username = $smtpUsername;
            $mail->Password = $smtpPassword;
            $mail->SMTPSecure = $smtpEncryption;
            $mail->Port = $smtpPort;

            // Send email to the website owner
            $mail->setFrom($smtpUsername, 'Sankhara Group');
            $mail->addAddress($smtpUsername);
            $mail->Subject = "New Subscription Notification";
            $mail->Body = "A new user has subscribed to the website.\n\nName: $name\nPhone: $phone\nSubscriber email: $subscriberEmail";

            $mail->send();
            $ownerMailSent = true;
        } catch (Exception $e) {
            error_log("Mailer Error (Owner): " . $mail->ErrorInfo);
        }

        // Create another PHPMailer instance for the subscriber
        $subscriberMail = new PHPMailer(true);

        try {
            // Server settings for subscriber email
            $subscriberMail->isSMTP();
            $subscriberMail->Host = $smtpHost;
            $subscriberMail->SMTPAuth = true;
            $subscriberMail->Username = $smtpUsername;
            $subscriberMail->Password = $smtpPassword;
            $subscriberMail->SMTPSecure = $smtpEncryption;
            $subscriberMail->Port = $smtpPort;

            // Send confirmation email to the subscriber
            $subscriberMail->setFrom($smtpUsername, 'Sankhara Group');
            $subscriberMail->addAddress($subscriberEmail);
            $subscriberMail->Subject = "Thank you for subscribing!";
            $subscriberMail->Body = "Hello $name,\n\nThank you for subscribing to our updates. We will notify you with the latest news and updates.\n\nBest regards,\nSankhara Group";

            $subscriberMail->send();
            $subscriberMailSent = true;
        } catch (Exception $e) {
            error_log("Mailer Error (Subscriber): " . $subscriberMail->ErrorInfo);
        }

        // Check if both emails were sent successfully
        if ($ownerMailSent && $subscriberMailSent) {
            $response['success'] = true;
            $response['message'] = "Thank you for subscribing! We will notify you.";
        } else {
            $response['success'] = false;
            $response['message'] = "There was an error sending the emails. Please try again.";
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Invalid email address. Please enter a valid email.";
    }
} else {
    $response['success'] = false;
    $response['message'] = "Invalid request method.";
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
