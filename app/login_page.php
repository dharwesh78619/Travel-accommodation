<?php 
include 'libs/load.php';
$result =null ;
if (isset($_POST['email']) && isset($_POST['password'])) {
    $result=User::login($_POST['email'],$_POST['password']);
    echo $result;
    if($result){
        echo "Login Success";
        Session::set("is_loggedin",true);
        Session::set("User_details",$result);
        header("Location: ./Dashboard");
    }else {
        header("Location: login.php");
        Session::set("login_error",true);
    }
}
else {
    echo "Please Enter valid Details";
}
?>
