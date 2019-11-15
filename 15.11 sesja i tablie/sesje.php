<?php
  session_start();
  $_SESSION["name"]="Janusz";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona startowa </title>
  </head>
  <body>
    Strona startowa<hr>
    Witamy  <?php

    echo $_SESSION['name'];
    echo session_id();


     ?> na stronie
     <a href="./sesje2.php">Sesja 2</a>







</body>
</html>
