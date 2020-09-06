<?php
session_start();
require 'database.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$date=$_POST['date'];
	$iid=$_POST['iid'];
	$amt=$_POST['amt'];
	$ic=$_POST['ic'];
	$id=$_SESSION['id'];
	$chassis=$_SESSION['chassis'];
	$regno=$_SESSION['regno'];
	$valid='0000-00-00';
	$query="insert into insurance(insurance_id,company,amt,regno,start_date,valid_date) values('$iid','$ic','$amt','$regno','$date','$valid')";
	if(!mysqli_query($con,$query))
	{
		echo 'error';
    }
    $query1="CALL in_add('$iid','$regno','$date');";
    $result1=mysqli_query($con,$query1);
	if(!$result1)
	{
		echo 'error1';
    }
	else	
    header("refresh:0.1;url=addemission.php");

	
?>
