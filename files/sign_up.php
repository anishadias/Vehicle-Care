<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div style="margin-top: 40px;"> 
	<div class="container"   style=" background-color: rgba(0, 0, 255,.1);">
		<p class="h3"><strong>Create your Account</strong></p>
		<p class="h5">to get started</p>
	<form action="register.php" method="post">
	<div class="form-row">
		<label for="exampleInputName1">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-row">
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    </div>
      
    <div class="form-group">
      <label for="inputAddress1">Address</label>
      <input type="text" class="form-control" name="add" id="inputAddress" placeholder="Address">
      </div>
      <div class="form-row">
    <div class="form-group">
    	<label for="exampleInputNumber1">Mob. number</label>
        <input type="tel" class="form-control" name="phone" id="inputPhoneNumber" placeholder="Mob. number">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group">
      <label for="inputDate">date of birth</label>
      <input type="text" class="form-control" name="dob" id="inputDate" placeholder="yyyy-mm-dd">
    </div>
</div>
    <div class="form-row">
     <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="pass" id="inputPassword4" placeholder="Password">
    </div>
    </div>
  <input type="submit" value="Sign up" name="submit" class="btn btn-danger">
</form>
</div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>