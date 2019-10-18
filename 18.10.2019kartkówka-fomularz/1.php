<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie">Podaj imie <br><br>
      <input type="number" name="znaki">Podaj ilosc znakow<br><br>
      <input type="number" name="liczba">Podaj wiek<br><br>
      <input type="submit" name="zatwierdz">
    </form>
  <?php
if(!empty($_POST["imie"])){
$imie=$_POST["imie"];
echo "Dane przed sprawdzeniem $imie";
$newimie=$imie;
}

@$wow=$_POST["imie"];
$poprawa=ucfirst(strtolower(trim($wow)));
echo $poprawa;

@$liczba=$_POST["liczba"];
echo $liczba;





   ?>

  </body>
</html>
