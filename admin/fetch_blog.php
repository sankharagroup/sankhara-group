<?php
// Include database connection
include '../database_connection.php'; // Adjust the path as needed

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    // Execute the statement
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        
        // Check if the blog exists
        if ($result->num_rows > 0) {
            $blog = $result->fetch_assoc();
            // Return the blog data as JSON
            echo json_encode($blog);
        } else {
            // Return an error message if not found
            echo json_encode(['error' => 'Blog not found.']);
        }
    } else {
        // Return an error message if the execution fails
        echo json_encode(['error' => 'Failed to execute query.']);
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
