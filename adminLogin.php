<?php

include("config.php");
session_start();
/*$host = "localhost";
$user = "root";
$password = "";
$db = "admin";

mysql_connect($host, $user, $password);
mysql_select_db($db);*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($mysql,$_POST['email']);
      $mypassword = mysqli_real_escape_string($mysql,$_POST['pass']); 

	  $sql = "SELECT * FROM Admin WHERE adm_email = '$myusername' and adm_password = '$mypassword'";
      $result = mysqli_query($mysql,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	  $count = mysqli_num_rows($result);

	if ($count == 1){

		$_SESSION['customer'] = $myusername;
         header("location: admin/dashboard.php");
    }
    else {
         header("location: adminlogin.html");
	}
}


?>