<?php
include 'conn.php';
    $conn= connect();

$uno = "SELECT * FROM soft_sec UNION SELECT * FROM student ";
$v=$conn->query($uno);
$s1 = "SELECT * FROM student ";
$v1=$conn->query($s1);

  if(isset($_POST['give'])){
        $roll = $_POST['roll'];
        $snum = $_POST['snum'];

            $sq= "INSERT INTO soft_sec(roll,snum) VALUES('$roll', '$snum')";

            if($conn->query($sq)==true){
                header('Location: login.php');
            }
            else{
                echo "string";
            }

    }



 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="mark">
       <form   method="post" >
         <select name="roll">

             <?php
                if (mysqli_num_rows($v1)>0) {
                  // code...
                  while ($row = mysqli_fetch_assoc($v1)) {
                    // code...
                    echo "<option>".$row['sname']."</option>";
                  }
                }


              ?>

         </select>
      <!--  <input type="text" name="roll" value="">-->
        <input type="number" name="snum" >
        <input type="submit" name="give" value="give">
       </form>

     </div>

     <div class="show">

       <table border="1">
         <?php

              if (mysqli_num_rows($v)>0) {

                while ($row = mysqli_fetch_assoc($v)) {

                  echo "<td>".$row['sid']."</td>";
                  echo "<td>".$row['roll']."</td>";

                  echo "<td>".$row['sname']."</td>";

                  echo "<td>".$row['snum']."</td>";
                  echo "<br>";


                }
              }



            ?>


       </table>





     </div>
   </body>
 </html>
