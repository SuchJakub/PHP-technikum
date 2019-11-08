<?php
//tablice indeksowane numerycznie



$colors=array('red','green','blue');
$colors[3]='Magenta';
for ($i=0; $i <count($colors) ; $i++) {
  $elem=$i+1;
  echo "Element $elem: $colors[$i]<br>";
}

function showArray($tab)
{
  for ($i=0; $i <count($tab) ; $i++) {
    $elem=$i+1;
    echo "Element $elem: $tab[$i]<br>";
  }
}
showArray($colors);


//foreach


foreach ($colors as $value) {
  echo "Element $value<br>";
}
foreach ($colors as $key => $value) {
  $elem=$key+1;
  echo "Element $elem $value<br>";
}


//tablice asocjacyjne

$data=array(
 'imie'=>'Kinga',
 'nazwisko'=>'Nowak',
 'wiek'=> 20

);
function showArrayAssoc($tab){
foreach ($tab as $key => $value) {
  echo " $key : $value";
}
}
showArrayAssoc($data);


echo $data['nazwisko'];
echo "<br>$data[nazwisko]";
echo "<br>{$data['nazwisko']}";

//tablice wielowymiarowe


$student=array(
  array('Katarzyna','Nowak'),
  array('Katarzyna'),
  array('Katarzyna','Nowak',30),

);

for ($i=0; $i <count($student) ; $i++) {
  for ($j=0; $j <count($student[$i]) ; $j++) {
    echo $student[$i][$j],"  ";
  }
}




 ?>
