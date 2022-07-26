<?php


session_start();
if($_SESSION['LoggedIn']==false or !isset($_SESSION['LoggedIn'])){
	header("location:Login.php");
	exit;
}

include 'partials/Connect.php';
$email = $_SESSION['email'];
$sql = " SELECT * FROM 8userdata WHERE  email = '$email' ; ";


$result = mysqli_query($connection,$sql);
$rows_total =  mysqli_num_rows($result);

$rows = mysqli_fetch_assoc($result);

include 'partials/Nav.php';


echo "<br>";
echo "Wellcome ".$_SESSION['email'];
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<br></br>
  <br>
  <?php echo '<div class="card">
<div class="card-header">
Your Details
</div>
<div class="card-body">
<h5 class="card-title"> '.$rows['name'].'</h5>
<p class="card-text"> Contect : '.$rows['mobile']. '<br> Email   :  '.$rows['email'].'</p>
<a href="Logout.php" class="btn btn-primary">Log out</a>
</div>
</div>    ';


?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
