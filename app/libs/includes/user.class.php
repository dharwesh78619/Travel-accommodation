<?php

class User{
    private $conn;
    public static function signup($first_name, $last_name, $phone, $regemail, $new_password, $confirm_password, $address){
        $pass =md5($new_password);
        $conn=Database::getConnection();
        
        $sql="INSERT INTO 'registration' ('first_name', 'last_name', 'phone', 'regemail', 'new_password', 'confirm_password', 'address') 
        VALUES ($first_name, $last_name, $phone, $regemail, $pass, $confirm_password, $address)";
        $error=false;
        try {
            return $conn->query($sql);
        }catch (Exception $e){
            echo "Error:".$sql."<br>".$conn->error;
            return false;
        }
    }

    public static function login($email,$pass){
        echo "Vanakam da mapla ,inside user class login ";
        // $pass =md5($pass);
        $query= "SELECT * FROM `registration` WHERE `regemail`='$email'";
        $conn=Database::getConnection();
        $result =$conn->query($query);
        if($result->num_rows==1){
            $row = $result->fetch_assoc();

            if($row['new_password']==$pass){
                return $row;
            }else {
                return false;
            }
        }else {
            return false;
        }
    }

    public static function fetch_Hotels()
    {
        $query = "SELECT * FROM `Hotels`";
        $conn = Database::getConnection();
        $result = $conn->query($query);
    
        $hotels = [];
    
        if ($result->num_rows >= 1) {
            while ($row = $result->fetch_assoc()) {
                $hotel = [
                    'Hotel_name' => $row['Hotel_name'],
                    'price' => $row['price'],
                    'Address' => $row['Address'],
                    'offers' => $row['offers'],
                    'country' => $row['country'],
                    'state' => $row['state'],
                    'zip' => $row['zip'],
                    'free-cancellation' => $row['free-cancellation'],
                    'image' => base64_encode($row['image']) 
                ];
                $hotels[] = $hotel;
            }
            return $hotels;
        } else {
            return "No Hotels found";
        }
    }
    
    public static function book(){

    }
    public static function filter(){

    }
    public static function sortby(){
        
    }
    public static function reset_password(){

    }
}