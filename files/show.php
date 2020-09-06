<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
	require 'database.php';
  session_start();
	$_SESSION['update']=$_GET['regno'];
	$regno=$_GET['regno'];
	$query="SELECT v.regno,v.chassis,v.TYPE,r.colour,r.engine,r.fuel,r.manufacturer,r.model,r.regdate,r.valid_date,i.amt,i.company,i.insurance_id,i.start_date,i.valid_date,e.emi_date,e.emi_type,e.valid_date 
from emission e,insurance i ,rc r,vehicle v  where e.regno=v.regno and i.regno=v.regno and r.regno=v.regno and v.regno='$regno'";
    $result=mysqli_query($con,$query);
    if(!$result)
    {
    	echo "error";
    }
    $row=mysqli_fetch_assoc($result);
	?>
	<div class="container">
		<p class="h2 text-center"><?php $row['model']; ?></p>
		<p></p>
<div class="card  my-5">
  <div class="card-header">
    Registration certificate
  </div>

  <div class="card-body">
  	<div class="container">
    <div class="row">
    <p class="card-text col-4">Chassis number:</p>
    <p class="card-text col-4"><?php echo $row['chassis']; ?></p>
</div>
     <div class="row">
    <p class="card-text col-4">Register number:</p>
    <p class="card-text col-4"><?php echo $row['regno']; ?></p>
</div>
    <div class="row">
    <p class="card-text col-4">Type:</p>
    <p class="card-text col-4"><?php echo $row['TYPE']; ?></p>
</div>
    <div class="row">
    <p class="card-text col-4">Colour:</p>
    <p class="card-text col-4"><?php echo $row['colour']; ?></p>
</div>
    <div class="row">
    <p class="card-text col-4">Engine:</p>
    <p class="card-text col-4"><?php echo $row['engine']; ?></p>
</div>
   <div class="row">
    <p class="card-text col-4">Fuel:</p>
    <p class="card-text col-4"><?php echo $row['fuel']; ?></p>
</div>
   <div class="row">
    <p class="card-text col-4">manufacturer:</p>
    <p class="card-text col-4"><?php echo $row['manufacturer']; ?></p>
</div>
    <div class="row">
    <p class="card-text col-4">Model:</p>
    <p class="card-text col-4"><?php echo $row['model']; ?></p>
</div>
    <div class="row">
    <p class="card-text col-4">Registered date:</p>
    <p class="card-text col-4"><?php echo $row['regdate']; ?></p>
</div>
<div class="row">
    <p class="card-text col-4">Valid through:</p>
    <p class="card-text col-4"><?php echo $row['valid_date']; ?></p>
</div>
<!-- <div class="row">
	<div class="dropdown">
    <a href="#" class="btn btn-danger mr-2 dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Update</a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <form class="dropdown-item" action="javascript:void(0);" method="post" id="myform" name="myform">
    	<p>Enter renewed date</p>
    	<input class="form-control mb-1" type="date" name="date" placeholder="renewed date(yyyy-mm-dd)">
    	<button type="submit" name="sub1" class="btn btn-danger mt-1" onclick="javascript:completeAndRedirect();">save</button>
    </form>
  </div>
</div>
  </div>   -->
  </div>
  </div> 
  <div class="card-footer text-muted">
  </div>
</div>
<div class="card  my-5">
  <div class="card-header">
    Insurance certificate
  </div>

  <div class="card-body">
  	<div class="container">
  		<div class="row">
    <p class="card-text col-4">Insurance ID</p>
    <p class="card-text col-4"><?php echo $row['insurance_id']; ?></p>
</div>
    <div class="row">
    <p class="card-text col-4">Insurance company:</p>
    <p class="card-text col-4"><?php echo $row['company']; ?></p>
</div>
     <div class="row">
    <p class="card-text col-4">Insurance amount:</p>
    <p class="card-text col-4"><?php echo $row['amt']; ?></p>
</div>
    
    <div class="row">
    <p class="card-text col-4">Renewed on:</p>
    <p class="card-text col-4"><?php echo $row['start_date']; ?></p>
</div>
    <div class="row">
    <p class="card-text col-4">Next renewal on:</p>
    <p class="card-text col-4"><?php echo $row['valid_date']; ?></p>
</div>
<!-- <div class="row">
	<div class="dropdown">
    <a href="#" class="btn btn-danger mr-2 dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Update</a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <form class="dropdown-item" action="javascript:void(0);" method="post" id="myform" name="myform">
    	<p>Enter renewed date</p>
    	<input class="form-control mb-1" type="date" name="date" placeholder="renewed date(yyyy-mm-dd)">
    	<button type="submit" name="sub1" class="btn btn-danger mt-1" onclick="javascript:completeAndRedirect();">save</button>
    </form>
  </div>
</div>
  </div>   -->
  </div>
  </div> 
  <div class="card-footer text-muted">
  </div>
</div>
<div class="card  my-5">
  <div class="card-header">
    Emission certificate
  </div>

  <div class="card-body">
  	<div class="container">
    <div class="row">
    <p class="card-text col-4">Test date:</p>
    <p class="card-text col-4"><?php echo $row['emi_date']; ?></p>
</div>
     <div class="row">
    <p class="card-text col-4">Valid Till:</p>
    <p class="card-text col-4"><?php echo $row['valid_date']; ?></p>
</div>
<!-- <div class="row">
	<div class="dropdown">
    <a href="#" class="btn btn-danger mr-2 dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Update</a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <form class="dropdown-item" action="javascript:void(0);" method="post" id="myform" name="myform">
    	<p>Enter renewed date</p>
    	<input class="form-control mb-1" type="date" name="date" placeholder="renewed date(yyyy-mm-dd)">
    	<button type="submit" name="sub3" class="btn btn-danger mt-1" onclick="javascript:completeAndRedirect();">save</button>
    </form>
  </div>
</div>
  </div>   -->
  </div>
  </div> 
  <div class="card-footer text-muted">
  </div>
</div>
</div>
<div class="container">
<button type="button" class="btn btn-lg btn-danger" onclick="location.href='mainpage.php'">Back</button>
</div>
<script>
	function completeAndRedirect(){
		var r =confirm("Are your sure?");
		if(r==true){
		document.getElementById("myform").action="uptodate.php";
		document.getElementById("myform").submit();
	}
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>