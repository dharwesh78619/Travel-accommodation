<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the email and new password from the form
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];

    // Check if the email exists in the registration table
    $checkEmailQuery = "SELECT * FROM registration WHERE regemail = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Email exists, update the password
        $updatePasswordQuery = "UPDATE registration SET new_password = ?, confirm_password = ? WHERE regemail = ?";
        $stmt = $conn->prepare($updatePasswordQuery);
        
        // Use the new password directly without hashing
        $stmt->bind_param("sss", $newPassword, $newPassword, $email);
        
        if ($stmt->execute()) {
            // Password updated successfully
            // Redirect to a success page
            header("Location:loginpage.html");
            exit();
        } else {
            // Password update failed
            echo "Password reset failed. Please try again.";
        }
    } else {
        // Email doesn't exist
        echo "Email not found in our records. Please enter a valid email address.";
    }

    // Close the database connection
    $conn->close();
}
?>
