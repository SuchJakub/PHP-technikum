<?php
  session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona s2</title>
  </head>
  <body>
    Strona startowa<hr>
    Witamy  <?php

    echo $_SESSION['name'];
    echo session_id();


     ?> na stronie
     <a href="./sesja3.php">Sesja 3</a>







</body>
</html>
