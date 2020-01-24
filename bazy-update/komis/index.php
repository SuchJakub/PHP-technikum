<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
require_once('./scripts/connect.php');
require_once('./scripts/function.php');
$sql="SELECT * FROM `user`";
$result=mysqli_query($conn,$sql);

echo <<<TABLE
<table>
  <tr>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Data urodzenia</th>
    <th>Rok urodzenia</th>
  </tr>


TABLE;

while($row=mysqli_fetch_assoc($result)){
$year=year($row['birthday']);
echo <<<ROW
  <tr>
    <td>$row[name]</td>
    <td>$row[surname]</td>
    <td>$row[birthday]</td>
    <td>$year</td>
    <td><a href="./scripts/del_user.php?id=$row[id]">Usun</a></td>
    <td><a href=".?id=$row[id]">Update</a></td>
  </tr>

ROW;
}
echo "</table>";

     ?>
     <h3>Dodawanie użytkownika</h3>

     <form action="./scripts/add_user.php" method="post">
       <input type="text" name="name" placeholder="Imię"><br><br>
       <input type="text" name="surname" placeholder="Nazwisko"><br><br>
       <input type="text" name="birthday"<br><br>
      <input type="submit" name="button" value="Dodaj użytkownika">
     </form>


<?php
if (isset($_GET['id_update'])) {
  $id=$_GET['id_update'];
  $sql="SELECT * FROM `user` WHERE id='$id'";
  $result=mysqli_query($conn,$sql);
  $user=mysqli_fetch_assoc($result);

  echo <<<UPDATE
  <h3>Dodawanie użytkownika</h3>

  <form action="./scripts/add_user.php" method="post">
    <input type="text" name="name" value="$user[name]"><br><br>
    <input type="text" name="surname" value="$user[surname]"><br><br>
    <input type="text" name="birthday" value="$user[birthday]"<br><br>
   <input type="submit" name="button" value="Dodaj użytkownika">
  </form>

UPDATE;
}
mysqli_close($conn);
?>
  </body>
</html>
