<?php

require 'sm.php';

if (isset($_POST['send'])) {
  // code...

  $sid = $_POST['sid'];
  $snum = $_POST['snum'];
  
  echo $sid;
  echo $snum;

	//header("Location: http://localhost/TSM/director/dDashboard.php");




}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <tr>
      <th class="pt-3-half" contenteditable="false">Student ID</td>
      <th class="pt-3-half" contenteditable="false"> Software Security</td>
      </tr>
      <tr>
      <td class="pt-3-half"    contenteditable="false"><input type="text" name="sid" value="1825001M" readonly></td>
      <td class="pt-3-half" contenteditable="false"><input type="text" name="snum" ></td>
      </tr>
    </table>
  </body>
</html>
