<?php
session_start();
include '../database_connection.php'; // Include your database connection

// Check if user is already logged in
if (isset($_SESSION["admin_id"])) {
    header("Location: home");
    exit;
}

// Initialize error messages
$email_error = '';
$password_error = '';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['admin_email'] ?? '';
    $password = $_POST['admin_password'] ?? '';

    // Verify email and password
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Check the password
        if (password_verify($password, $row['password'])) {
            // Login successful
            $_SESSION['admin_id'] = $row['id'];
            header("Location: home");
            exit;
        } else {
            $password_error = 'Invalid password.';
        }
    } else {
        $email_error = 'Email not found.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sankhara Digital | Admin login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background: linear-gradient(321deg, #bbeb91 0%, #93d88b 33%, #63c25c 66%, #68a361 100%);">
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../" class="h1">Sankhara Group</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your Admin session</p>
            <form method="POST">
                <div class="input-group mb-3">
                    <input type="email" name="admin_email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <span class="text-danger"><?php echo $email_error; ?></span>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="admin_password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span class="text-danger"><?php echo $password_error; ?></span>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary btn-block" value="Sign In" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
