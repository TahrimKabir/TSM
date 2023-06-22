<?php

  require 'tDashboard.php';

if ($_POST["send"]) {
  /*$s1=$_POST["s1"];
    $n1=$_POST["n1"];
      $s2=$_POST["s2"];
        $n2=$_POST["n2"];*/

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
        <input type="submit" name="approve" value = "APPROVE">

        </form>


        ';


       echo $s1;
      }
 ?>
