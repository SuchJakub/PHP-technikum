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
$conn=mysqli_connect("localhost","jakub","im4SquU8KBsqcxBF","komis");
$sql = "SELECT * FROM `user`";
mysqli_set_charset($conn,"utf8");
$result=mysqli_query($conn,$sql);

echo "<ol>";
while($row=mysqli_fetch_assoc($result)){
  echo <<<ROW
<li>$row[name] $row[surname]</li>
ROW;
}
echo "</ol>";

mysqli_close($conn);
     ?>




  </body>
</html>
