

<?php
session_start();
require 'database.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$query="select * from user";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($result))
	 {
		if($row['email']==$email && $row['password']==$pass)
		{
			$_SESSION['rusername']="found";
			$_SESSION['id']=$row['id'];
			header("Location:mainpage.php");
		}
		else
		{
			echo "error";
		}
	}

}

?>
