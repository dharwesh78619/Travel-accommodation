<?php
if (
    isset($_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['regemail'], $_POST['new_password'], $_POST['confirm_password'], $_POST['addres'])
) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $regemail = $_POST['regemail'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $addres = $_POST['addres'];

    // Check if the email already exists in the database
    $conn = new mysqli('localhost', 'root', '', 'project');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT COUNT(*) FROM registration WHERE regemail = ?");
        $stmt->bind_param("s", $regemail);
        $stmt->execute();
        $stmt->bind_result($emailCount);
        $stmt->fetch();
        $stmt->close();

        if ($emailCount > 0) {
            echo "The email is already registered.";
        } elseif ($new_password === $confirm_password) {
            // Insert the new user if email is not registered and passwords match
            $stmt = $conn->prepare("INSERT INTO registration (first_name, last_name, phone, regemail, new_password, confirm_password, addres) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssissss", $first_name, $last_name, $phone, $regemail, $new_password, $confirm_password, $addres);
            $exeval = $stmt->execute();
            if ($exeval) {
                // Registration successful, redirect to the next page
                header("Location: loginpage.html");
                exit();
            } else {
                echo "Registration failed..." . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Check your password. New password and confirm password do not match.";
        }
        $conn->close();
    }
} else {
    echo "Required fields are missing.";
}
?>
