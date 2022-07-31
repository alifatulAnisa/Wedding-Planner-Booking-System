<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($mysql,$_POST['email']);
      $mypassword = mysqli_real_escape_string($mysql,$_POST['password']); 
      
      $sql = "SELECT * FROM Admin WHERE adm_email = '$myusername' and adm_password = '$mypassword'";
      $result = mysqli_query($mysql,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         //session_register("customer");
         $_SESSION['customer'] = $myusername;
         header("location: admin/dashboard.php");
      }else {
         header("location: adminLogin.html");
        //echo ("<SCRIPT LANGUAGE = 'JavaScript'> window.alert('Wrong username or password. Please re-enter.')window.location.href='login.html'</SCRIPT>");
         //die("Please enter username and/or password!");
        echo '<h3>Invalid username or password</h3>';

      }
   }
?>