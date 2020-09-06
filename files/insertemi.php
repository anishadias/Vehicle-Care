<?php
session_start();
require 'database.php';
if(!$con)
{
  echo "database not connected".mysql_error();
}

  $eid=$_POST['type'];
  $dot=$_POST['dot'];
  $valid='0000-00-00';
  $regnoo=$_SESSION['regno'];
  // echo $ic;
  // echo $regno;
  // echo $valid;
  $query="insert into emission(regno,emi_type,emi_date,valid_date) values('$regnoo','$eid','$dot','$valid')";
  if(!mysqli_query($con,$query))
  {
    echo 'error';
    }
    $query1="CALL emi_add('$regnoo','$dot');";
    $result1=mysqli_query($con,$query1);
  if(!$result1)
  {
    echo 'error1';
    }
  else  
    header("refresh:0.1;url=mainpage.php");

  
?>
