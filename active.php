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
    <a class="navbar-brand" href="company.php">
      <span class="material-symbols-outlined">
arrow_back
</span>
     Go Back 
    </a>
  </div>
</nav>

<h1>COMPANY IS NOW ACTIVELY RECRUITING</h1>
   



<?php

$sql="SELECT *FROM company WHERE status='active'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	echo"<br>";

  while($row=mysqli_fetch_assoc($result)){
    
    
    echo "<div class='post'>";
    echo "<p class= 'name' style='color:black;' name='name'> <b>".$row["name"]. "</h4>  </b>  "                           ;
  
   echo "<p class= 'deadline' name='deadline'> Application Deadline- <b>".$row["deadline"]."</p></b>";


    echo "<p class= 'poc' name='poc'> POC- ".$row["POC"]."</p>";


}

}



?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

