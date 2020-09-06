<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 100px;"> 
	<div class="container p-5"   style=" background-color: rgba(0, 0, 255,.1);">
	<p class="h3"><strong>Add License</strong></p>
	<form action="javascript:void(0);" method="post" id="myform" name="myform">
  <div class="form-row">
		<label for="exampleInputName1">license number</label>
      <input type="text" class="form-control" name="license" placeholder="Enter license number">
    </div>
  <div class="form-row">
		<label for="exampleInputName1">date of birth</label>
      <input type="text" class="form-control" name="dob" placeholder="yyyy-mm-dd">
    </div>
  <div class="form-row">
		<label for="exampleInputName1">Date of register</label>
      <input type="text" class="form-control" name="date" placeholder="yyyy-mm-dd">
    </div>
     <div class="form-row">
		<label for="exampleInputName1">valid date</label>
      <input type="text" class="form-control" name="val_date" placeholder="yyyy-mm-dd">
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
  <button type="submit" class="btn btn-danger" onclick="javascript:completeAndRedirect();">Save</button>
</div>
</div>
</form>
	</div>
    </div>
    <script>
	function completeAndRedirect(){
		var r =confirm("Are your sure?");
		if(r==true){
		document.getElementById("myform").action="insertlicense.php";
		document.getElementById("myform").submit();
	}
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>