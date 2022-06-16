<?php 

 $conn=mysqli_connect("localhost","root","","user_db");  
 if ($conn) {  
      echo "Connection successful";  
 }else{  
      echo "Error";  
 }  
 
 $query="select * from tassign";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); 

 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>view assignment</title>  
       <link rel="stylesheet" href="css/styles.css" class="stylesheet">
       <script src="https://kit.fontawesome.com/3d9e3fadb5.js" crossorigin="anonymous"></script>
 </head>  
 <body>  
 <div class="container">  
 <a href="search.php">
      <div class="btn">
      <i class="fa-solid fa-magnifying-glass"></i>
        search 
        </div>
      </a>
      <table border="1">  
           <tr>  
                  
                <th>Subject</th>
                <th>Title</th>    
                <th>Homework</th>  
                <th>Due date</th>  
                 
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                              
                               <td>".$data['subject']."</td>  
                               <td>".$data['title']."</td>  
                               <td>".$data['hw']."</td>  
                               <td>".$data['due']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table> 
      <div class="button">
      <a href="addfile.php" class="btn">Turn in</a>
    </div> 
 </div>  
 </body>  
 </html>  