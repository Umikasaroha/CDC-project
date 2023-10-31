
<?php
session_start();
include("db.php");
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
     

   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="style.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style type="text/css">
body{
background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
}
</style>

</head>
<body>



	<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="nitk.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      NITK CDC PORTAL
    </a>
  </div>
</nav>
<br><br>

<h3 align="center">Welcome To The NITK Login Page</h3>
<br><br>


<form method="post" id="loginform">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name">
</div>



<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" name="password">
<div id="passwordHelpBlock" class="form-text">
  
</div>

 <div class="col-md-4">
    <label for="inputState" class="form-label">are you a/an</label>
    <select id="inputState" class="form-select" name="type">
      <option selected>Choose...</option>
      <option>admin</option>
      <option>poc</option>
      <option>student</option>
    </select>
  </div>
<br>
<br>
 <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
</form>


<br><br>

<h1>No Account yet? Register</h1><a href="signup.php" class="btn btn-info">Here</a>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>


<?php


if(isset($_POST["login"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["type"])) {
	$Un=$_POST["name"];
	$Pw=$_POST["password"];
	$type=$_POST["type"];

	if($Un == "" || $Pw== ""){
		echo "please fill up the required details";
	}
	else{
		$sql="SELECT * FROM student WHERE name= '".$Un."' AND password='".$Pw."' AND type='".$type."'" ;
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		$_SESSION['user']=$Un;
		if($type=='student'){
		header("Location: http://localhost/CAREER%20DEVELOPMENT%20MODULE/student.php");	
		}
		else if($type=='poc'){
			header("Location: http://localhost/CAREER%20DEVELOPMENT%20MODULE/poc.php");	
		}
		else if($type=='admin'){
			header("Location: http://localhost/CAREER%20DEVELOPMENT%20MODULE/company.php");	
		}


		}

		else{
			echo "user not found..Kindly register";
		}
	}

}

?>

