<?php
require 'database.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$pass=$_POST['pass'];
	$add=$_POST['add'];
	$query="insert into user(name,email,phone,dob,password,address) values('$name','$email','$phone','$dob','$pass','$add')";
	if(!mysqli_query($con,$query))
	{
		echo 'error';
    }
	else	
    header("refresh:0.3;url=frontend1.php");

	
?>
