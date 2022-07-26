<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'partials/Connect.php';
	$login = false;
	$error = false;
	$loop = false;



	
	
	$email = $_POST['email'];
	$password = $_POST['password'];


	

    $sql = " SELECT * FROM 8userdata WHERE  email = '$email' ; ";
    

	$result = mysqli_query($connection,$sql);

	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	if($num==1){
		if(password_verify($password,$row['password'])){
			$login = true;
			session_start();
			$_SESSION['LoggedIn']=true;
			$_SESSION['email']=$email;
			
			
			header("location:wellcome.php");


			
		}
		else{
			$error = true;
		}
		
		
		
		}
		else{
			$error = true;
		}
		
		
		
		
				
				
		
		/*while($row = = mysqli_fetch_assoc($result)){
			

			if(password_verify($password,$row['password'])){
				

				$login = true ;
				session_start();
				$_SESSION['LoggedIn']==true;
				$_SESSION['email']==$email;
				
				header("location:wellcome.php");
			}
		}*/
		
	}
	


?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login - Social Connections </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<?php
include 'partials/Nav.php';

?>
<br></br>

<?php

if($login){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Login Successfully !</strong> Congratulations You have successfully Log in . <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
	
	
	
	
}


if($error == true){
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong> Invalid Cardinatials !</strong> Please recheck your details. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
}



?>


<br></br>
<br>
<h6 class = "text-center">Login To Social Connections </h6>
<div>

<form action = "Login.php" method = "post">




<div >
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div>
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" name = "password" class="form-control" id="exampleInputPassword1">
</div>



<button style =" margin-top:4%; margin-left:4%;" type="submit" class="btn btn-primary">Login</button>
</form>




</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>