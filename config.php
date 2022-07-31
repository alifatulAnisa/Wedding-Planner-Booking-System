<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "weddingplanner";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
	echo "Connection FAILED";//mesej jika GAGAL
}
else{
	echo"Connection SUCCESSFUL<br>";//mesej jika BERJAYA

}

// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>