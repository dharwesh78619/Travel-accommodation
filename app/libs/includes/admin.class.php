<?php

class Admin{
    private $conn;
    public static function login($email,$pass){
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
    public static function fetch_user(){
        $query="SELECT * FROM `Users` ";
        $conn=Database::getConnection();
        $result =$conn->query($query);
        if($result->num_rows>=1){
            return $result;
        }else {
            return "No Users found";
        }
    }

    public static function create($Hotel_name, $price, $Address, $offers, $country, $state, $zip, $image, $free_cancellation)
    {
        $query = "INSERT INTO `Hotels` (`Hotel_name`, `price`, `Address`, `offers`, `country`, `state`, `zip`, `image`, `free-cancellation`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

         $conn = Database::getConnection();
         $stmt = $conn->prepare($query);
         $stmt->bind_param("ssssssbsi", $Hotel_name, $price, $Address, $offers, $country, $state, $zip, $image, $free_cancellation);
         if ($stmt->execute()) {
            return true;
        } else {
             return "Error: " . $stmt->error;
        }
    }
    public static function fetch_Hotels(){
        $query="SELECT * FROM `Hotels` ";
        $conn=Database::getConnection();
        $result =$conn->query($query);
        if($result->num_rows>=1){
            return $result;
        }else {
            return "No Hotels found";
        }
    }

    public static function fetch_Hotels_with_id($id){
        $query="SELECT * FROM `Hotels` where `id`=$id";
        $conn=Database::getConnection();
        $result =$conn->query($query);
        if($result->num_rows>=1){
            $row = $result->fetch_assoc();
            return $row;
        }else {
            return "No Hotels found";
        }
    }

    public static function edit($id, $updates)
{
    if (empty($updates)) {
        return "No updates provided.";
    }
    $setClauses = [];
    $query = "UPDATE Hotels SET ";
    $conn = Database::getConnection();
    foreach ($updates as $column => $value) {
        $escapedValue = $conn->real_escape_string($value);
        $setClauses[] = "`$column` = '$escapedValue'";
    }
    $query .= implode(', ', $setClauses);
    $query .= "WHERE `id` = $id";

    print($query);
   
    $result = $conn->query($query);
    if ($result) {
        if ($conn->affected_rows > 0) {
            return "Update successful.";
        } else {
            return "No Hotels found for the provided ID.";
        }
    } else {
        return "Error updating Hotels: " . $conn->error;
    }
}


    public static function delete($id){
        $query="DELETE FROM `Hotels` WHERE `id`=$id";
        $conn=Database::getConnection();
        $result =$conn->query($query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
}