<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



<?php
//sortowanie tablic
//niemalejaco

$tab=array(10,2,100,5,75,-4);

function Show($tab){
foreach ($tab as $value) {
  echo "$value";
  }
}
Show($tab);
sort($tab);

//nierosnaco

 echo "<br>";
//sortowanie tablicy asocjacyjnej
$tabAssoc=array(
  "surname"=>"Nowak",
  "name"=>"Anna",
  "wiek"=>20
);


Show($tabAssoc);
echo "<br>";
asort($tabAssoc);
Show($tabAssoc);
echo "<br>";
echo "<br>";
arsort($tabAssoc);
Show($tabAssoc);

krsort($tabAssoc);
ksort($tabAssoc);
Show($tabAssoc);

/// wyswietlanie danych


echo "<br>";
var_dump($tabAssoc);

echo "<br>";
print_r($tabAssoc);
echo "<br>";
echo "<pre>";
print_r($tabAssoc);
echo "</pre>";
?>
</body>
</html>
