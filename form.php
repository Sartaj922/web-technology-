<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=new
mysqli($servername,$username,$password, $dbname);

if($conn->connect_error){
    die("connection failer".$conn->connect-error);
}
echo "connected successfully";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $password=$_POST['password'];
    $phonenumber=$_POST['phonenumber'];
    
    $sql="INSERT INTO login1 (username, password, phonenumber) VALUES ( '$username', '$password', '$phonenumber')"; 

    $inserted = $conn->query($sql);
    
    if($inserted == TRUE){
       echo "Inserted" ;
    } else {
        echo "Error : ".$sql."<br>".$conn->error;
    }
}


?>