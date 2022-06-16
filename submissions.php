<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <link rel="stylesheet" href="css/styles.css" class="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/3d9e3fadb5.js" crossorigin="anonymous"></script>
</head>
  <style>
  
  .div1{
    margin: 10px;
    width: 1200px;
    height:  1000px;
    position: absolute;
    top: 5%;
    left: 5%;
  }
  .btn{
    padding-right: 30vw;
  }
  </style>
  <body>
 
    <div class="div1">
    
      <a href="ssearch.php">
      <div class="btn">
      <i class="fa-solid fa-magnifying-glass"></i>
        search 
        </div>
      </a>
    
      <table border="1px">
      <tr style="font-family:'Outfit', sans-serif ;">
                <th>PDF</th>
                <th>Name</th>
                <th>HW Title</th>
                </tr>
      <?php
      include 'db.php';

      $sql="SELECT * FROM `pdf_file`";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
        <tr>
      <td><embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="700" height="500"></td>
      <td><?php echo $info['firstname']; ?></td>
      <td><?php echo $info['title']; ?></td>
        </tr>
    <?php
      }

      ?>


    </div>
    </table>
  </body>
</html>