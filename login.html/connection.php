
<?php
 if(isset($_POST['first_name'],$_POST['last_name'],$_POST['phone'],$_POST['regemail'],$_POST['new_password'],$_POST['confirm_password'], $_POST['address']))
 {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
     $phone = $_POST['phone'];
     $regemail = $_POST['regemail'];
     $new_password = $_POST['new_password'];
     $confirm_password = $_POST['confirm_password'];
     $address = $_POST['address'];
    $conn = new mysqli('localhost', 'root','', 'project');
    if ($conn->connect_error) 
    {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } 
    else 
    {
        $stmt = $conn->prepare("INSERT INTO registration (first_name, last_name, phone, regemail, new_password, confirm_password, address') VALUES (?, ?, ?, ?,?,?)");
        $stmt->bind_param("ssisssss",$first_name, $last_name,$phone, $regemail, $new_password, $confirm_password, $address);
        $exeval = $stmt->execute();
        if($exeval)
        {
            echo "Registration successfully...";
        }
        else
        {
            echo "Registration failed..." .$stmt->error;
        }
        $stmt->error;
        $conn->close();
    }


     }    else
{
    echo "required";
}    
?>