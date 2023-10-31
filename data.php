<?php
session_start();
include("db.php");
$x= $_SESSION['user'];
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
    <a class="navbar-brand" href="poc.php">
      <span class="material-symbols-outlined">
arrow_back
</span>
     Go Back 
    </a>
  </div>
</nav>

<h1 align="center">Students Under You</h1>
<br>
<br>

<?php
// Create a mysqli connection
$mysqli = new mysqli("localhost", "root", "", "CDC");

// Escape the $x variable to prevent SQL injection
$x = $mysqli->real_escape_string($x);

// Build the SQL query
$sql = "SELECT distinct a.email, a.company_name 
        FROM applied AS a, company AS c, POC AS p 
        WHERE c.POC='".$x."' AND c.name=a.company_name";

// Execute the query and store the result set
$result = $mysqli->query($sql);

// Loop through the result set and output the data
while ($row = $result->fetch_assoc()) {
    $email = $row['email'];
    $company_name = $row['company_name'];
    
    // Output the data however you want
    
    echo "<p><b>Email</b>- $email<br>";
    echo "<b>company name</b>- $company_name</p>";

}

// Free the result set and close the connection
$result->free();
$mysqli->close();
?>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>




</html>



