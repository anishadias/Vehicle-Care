<?php
session_start();
require 'database.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$license=$_POST['license'];
	$dob=$_POST['dob'];
	$date=$_POST['date'];
	$id=$_SESSION['id'];
	$val_date=$_POST['val_date'];
	$query="CALL lc_val('$license','$id','$dob','$date','$val_date');";
	
	$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo 'error';
    }
    $query1="CALL li_add('$date','$id');";
    $result1=mysqli_query($con,$query1);
	if(!$result1)
	{
		echo 'error1';
    }
    
	else	
    header("refresh:0.1;url=mainpage.php");

	
?>
