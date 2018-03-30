<?php
$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'bus');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		$username = mysqli_real_escape_string($db, $_POST['Username']);
		$email = mysqli_real_escape_string($db, $_POST['Email']);
		$password = mysqli_real_escape_string($db, $_POST['Password']);
		$phone = mysqli_real_escape_string($db, $_POST['Phone']);

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
