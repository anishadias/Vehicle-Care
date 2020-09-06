<?php
  require 'check.php';
  require 'database.php';
  $id=$_SESSION['id'];
  $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$pass=$_POST['pass'];
	$add=$_POST['add'];
  $query="update user
          set name='$name',email='$email',phone='$phone',dob='$dob',password='$pass',address='$add'";
  $result=mysqli_query($con,$query);
  if(!$result)
  echo "error";
  else
  	header("Location:mainpage.php");
 ?>