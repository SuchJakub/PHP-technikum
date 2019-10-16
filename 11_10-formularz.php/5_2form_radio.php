<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // to jest $_GET, nie $GET, uważaj na to
      if(!empty($_GET['country']) && !empty($_GET['lang']) && isset($_GET['button'])){
        $country= $_GET['country'];
        $lang=$_GET['lang'];
        switch ($lang) {
          case 'pl':
            $lang='Polska';
            break;
            case 'en':
              $lang='Anglia';
            break;
        }
        echo "Kraj: $country, język : $lang ";
      }
    ?>
    <!-- Jak dajesz forma, to method musi być taki, jak to czym przyjmujesz w php, 
         więc jak tu dajesz get, to w php też get-->
    <form method="get">
      <input type="text" name="country" placeholder="Podaj kraj" autofocus><br><br>
        <input type="radio" name="lang" value="pl" checked>polski
        <input type="radio" name="lang" value="en" checked>angielski
        <input type="submit" name="button" value="Zatwierdz" checked>
      </form>

  </body>
</html>

