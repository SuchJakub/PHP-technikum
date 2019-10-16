<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/style.css">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="Podaj imie" autofocus autocomplete="off"><br>
      <input type="number" name="age" placeholder="Podaj wiek"><br>
      <input type="submit" name="button" value="Zatwierdz"><br>

      <?php
if (!empty($_POST['name']) && !empty($_POST['age'])){
      $name=$_POST['name'];
      $age=$_POST['age'];
      $rozmiar=strlen($name);
      echo "przed poprawa imie : $name, wiek: $age<br>";


      $nameNew = ucfirst(strtolower (trim($name)));
      $rozmiarNew = strlen($nameNew);
      if ($rozmiarNew>10){
        $nameNew=substr($nameNew,0,10);
      }
      $rozmiarNew=strlen($nameNew);

  echo "po poprawie $nameNew, dlusgosc imienia $rozmiarNew wiek $age <br>";

  ?>
  <table>
    <tr>
      <td>imie</td>
      <td>wiek</td>
    </tr>
    <tr>
      <td><?php echo $nameNew; ?> </td>
      <td><?php echo $age; ?> </td>
      <td>
  </table>
  <?php
}
    ?>
</form>
  </body>
</html>
