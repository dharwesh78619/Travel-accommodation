<?php
include "../libs/load.php";
include_temp('head');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo"post method";
    $hotelId = $_POST['id']; 
    $updates = [
        'Hotel_name' => $_POST['Hotel_name'],
        'price' => $_POST['price'],
        'Address' => $_POST['Address'],
        'offers' => $_POST['offers'],
        'country' => $_POST['country'],
        'state' => $_POST['state'],
        'zip' => $_POST['zip'],
        'free-cancellation' => isset($_POST['free-cancellation']) ? 0 : 1
    ];

    $result = Admin::edit($hotelId, $updates);

    echo $result;
} else {
    echo" The form was not submitted via POST, handle accordingly (e.g., display the form)";
}
?>
