<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bus";

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);
if($conn->connect_error)
{
die("connection failed" . $conn->connect_error);
}
$sql= "INSERT INTO register(username,password,email,phone)
VALUES ('$username','$password','$email','$phone')";
if($conn->query($sql)==TRUE)
{
echo "thankyou for registration";
}
else
{
echo"error" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
