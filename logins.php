<?php
$host="localhost";
$dbusername="root";
$dbpassword="";

$username=$_POST['username'];
$password=$_POST['password'];
$flag=0;
$conn = mysql_connect($host, $dbusername, $dbpassword);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT username,password FROM register';
   mysql_select_db('bus');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      if($row['username']==$username&&$row['password']==$password)
{
		  echo "<h1>WELCOME<h1>";
                                          $flag=1;
}
   }
if($flag==0)
echo "<h1>PLEASE REGISTER FIRST<h1>";
   mysql_close($conn);
?>