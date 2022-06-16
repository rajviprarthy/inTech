<?php   

 $conn=mysqli_connect('localhost','root','','user_db') or die();  
 $msg="";  
 if (isset($_POST['insert'])) {  
      $name=$_POST['name'];  
      $title=$_POST['title'];
      $number=$_POST['number'];  
      $date=$_POST['date']; 
      $query= "INSERT INTO `tassign`(`subject`, `title`, `hw`, `due` ) VALUES ('$name','$title', '$number', '$date')";  
      $data=mysqli_query($conn,$query);  
      header('location:submitted.php');
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Add assignment </title>  

 </head>  
 <link rel="stylesheet" href="css/stylee.css">
 <body>  
 <div class="form-container">  
    
      <form method="post" action="">  
      <h3>Add homework</h3>  
           <input type="text" name="name" placeholder="enter subject" required>  
           <input type="text" name="title" placeholder="enter title" required>
           <input type="text" name="number" placeholder="enter homework" required>
           <h4 align="left" style="color: #ccff00;">due date and time</h4>
           <input type="datetime-local" name="date" placeholder="due date">  
           <input type="submit" name="insert" value="add assignment" class="form-btn"><br>  
           <?php echo $msg; ?>  
      </form>  
 </div>  
 </body>  
 </html> 