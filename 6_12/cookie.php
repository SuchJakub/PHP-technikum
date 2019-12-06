<?php
  setcookie("imie","Janusz");
  setcookie("nazwisko","Nowak",time()+60*60*24);
  setcookie("imie","",time()-1);
  echo $_COOKIE["nazwisko"];
 ?>
