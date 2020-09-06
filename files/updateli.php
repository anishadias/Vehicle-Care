<?php
session_start();
require 'database.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$date=$_POST['date'];
	$val_date=$_POST['val_date'];
	$id=$_SESSION['id'];
	$query="update license set lic_date='$date' , valid_till='$val_date' where id='$id'";
	if(!mysqli_query($con,$query))
	{
		echo 'error';
    }
	else	
    header("refresh:0.3;url=viewlicense.php");

?>