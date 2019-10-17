<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
    <input type="text" name="imie">Podaj imie<br><br>
    <input type="text" name="nazwisko">Podaj nazwisko
    <input type="submit" value="Zatwierdz">
  </form>
  <?php
if(!empty($_POST['imie'])&& !empty($_POST['nazwisko'])) {
  $imie=$_POST['imie'];
  $nazwisko=$_POST['nazwisko'];
//  echo $imie;
//  echo $nazwisko;


  $rozmiar=strlen($imie); // mierzy długość słowa
  echo $rozmiar;


  $wskazane=substr($imie,1,2); // wypisuje wskazane litery
  echo $wskazane;

   $nameNew = ucfirst(strtolower (trim($imie))); //pierwsza litera jest wielka , nastepne litery są małe , trim usuwa białe znaki( z początku i z końca )
   echo $nameNew;

}

   ?>
   <form method="get">
     <input type="text" name="fan">Której druzyny jestes fanem <br><br>
     <input type="radio" name="csgo" value="vp">
     <input type="radio" name="csgo" value="arcy">
     <input type="radio" name="csgo" value="ago">
     <input type="submit" value="free">
</form>
     <?php
if(!empty($_GET['csgo']) ){
$wybor=$_GET['csgo'];

switch($wybor){
case 'vp':
echo "Słaba ta drużyna";
break;
case 'arcy':
echo "Najlepsza drużyna";
break;
case 'ago':
echo "to chyba jakis zart";



}


}



      ?>

  </body>
</html>
