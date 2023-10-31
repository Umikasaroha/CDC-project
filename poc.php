
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



<style>
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
logout
</span>
    </a>
  </div>
</nav>

<?php
$name=$_SESSION['user'];
?>

<h1>Welcome <?php echo "$name"; ?></h1>




<br><br>

<?php

 $x=$_SESSION['user'];

    $sql = "SELECT * FROM company WHERE POC='".$x."' ";
    
    $res=mysqli_query($conn,$sql);
    
  
       if(mysqli_num_rows($res)>0){

       	 while($row=mysqli_fetch_assoc($res)){
    
    echo "<div class='post'>";
    echo "<b><p class= 'name' style='color:black;' name='name'> ".$row["name"]. "</h4>   </b> "                           ;
   
   echo "<p class= 'mission' name='mission'> Mission- ".$row["mission"]."</p>";

   echo "<p class= 'role' name='role'> Role- ".$row["role"]."</p>";
    
    
    echo"</div>";


  echo "<a class='btn btn-info' href='data.php'> View Students </a>";
  
}

}

?>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>





