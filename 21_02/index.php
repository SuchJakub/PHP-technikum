<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Baza - uprawnienia</title>
  </head>
  <body>
    <h3>Użytkownicy z tabeli user</h3>
    <?php
      require_once('./scripts/connect.php');
      require_once('./scripts/function.php');

      $sql = "SELECT * FROM `user` INNER JOIN `color` ON user.color=color.id";
      $result = mysqli_query($conn, $sql);

      echo <<<TABLE
        <table>
          <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Rok urodzenia</th>
            <th>Rok</th>
          </tr>
TABLE;
          while ($row = mysqli_fetch_assoc($result)) {
            $year = year($row['birthday']);
            echo <<<ROW
              <tr>
                <td>$row[name]</td>
                <td>$row[surname]</td>
                <td>$row[birthday]</td>
                <td>$year</td>
                <td>$row[color]</td>
                <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
              </tr>
ROW;
          }
        echo "</table>";
        echo "<h3>Dodanie użytkownika</h3>";
     ?>

     <form action="./scripts/add_user.php" method="post">
       <input type="text" name="name" placeholder="Imię"><br><br>
       <input type="text" name="surname" placeholder="Nazwisko"><br><br>
       <input type="date" name="birthday"><br><br>
       <select  name="color">
         <?php
         $sql="SELECT * FROM color";
         $result=mysqli_query($conn,$sql);
         while ($color=mysqli_fetch_assoc($result))
         {
           echo "<option value=\"t\">$color[color]</option>";
         }
          ?>
         <option value="t">test</option>
       </select>
       <input type="submit" name="button" value="Dodaj użytkownika">
     </form>


  </body>
</html>
