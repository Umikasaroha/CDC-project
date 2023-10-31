
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<style type="text/css">
body{
background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
}

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>


</head>
<body>

  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">
      <span class="material-symbols-outlined">
arrow_back
</span>
     Go Back 
    </a>
  </div>
</nav>


<form method="get">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="name">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" >
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
</div>

<label for="inputPassword5" class="form-label" name="password">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" name="password" >
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="branch">Branch</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg. CSE,ECE" name="branch" >

</div>

<br><br>

<input type="submit" class="btn btn-primary" name="register" value="register"></button>
</form>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CDC";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





if(isset($_GET["register"])){
  $name=$_GET["name"];
  $email=$_GET["email"];
  $password=$_GET["password"];
  $x="student";
  $branch=$_GET["branch"];

if($name=="" || $email=="" || $password=="" || $branch=""){
  echo "invalid entries!!!!";
}
else{

$sql = "INSERT INTO student (name,email, password, branch, type)
        VALUES ('$name', '$email', '$password', '$branch', '$x')";

if(!mysqli_query($conn,$sql)){
  echo "Account creation failed";
  
}
else{
  header("Location: http://localhost/CAREER%20DEVELOPMENT%20MODULE/done.php");
}

}

}


?>




