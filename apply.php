<?php
session_start();
include("db.php");

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/web3@1.3.5/dist/web3.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

 <style type="text/css">
  body{
  background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
  }

  <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
</style>

  </head>
  <body>


<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="student.php">
  <span class="material-symbols-outlined">
arrow_back
</span>
    </a>
  </div>
</nav>


  <?php
$name=$_SESSION['name'];
?>

<h1 align="center">Applying For <?php echo "$name"; ?> </h1>


  


  	  <form method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" >
</div>
<div class="mb-3">
  
  <label for="formFile" class="form-label">CV/Resumè</label>
  <input class="form-control" type="file" id="formFile" name="file">
  <br>

  <button class="btn btn-info" name="submit">Apply</button>
</div>
</form>




  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php



if (isset($_POST['submit'])) {
  // Get the email and name values from the $_POST superglobal array
  $email = $_POST["email"];
  $name = $_SESSION['name'];
  
  // Insert the email and name values into the database
  $sql = "INSERT INTO applied (email, company_name) VALUES ('$email', '$name')";
 
  
  // Execute the SQL query
  if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/CAREER%20DEVELOPMENT%20MODULE/student.php");
  } else {
    echo "you have already applied";
  }
}




?>

