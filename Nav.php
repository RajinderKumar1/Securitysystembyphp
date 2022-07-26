<?php
//check that session login set or not means user login or not
if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']==true){
	$logedin = true;
}
else{
	$logedin = false;
}


?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Social Connections.com</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div id = "Container">

<nav class="navbar navbar-dark bg-dark fixed-top">
<div class="container-fluid">
<a class="navbar-brand" href="#">Social Connections.com</a>
<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
<div class="offcanvas-header">
<h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Social Connections</h5>
<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
<li class="nav-item">
<?php 
//if user login then show home and logout page
if($logedin){

	echo ' <a class="nav-link active" aria-current="page" href="wellcome.php">Home</a>
</li>   ';
    echo '   <li class="nav-item">
<a class="nav-link" href="Logout.php">Log out</a>
</li> ';


	
}
else{ 
	echo '<li class="nav-item">
	<a class="nav-link" href="Signup.php">Signup</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="Login.php">Log in</a>
	</li>  ';




}

?>






</form>
</div>
</div>
</div>
</nav>





</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>