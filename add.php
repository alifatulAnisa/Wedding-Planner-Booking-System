<?php require("config.php"); ?>

<?php
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$birth_date=$_POST['birth_date'];

if(mysqli_query($mysqli,"INSERT INTO student (id, name, age, email, birth_date)
	VALUES ('$id', '$name', '$age', '$email', '$birth_date')"))
	{
		echo $name ."( " .$id. ") has been added ";
		echo '<br/>';
	}
	else
	{
		echo "not successful";
	}
	
	//header ("location index.php");
?>