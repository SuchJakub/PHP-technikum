<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Baza</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php
//$conn=mysqli_connect("localhost","root","","komis");
$conn=mysqli_connect("localhost","anna","pesel","komis");
$sql = "SELECT * FROM `user`";
mysqli_set_charset($conn,"utf8");
$result=mysqli_query($conn,$sql);

echo <<<TABLE
<table>
  <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Data urodzenia</th>
  </tr>
TABLE;

while($row=mysqli_fetch_assoc($result)){
  echo <<<ROW
<tr>
<td>$row[name]</td>
<td>$row[surname]</td>
<td>$row[birthday]</td>
</tr>
ROW;
}

echo "</table>";
mysqli_close($conn);
     ?>




  </body>
</html>
