<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
body{
padding:10px;
}
    </style>
  </head>
  <body>
    <?php
    $row=1;
    do {
      $col=1;
      do {
        echo $col*$row;
        $col++;
      } while ($col <= 10);
      echo '<br>';
      $row++;
    } while ($row<=10);

    ?>

  </body>
</html>
