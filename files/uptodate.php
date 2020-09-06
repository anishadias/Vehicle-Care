<?php
require 'database.php';
session_start();
$regno=$_SESSION['update'];
if(isset($_POST['sub1']))
{

 $date=$_POST['date'];
 $d=date_create($date);
 $val_date=date_add($d, date_interval_create_from_date_string("5 year"));
 echo $val_date;


}
if(isset($_POST['sub2']))
{
 $date=$_POST['date'];
 $val_date=$_POST['val_date'];	
}
if(isset($_POST['sub3']))
{
 $date=$_POST['date'];
 $val_date=$_POST['val_date'];	
}