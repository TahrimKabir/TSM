<?php
include 'conn.php';
    $conn= connect();

/*if(isset($_POST["create"])){
$date = $_POST["datetime"];
$course = $_POST["v1"];

echo '<form action="" method="post">
            <input type="text" name="CourseID" value="Tahrim">
            <input type="submit" value="Edit" name="Edit">
        </form>';


}*/

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Teacher's Panel</title>
   </head>
   <body>
      <div class="select">
        <form class="" action="" method="POST">

          <input type="date" name="datetime" value="">
          Course List :
  <select name="course">
    <option value="" disabled selected>Choose option</option>
    <option value="Software Security">Software Security</option>
    <option value="Software Metrics">Software Metrics</option>
  </select>
  Student Year :
  <select name="year">
    <option value="" disabled selected>Choose option</option>
          <option value="Software Security">Software Security</option>
          <option value="Software Metrics">Software Metrics</option>

  </select>

  <input type="submit" name="create" value="CREATE">
  <br>
  <br>
  <br>
        </form>

        <?php

        if(isset($_POST["create"])){
        $date = $_POST["datetime"];
        $course = $_POST["course"];
        $year = $_POST["year"];
           if(!empty($date)&&!empty($course)&&!empty($year)){

             if ($course=='Software Security') {
               // code...
               header("Location: security.php");

             }
             elseif ($course=='Software Metrics') {
               // code...

              header("Location: sm.php");


             }



           }
           else {
             echo "Insert the values";
           }



        }

         ?>

      </div>
   </body>
 </html>
