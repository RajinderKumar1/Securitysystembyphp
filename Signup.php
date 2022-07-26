<?php
/* Requirments Install Xamp in pc
and make a database name users 
then make a table in database name 8userdata also set
table values as name , mobile ,email and password 
Note : set password length 255 in database

*/

//check that method is post or not

if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'partials/Connect.php';
	$exist = false;
	$error = false;


//get data from form
	
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
//sql query to check that name is alredy register or not
	$exist_db = "SELECT * FROM 8userdata WHERE name = '$name';";
//submit query first is parameter from connect.php and 2nd query	
	$resultex = mysqli_query($connection,$exist_db);
	
	//check the  number of rows effected by query
	$numexistrows = mysqli_num_rows($resultex);
     //to  check email 
    $exist_email = "SELECT * FROM 8userdata WHERE email = '$email';";
    $resultnew = mysqli_query($connection,$exist_email);
    $row = mysqli_fetch_assoc($resultnew);
    //to check mobile
     $exist_mobile = "SELECT * FROM 8userdata WHERE mobile = '$mobile;";
     $resultmob = mysqli_query($connection,$exist_mobile);
     



     
//if user try to submit blank form

	if($name == ''&& $email == ''){
		$error = true;
		$errortxt =" Please Fill all details !";
		header('location:Signup.php');
		exit;
	}
	//if user name already exist
	if($numexistrows>0){
		$error = true;
		$errortxt = "User Already exists";
		
	}
	elseif($email == $row['email']){
		$error = true;
		$errortxt = "Email already exists !";
		
	}
	elseif($resultmob>0){
		$error = true;
		$errortxt = "Mobile already exists";
		
		}
	else{
		
//if user enter correct and unique data then check password is equal or not
		if($password == $cpassword ){
//genrate hash password
			$hash = password_hash($password,PASSWORD_DEFAULT);
//query to submit data in database
			$sql = " INSERT INTO `8userdata` ( `name`, `mobile`, `email`, `password`, `time`) VALUES ('$name', '$mobile', '$email', '$hash', current_timestamp());   ";
//submit query
			$result = mysqli_query($connection,$sql);
			
		}
		else{
			//if password not match or uncorrect show error
			$error = true;
			$errortxt = "Password Do not match !";
		}


		
	}

}


?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign up - Social Connections </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<?php
include 'partials/Nav.php';

?>
<br><br>
<?php

if($result){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Sign up Successfully !</strong> Congratulations You have successfully Sign up . <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
	
	
	
	
}


if($error == true){
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>'.$errortxt.'</strong> Please recheck your details. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
}
?>


<br></br>
<br>
<h6 class = "text-center">Sign up To Social Connections </h6>
<div>

<form action = "Signup.php" method = "post">

<div>
<div >
<label for="name" class="form-label">Username</label>
<input type="text" class="form-control" name = "name"  id="Name">
</div>

<div >
<label for="mobile" class="form-label">Mobile</label></label>
<input type="number" class="form-control" name = "mobile"  id="mobile">
</div>
<div id="emailHelp" class="form-text">We'll never share your Mobile with anyone else.</div>
</div>

<div >
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

<div>
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" name = "password" class="form-control" id="exampleInputPassword1">
</div>


<div >
<label for="exampleInputPassword1" class="form-label">Confirm Password</label>
<input type="password" name = "cpassword" class="form-control" id="exampleInputPassword1">
</div>

<button style =" margin-top:4%; margin-left:4%;" type="submit" class="btn btn-primary">Sign up</button>
</form>




</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>