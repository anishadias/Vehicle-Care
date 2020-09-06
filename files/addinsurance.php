<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div style="margin-top: 100px;"> 
  <div class="container"   style=" background-color: rgba(0, 0, 255,.1);">
<form action="javascript:void(0);" method="post" id="myform" name="myform">
  <div class="row">
    <p class="h3 ml-3">Fill insurance details here!!</p>
  </div>
  <div class="form-group">
    <label for="inputAddress">Insurance id</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="id " name="iid">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Insurance company</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="eg:-icici" name="ic">
  </div>
  <div class="form-row">
    <div class="form-group col-12">
      <label for="inputCity">Amount</label>
      <input type="text" class="form-control" id="inputCity" placeholder="" name="amt">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of start</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="YYYY-MM-DD" name="date">
  </div>
  <div class="row">
  <button type="submit" class="btn btn-danger mb-3 ml-5" onclick="javascript:completeAndRedirect();">Save & continue</button>
</div>
</form>
</div>
</div>
<script>
  function completeAndRedirect(){
    var r =confirm("Are your sure?");
    if(r==true){
    document.getElementById("myform").action="insertin.php";
    document.getElementById("myform").submit();
  }
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>