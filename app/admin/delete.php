<?php
include "../libs/load.php";
include_temp('head');
print_r($_GET['id']);
$result = admin::delete($_GET['id']);
if ($result) {
    echo "Deleted sucessfully";
}else {
    echo "Something went wrong";
}