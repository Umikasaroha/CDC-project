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
    <a class="navbar-brand" href="company.php">
      <span class="material-symbols-outlined">
arrow_back
</span>
     Go Back 
    </a>
  </div>
</nav>


   
    <br>
    <h4 align="center">Add The Company Details Here</h4>
    <br>



<form method="post">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Company Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mission</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mission"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Role Offered</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="role">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Package</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="package">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Branch Specification</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="branchspec">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Status</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="status">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Application Deadline</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" name="deadline">
</div>

<div> 
<button class="btn btn-info" name="add" value="add">Add Company</button>

</div>


</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>


<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CDC";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["add"])){
// Get values from HTML form
$name = $_POST['name'];
$mission = $_POST['mission'];
$role = $_POST['role'];
$package = $_POST['package'];
$poc = "N/A";
$branch_spec = $_POST['branch_spec'];
$status = $_POST['status'];
$deadline = $_POST['deadline'];
$deadline=date("Y-m-d",strtotime($deadline));

// Prepare and execute the SQL statement
$sql = "INSERT INTO company (name, mission, role, package, poc, branch_spec, status, deadline)
        VALUES ('$name', '$mission', '$role', '$package', '$poc', '$branch_spec', '$status', '$deadline')";

if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/CAREER%20DEVELOPMENT%20MODULE/company.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}



?>
