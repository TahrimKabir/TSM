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
               echo '<form method = "POST"><table border="3">

               <tbody>
               <tr>
               <th class="pt-3-half" contenteditable="false">Student ID</td>
               <th class="pt-3-half" contenteditable="false"> Software Security</td>
               </tr>
               <tr>
               <td class="pt-3-half" name="s1" contenteditable="true"></td>
               <td class="pt-3-half"name="s1" contenteditable="true"></td>
               </tr>
               <tr>
               <td class="pt-3-half" contenteditable="true"></td>
               <td class="pt-3-half" contenteditable="true"></td>
               </tr>
               </tbody>
               </table> </form>';
             }
             elseif ($course=='Software Metrics') {
               // code...
               echo '<form  method="POST"  action ="action.php">
               <table border="1">

               <tbody>
               <tr>
               <th class="pt-3-half" contenteditable="false">Student ID</td>
               <th class="pt-3-half" contenteditable="false"> Software Metrics</td>
               </tr>
               <tr>
               <td class="pt-3-half" contenteditable="true" name="s1">1825001M</td>
               <td class="pt-3-half" contenteditable="true" name="n1"></td>
               </tr>
               <tr>
               <td class="pt-3-half" contenteditable="true" name="s2">1825008M</td>
               <td class="pt-3-half" contenteditable="true" name="n2"></td>
               </tr>
               </tbody>
               </table>
               <br>
               <input type="submit" name="send" value = "send">

               </form>


               ';


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
