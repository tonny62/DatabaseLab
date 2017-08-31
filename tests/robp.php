<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tonny's test site</title>
  </head>
  <body>
    <?php

    // this is how to use array
    // this will print  Array ( [0] => pizza [1] => chocolate [2] => donuts )
    // [0] is key and it will => to values
    $my_array = array('pizza','chocolate','donuts');
    print_r($my_array);

    echo "<br>";
    $my_array[20] = 'delicious';
    print_r($my_array);

    echo "<br>";
    $a = '55';
    $another_array = array(
      'The Dark Knight' => $a
    );
    print_r($another_array);

     ?>
  </body>
</html>
