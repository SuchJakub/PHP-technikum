<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <?php
    //skrypt pierwszy
    $connect=mysqli_connect("localhost","root","","sklep1");

    mysqli_set_charset($connect,"utf8");

    $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja` =1";

    $result=mysqli_query($connect,$sql);

    echo "<ul>";
    while ($row=mysqli_fetch_assoc($result)) {
      echo "<li>",$row["nazwa"],"</li>";
    }
    echo "</ul>";

    mysqli_close($connect);

     ?>



     <form  method="post">
        <select name="towar">
          <option value="c">Czekolada</option>
          <option value="g">Grześki</option>
          <option value="b">Baton</option>
          <option value="w">Wafle</option>
        </select>
        <input type="submit" name="button" value="WYBIERZ">
      </form>


        <?php
        if (isset($_POST["towar"])) {
          $towar=$_POST["towar"];
          switch ($towar) {
            case 'c':
              $towar="Czekolada";
              break;
            case 'g':
              $towar="Grześki";
              break;
            case 'b':
              $towar="Baton";
              break;
            case 'w':
              $towar="Wafle";
              break;
          }
        echo $_POST['towar'];


        $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`='$towar'";

        $connect=mysqli_connect("localhost","root","","sklep");

        mysqli_set_charset($connect,"utf8");

        $result=mysqli_query($connect,$sql);

        $row=mysqli_fetch_assoc($result);

        echo $row["cena"];

        $promotion=round($row["cena"]*0.85,2);

        echo $promotion;

        mysqli_close($connect);

      }
         ?>
    
  </body>
</html>
