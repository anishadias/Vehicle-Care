<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
require 'check.php';
require 'database.php';
$id=$_SESSION['id'];
$query="select * 
        from user 
        where id='$id'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
?>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4 " style="background-color: rgba(247, 52, 52,0.7);">
      <h5 class="text-white h4">Hello. <?php echo $row['name'];?></h5>
       <p></p>
       <p></p>
       <p></p>
      <table class="table table-hover">
  <tbody>
    <tr>
    	<th scope="row"></th>
      <td class="col-11"><a href="editacc.php" class="h6 text-white text-left" style="text-decoration: none">Edit</td>
    </tr>
    <tr>
      <th scope="row"></th>
      	<?php
      	$query1="select id
      	         from license
      	         where id='$id'";
       	 $result1=mysqli_query($con,$query1);
         $row1=mysqli_fetch_assoc($result1);
         if(isset($row1['id'])=='TRUE')
         {
         	?><td class="col-11"><a href="viewlicense.php" class="h6 text-white text-left" style="text-decoration: none">View license</a></td>
         <?php
         }
         else
         {
         ?>
         	<td class="col-11"><a href="addlicense.php" class="h6 text-white text-left" style="text-decoration: none">Add license</a></td>
         <?php
         }
         ?>
    </tr>
    <tr>
      <th scope="row"></th>
      <td class="col-11"><a href="logout.php" class="h6 text-white text-left" style="text-decoration: none">Logout</td></td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
  <nav class="navbar navbar-light" style="background-color: #f73434;">
    <button class="navbar-toggler border border-white" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<?php
// $regno=$_SESSION['regno'];
$queryy="select r.model,v.TYPE,v.regno 
         from rc r,vehicle v
         where r.id =v.id and r.regno=v.regno and v.id='$id'";
 $resultt=mysqli_query($con,$queryy);
 while($roww=mysqli_fetch_assoc($resultt))
 {
  
 if($roww['TYPE'] =='2')
 {
 ?>
<a href="show.php?regno=<?php echo $roww['regno']; ?>" style="text-decoration: none;">
<div class="card text-white bg-success mx-4 my-5 rounded-pill shadow-lg p-3 mb-5 rounded">
  <p class="h4 text-center mt-5"><img src="ai1.png"></p>
  <p></p>
  <p></p>
  <div class="dropdown-divider"></div>
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $roww['model']; ?></h5>
    <p class="card-text text-center text-white">Click to view more!</p>
  </div>
</div>
</a>
<?php
	}
	else
	if($roww['TYPE'] == 4)
	{
	?>
<a href="show.php?regno=<?php echo $roww['regno']; ?>" style="text-decoration: none;">
<div class="card text-white bg-primary mx-4 my-5 rounded-pill shadow-lg p-3 mb-5 rounded" >
  <p class="h4 text-center mt-5"><img src="ai.png"></p>
  <p></p>
  <p></p>
  <div class="dropdown-divider"></div>
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $roww['model']; ?></h5>
    <p class="card-text text-center text-white">Click to view more!</p>
  </div>
</div>
</a>
<?php
}
}
?>
<a href="addvehicles.php" style="text-decoration: none;">
<div class="card bg-light mx-4 my-5 rounded-pill shadow-lg p-3 mb-5 rounded" style="background-color: rgba(209, 182, 180,.1)";>
  <p class="h4 text-center text-dark mt-5">Add vehicles</p>
  <p></p>
  <p></p>
  <div class="dropdown-divider"></div>
  <div class="card-body">
    <h5 class="card-title text-center py-1 my-1"><img src="ai2.png"></h5>
    <p class="card-text text-center text-white">Click to add a vehicle</p>
  </div>
</div>
</a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>