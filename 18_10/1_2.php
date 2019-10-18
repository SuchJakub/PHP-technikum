<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

if(!empty($_GET['surname'])){
  $surname=$_GET['surname'];
  echo $surname;
}else{
  header('location: ./5_4_1_form.php');
}
     ?>
    <form method="get" action="1_3.php">
      <input type="radio" name="country" value="p">Polska<br><br>
      <input type="radio" name="country" value="g">Niemcy<br><br>
      <input type="radio" name="country" value="u">USA<br><br>
      <input type="submit" name="wow" value="zatwierdz">
      <input type="hidden" name="surname" value=" <?php echo $surname;?>">

    </form>


  </body>
</html>
