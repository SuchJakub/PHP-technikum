<?php
$country=$_GET['country'];
echo $country;
switch ($country) {
  case 'p':
  $country='Polska';
    break;
  case 'g':
  $country='Niemcy';
    break;
  case 'u':
  $country='USA';
    break;


}

echo "3 strona";
$surname=$_GET['surname'];
echo $surname;


 ?>
