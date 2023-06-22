<?php

include 'conn.php';
    $conn= connect();

    $sql = "SELECT * FROM course";
    $crs=$conn->query($sql);

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="POST">


       Course List :
<select name="course">
 <!--<option value="" disabled selected>Choose option</option>
 <option value="Software Security">Software Security</option>
 <option value="Software Metrics">Software Metrics</option>-->

  <?php
     if (mysqli_num_rows($crs)>0) {
       // code...
       while ($row = mysqli_fetch_assoc($crs)) {
         // code...
         echo "<option>".$row['c_name']."</option>";
       }
     }


   ?>


</select>

<input type="submit" name="create" value="CREATE">
<br>
<br>
<br>
     </form>




     <?php

     if(isset($_POST["create"])){

     $course = $_POST["course"];

        if(!empty($course)){


            // code...
          //  require "security.php";
          if ($course =="Software Security") {
            header('Location: soft_sec.php');
            // code...
          }
          elseif ($course =="Software Metrics") {
            // code...

          }





          }



        }






      ?>


   </body>
 </html>
