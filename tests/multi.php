<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      my test site
    </title>
  </head>
  <body>
<table border="1px">
    <?php for ($i=1; $i < 13; $i++) {
    echo "<tr>";
    for ($j=1; $j < 13; $j++) {
        echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
} ?>
</table>
  </body>
</html>
