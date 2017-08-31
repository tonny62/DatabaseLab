<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  if(isset($_POST['fname'])&&isset($_POST['lname'])){
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    echo " My name is <b>{$fname} {$lname}</b>"; // POST METHOD Do not show queries in the URL
  }else{
    echo "<a href=\"test.php\"> Go to Test Page </a>";

  }



 ?>



  </body>
</html>
