<?php 
 include_once '../libs/load.php';
 include_temp('head');

 include_temp('navbar');
 include_temp('carsoul');
 include_temp('filter_form');
 include_temp('sort_by') ;

 $hotels = user::fetch_Hotels();
 foreach ($hotels as $hotel) {
     $hotelName = $hotel['Hotel_name']; // Correct the key to match your schema
     $price = $hotel['price'];
     $address = $hotel['Address']; // Correct the key to match your schema
     $offers = $hotel['offers']; // Correct the key to match your schema
     $State = $hotel['state']; // Correct the key to match your schema
     $zip = $hotel['zip']; // Correct the key to match your schema
     $freeCancellation = $hotel['free-cancellation']; // Correct the key to match your schema
     $hotelImage = $hotel['image']; // Convert BLOB to base64
 
     include_temp('dashboard_card', [
         'hotel_name' => $hotelName,
         'price' => $price,
         'address' => $address,
         'offers' => $offers,
         'State' => $State,
         'zip' => $zip,
         'free_cancellation' => $freeCancellation,
         'hotel_image' => $hotelImage
     ]);
 }
 


include_temp('footer') ;
