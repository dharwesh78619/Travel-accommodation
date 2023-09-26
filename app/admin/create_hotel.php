<?php

include "../libs/load.php";

print_r($_POST);
print_r($_FILES);

if (
    isset($_POST['Hotel_name']) &&
    isset($_POST['price']) &&
    isset($_POST['Address']) &&
    isset($_POST['offers']) &&
    isset($_POST['country']) &&
    isset($_POST['state']) &&
    isset($_POST['zip']) 
    // isset($_FILES['image']) // Use $_FILES for file uploads
) {
    $free_cancellation = isset($_POST['free-cancellation']) ? 1 : 0;
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $result = Admin::create(
            $_POST['Hotel_name'],
            $_POST['price'],
            $_POST['Address'],
            $_POST['offers'],
            $_POST['country'],
            $_POST['state'],
            $_POST['zip'],
            $imageData,
            $free_cancellation
        );

      if ($result) {
            echo "created successfully";
        } else {
            $result;
        }

    }   

