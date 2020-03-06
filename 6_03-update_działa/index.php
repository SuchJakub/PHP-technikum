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

      $sql = "SELECT user.id as userId, user.name, user.surname, user.birthday,color.id,color.color as color FROM `user` LEFT JOIN `color` ON `user`.`color`=`color`.`id`";
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
                <td><a href="./scripts/del_user.php?id=$row[userId]">Usuń</a></td>
                <td><a href="./?updateId=$row[userId]">Aktualizuj</a></td>
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
           echo "<option value=\"$color[id]\">$color[color]</option>";
         }
          ?>
         <option value="t">test</option>
       </select>
          <input type="submit" name="button" value="Dodaj użytkownika">
          </form>
       <?php
       if (isset($_GET['updateId'])) {
         $id=$_GET['updateId'];
         $sql="SELECT * FROM user WHERE id='$id'";
         $result=mysqli_query($conn,$sql);
         $user=mysqli_fetch_assoc($result);
         $name=$user['name'];
         $surname=$user['surname'];
         $birthday=$user['birthday'];
         $colorUser=$user['color'];


         echo <<<FORUMUPDATEUSER
         <hr><h3>Aktualizaja użytkownika</h3>
         <form action="./scripts/update_user.php" method="post">
         <input type="text" name="name" value="$name"><br><br>
         <input type="text" name="surname" value="$surname"><br><br>
         <input type="date" name="birthday" value="$birthday"><br><br>
         <input type="hidden" name="id" value="$id">
         <select name="color">
FORUMUPDATEUSER;

        $sql="SELECT * FROM color";
        $result=mysqli_query($conn,$sql);
        while ($color=mysqli_fetch_assoc($result))
        {
          if ($color == $color['id']) {
              echo "<option value=\"$color[id]\" selected>$color[color]</option>";
          }else {
              echo "<option value=\"$color[id]\">$color[color]</option>";
          }

        }
        echo <<<FORUMUPDATEUSER
        </select><br><br>
        <input type="submit" name="button" value="Aktualizuj użytkownika">
        </form>
FORUMUPDATEUSER;



       }


        ?>




  </body>
</html>
