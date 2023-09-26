<?php 
class Database {
    public static $conn =null ;
    public Static function getConnection(){
        if(Database::$conn == null ){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "project";
            $connection = new mysqli($servername,$username,$password,$dbname);
            if($connection->connect_error){
                die("Connection Failed ".$connection->error);
            }{
                Database::$conn=$connection;
                return Database::$conn;
            }
        }
    }
}