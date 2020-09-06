<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div style="margin-top: 100px;"> 
<div class="container p-5"   style=" background-color: rgba(0, 0, 255,.1);">
<p class="h3"><strong>Add Vehicle Details</strong></p>

<form action="javascript:void(0);" method="post" id="myform" name="myform">
  <div class="form-row">
		<label for="exampleInputName1">Chassis number</label>
      <input type="text" class="form-control" name="chassis" placeholder="Enter chassis number">
    </div>
  <div class="form-row">
		<label for="exampleInputName1">Register number</label>
      <input type="text" class="form-control" name="regno" placeholder="reg no.">
    </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Type</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="2" checked>
          <label class="form-check-label" for="gridRadios1">
            2 wheeler
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="4">
          <label class="form-check-label" for="gridRadios2">
            4 wheeler
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-danger" onclick="javascript:completeAndRedirect();">Save & continue</button>
    </div>
  </div>
</form>
</div>
</div>
<script>
	function completeAndRedirect(){
		var r =confirm("Are your sure?");
		if(r==true){
		document.getElementById("myform").action="insertvehicle.php";
		document.getElementById("myform").submit();
	}
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>