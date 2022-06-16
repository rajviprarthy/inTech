<?php

@include 'db.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylee.css">
   <script src="css/particles.js" type="text/javascript"></script>
</head>
<body>
<div id="particles">
 
  <div id="intro">
  <div class="container">

<div class="content">
   <h3>hi, <span>user</span></h3>
   <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
   <p>user page</p>
   <a href="login_form.php" class="btn">login</a>
   <a href="register_form.php" class="btn">register</a>
   <a href="logout.php" class="btn">logout</a>
   <a href="viewass.php" class="btn">homework</a>
   
</div>
</div>
  </div>
</div>
</body>
</html>