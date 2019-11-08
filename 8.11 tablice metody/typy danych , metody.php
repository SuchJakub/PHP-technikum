<?php
  function wartosc($a):string{
if($a<0){
    return 'ujemna';
  }else if ($a==0){
    return 'zero';
  }else{
    return 'dodatnia';
  }
}
echo wartosc(5);

function getValue():int{
  return 20.55;
}
echo getValue();

//zasieg zmiennych

$x=10;
function Show(){
  echo "Wartość zmiennej \$x wynosi $GLOBALS[x]";
//  echo $GLOBALS['x'];
}

Show();

$y=10;
function Show1(){
  global $y;
  echo "Wartość zmiennej \$y wynosi $y";
}

Show1();

echo '<hr>';
############################################################################################

function sum(){
$number=10;
echo "\$number wynosi $number <br>";
$number+=10;
}

sum();//10
sum();//10
sum();//10
echo "<br>";

function sum1(){
static $number=10;
echo "\$number wynosi $number <br>";
$number+=10;
//echo "\$number wynosi: $number<br>";
}

sum1();//10
sum1();//20
sum1();//30
echo "<hr>";

//argumenty

function add($x,$y=1){
return $x+$y;
}
$z=20;


echo add($z),'<br>';//21
echo add(2,4),'<br>';//6
echo add($z,$z),'<br>';//40


/// argumenty i typy danych
function multi(float $x, int $y){
  return $x*$y;

}
echo multi(3,4);//12
echo multi(2.5,4);//10
echo multi (4,2.5);//8
 ?>
