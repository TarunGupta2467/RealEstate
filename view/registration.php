<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$password = md5($password);
$sql = "INSERT INTO admin (name, email, password)
VALUES ('$name', '$email', '$password')";




if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
   header("Location: login.php");
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	$conn->close();

  

?>