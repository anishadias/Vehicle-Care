<?php
session_start();
require 'database.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$chassis=$_POST['chassis'];
	$regno=$_POST['regno'];
	$type=$_POST['type'];
	$id=$_SESSION['id'];
	$query="insert into vehicle(id,chassis,regno,TYPE) values('$id','$chassis','$regno','$type')";

	if(!mysqli_query($con,$query))
	{
		echo 'error';
    }
	else
	$_SESSION['regno']=$regno;
    $a=$_SESSION['regno']; 	
    $_SESSION['chassis']=$chassis;	
    header("refresh:0.1;url=addrc.php");

	
?>
