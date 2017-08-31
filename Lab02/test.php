<html>

<head></head>

<body>
  <?php

    for ($i=85; $i >45 ; $i-=10) {
        $score = $i;
        if ($score >= 80) {
            $grade = "A";
        } elseif ($score >= 70) {
            $grade = "B";
        } elseif ($score >= 60) {
            $grade = "C";
        } elseif ($score >= 50) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "With score {$score} you will get grade {$grade}";
        echo "<br>";
    }
    echo "<br>";
    $a = 1;
    while ($a <= 10) {
        echo "My Variable = {$a}";
        echo "<br>";
        $a++;
    }
    ?>

  <hr>
  <?php
    for ($i=1; $i < 13; $i++) {
        for ($j=1; $j < 13; $j++) {
            echo "{$i} * {$j} = ".($i * $j);
            echo "<br>";
        }
    }

   ?>
   <hr>
   <?php
    $cars = array("car1"=>"toyota","car2"=>"honda");
    foreach ($cars as $key => $value) {
        echo "Key = {$key} , Value = {$value} <br>";
    }
    ?>
    <hr>

    <?php
      function fact($a)
      {
          if ($a>1) {
              return fact($a-1) * $a;
          }
          return 1;
      }

      echo fact(5);
     ?>

<hr>

<?php
  $id = $_GET['id'];
  $password = $_GET['password'];
  echo "id = <b>{$id}</b>";
  echo "<br>";
  echo "password = <b>{$password}</b>";
 ?>

 <hr>


  <form action="anotherpage.php" method="post">
    First: <input type="text" name="fname" ><br>
    Last: <input type="text" name="lname"><br>
    <input type="submit">
  </form>


</body>

</html>
