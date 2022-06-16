<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style media="screen">
      *{
        font-family: 'Outfit', sans-serif;
      }
      body{
        background: #000;
      }
      div{
        border: 2px solid #ccff00;
        width: 500px;
        margin-left: 370px;
        margin-top: 50px;
        padding: 30px;
      }
      form{
        margin-left: 70px;
        color: #cea5ad;
      }
      label{
        color: #70aabc;
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 20px;
      }
      #pdf, #name, #firstname{
        font-size: 30px;
        font-weight: bold;
        margin-top: 10px;
      }
      #name, #firstname{
        margin-bottom: 20px;
      }
      #upload{
        font-size: 35px;
        font-weight: bold;
        margin-left: 100px;
        background: #ccff00;
      }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="">
      <form class="" action="addfile.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="firstname" type="text" name="firstname" placeholder="enter your name">
        <input id="name" type="text" name="name" placeholder="enter homework title">
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
          $firstname=$_POST['firstname'];
          $name=$_POST['name'];
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;
          header('location:uploaded.php');
          
          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO `pdf_file`(`pdf`, `title`, `firstname` ) values('$pdf','$name', '$firstname')";
          $query=mysqli_query($conn,$sql);



        }



         ?>

      </form>

    </div>

  </body>
</html>