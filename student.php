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
    <a class="navbar-brand" href="login.php">
      <span class="material-symbols-outlined">
logout
</span>
      Logout
    </a>
  </div>
</nav>





<?php



$sql="SELECT *FROM company WHERE deadline > (SELECT now())";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  

  while($row=mysqli_fetch_assoc($result)){
    
    echo "<div class='post'>";
    echo "<br>";
    echo "<p class= 'name' style='color:black;' name='name'> ".$row["name"]. "</h4>    "                           ;
   
   echo "<p class= 'mission' name='mission'> Mission- ".$row["mission"]."</p>";

   echo "<p class= 'role' name='role'> Role- ".$row["role"]."</p>";
    
     echo "<p class= 'package' name='package'> Package Offered- ".$row["package"]."</p>";
    
    echo"</div>";

    ?>
  
 <a href="student.php?name=<?php echo urlencode($row['name']); ?>" class="btn btn-danger">Apply</a>



  

  <?php
  }
  
  

  }


?>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>




<?php


$_SESSION['name'] = $_GET["name"];
if(isset($_GET["name"])){
header("Location: http://localhost/CAREER%20DEVELOPMENT%20MODULE/apply.php");
}
?>


