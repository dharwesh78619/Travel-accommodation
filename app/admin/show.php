<?php
include "../libs/load.php";
include_temp('head');
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Hotel Name</th>
            <th>Price</th>
            <th>Address</th>
            <th>Offers</th>
            <th>Country</th>
            <th>State</th>
            <th>Zip</th>
            <th>Free Cancellation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $hotels = admin::fetch_Hotels();
        print_r($hotels);
        foreach ($hotels as $hotel) {
            echo "<tr>";
            echo "<td>" . $hotel['Hotel_name'] . "</td>";
            echo "<td>" . $hotel['price'] . "</td>";
            echo "<td>" . $hotel['Address'] . "</td>";
            echo "<td>" . $hotel['offers'] . "</td>";
            echo "<td>" . $hotel['country'] . "</td>";
            echo "<td>" . $hotel['state'] . "</td>";
            echo "<td>" . $hotel['zip'] . "</td>";
            echo "<td>" . $hotel['free-cancellation'] . "</td>";
            echo "<td>
                    <a href='../edit.php?id=" . $hotel['id'] . "' class='btn btn-primary'>Edit</a>
                    <a href='../delete.php?id=" . $hotel['id'] . "' class='btn btn-danger'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
