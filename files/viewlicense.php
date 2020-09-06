<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
	require 'database.php';
	require 'check.php';
	if(!$con)
	{
		echo "error";
	}
	$id=$_SESSION['id'];
	$query="select * 
        from license 
        where id='$id'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);

	?>
	<div style="margin-top: 100px;"> 
	<div class="container"   style=" background-color: rgba(0, 0, 255,.1);">
<div class="card">
  <h5 class="card-header">License no. <?php echo $row['lic_no']; ?></h5>
  <div class="card-body">
  	<div class="row">
    <p class="card-text col-6">d.o.b :</p>
    <p class="card-text col-6"><?php echo $row['dob']; ?></p>
    </div>
    <div class="row">
    <p class="card-text col-6">Reg. date :</p>
    <p class="card-text col-6"><?php echo $row['lic_date']; ?></p>
    </div>
    <div class="row">
    <p class="card-text col-6">Valid Till :</p>
    <p class="card-text col-6"><?php echo $row['valid_till']; ?></p>
    </div>
    <div class="row">
    <div class="dropdown">
    <a href="#" class="btn btn-danger mr-2 dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Update</a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <form class="dropdown-item" action="javascript:void(0);" method="post" id="myform" name="myform">
    	<input class="form-control mb-1" type="text" name="date" placeholder="renewed date(yyyy-mm-dd)">
    	<input class="form-control" type="text" name="val_date" placeholder="valid date (yyyy-mm-dd)">
    	<button type="submit" class="btn btn-danger mt-1" onclick="javascript:completeAndRedirect();">save</button>
    </form>
  </div>
</div>
    <a href="mainpage.php" class="btn btn-danger ml-2">Back</a>
</div>
  </div>
</div>
</div>
</div>
<script>
	function completeAndRedirect(){
		var r =confirm("Are your sure?");
		if(r==true){
		document.getElementById("myform").action="updateli.php";
		document.getElementById("myform").submit();
	}
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>