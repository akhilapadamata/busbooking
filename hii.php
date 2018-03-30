<?php
$host="localhost";
$user="root";
$password="";
$db="bus";
$con = new mysqli($host,$user,$password,$db); or die("unableto connect");
echo "Great Work";
?>