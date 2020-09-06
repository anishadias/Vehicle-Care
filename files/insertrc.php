<?php
session_start();
require 'database.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$date=$_POST['date'];
	$man=$_POST['man'];
	$model=$_POST['model'];
	$col=$_POST['col'];
	$eng=$_POST['eng'];
	$fuel=$_POST['fuel'];
	$id=$_SESSION['id'];
	$chassis=$_SESSION['chassis'];
	$regno=$_SESSION['regno'];
	$valid='0000-00-00';
	$query="insert into rc(id,chassis,regno,regdate,manufacturer,model,colour,engine,fuel,valid_date) values('$id','$chassis','$regno','$date','$man','$model','$col','$eng','$fuel','$valid')";
	if(!mysqli_query($con,$query))
	{
		echo 'error';
    
    $query1="CALL rc_add('$id','$regno','$date');";
    $result1=mysqli_query($con,$query1);
	if(!$result1)
	{
		echo 'error1';
    }
}
	else	
	{
    header("refresh:0.1;url=addinsurance.php");
    }
	
?>
