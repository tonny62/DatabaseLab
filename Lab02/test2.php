<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    TEST2
  </title>
</head>

<body>
    <?php
      for ($i=2; $i < 9; $i++) {
        for ($j=1; $j < $i ; $j++) {
          echo "o";
        }
      echo "<br>";
      }
    ?>

     <hr>

     <?php
     foreach ($variable as $key => $value) {
       # code...
     }
      $color_arry = array('0'=>"#ff1f11",'1' => "#11ffff" ,'2'=>"#ff11ff",'3'=>"#ffff11");
      $my_string = $_GET['string'];
      ?>
      <h1>
        <?php
      for ($i=0; $i < strlen($my_string); $i++) {
        $num = $i%4;
        echo "<font color=$color_arry[$num]>".$my_string[$i]."</font>";
      }
      ?>

</body>

</html>
