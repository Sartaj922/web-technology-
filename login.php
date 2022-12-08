<?php
session_start();
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
    
    $sql="SELECT  * FROM login1 WHERE username='$username' and password='$password'"; 

    $result = $conn->query($sql);

    if($result->num_rows  <= 0){
        echo "Login Failed";
    } else {
        echo "Login Successful";
        $row = $result->fetch_assoc();
        $_SESSION["user"] = $row["username"];
        header("Location:/ssh/test.php");
    }
}


?>