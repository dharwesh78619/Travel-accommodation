<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $email = $_POST['email'];
                  $confirm_password = $_POST['password'];
  
                  // Authenticate the user against the database
                  $conn = new mysqli('localhost', 'root', '', 'project');
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }
  
                  $stmt = $conn->prepare("SELECT regemail, confirm_password FROM registration WHERE regemail = ?");
                  $stmt->bind_param("s", $email);
                  $stmt->execute();
                  $stmt->bind_result($dbEmail, $dbconfirm_password);
                  $stmt->fetch();
                  $stmt->close();
  
                  if ($email === $dbEmail && $confirm_password === $dbconfirm_password) {
                      // Login successful, redirect to the dashboard or desired page
                      header("Location: dash1.html");
                      exit();
                  } else {
                      $login_error = "Check your email and password.";
                  }
  
                  $conn->close();
              }
              if (isset($login_error)) {
                  echo '<p class="error">' . $login_error . '</p>';
              }
              ?>