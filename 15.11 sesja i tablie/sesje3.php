<?php
  session_start();
  unset($_SESSION["name"]);
  session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona s3</title>
  </head>
  <body>
    Strona startowa<hr>
    Witamy  <?php

    echo $_SESSION['name'];
    echo session_id();


     ?> na stronie
     <a href="./sesje.php">strona 1 </a>







</body>
</html>
