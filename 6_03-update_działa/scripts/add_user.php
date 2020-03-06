<?php
  if (isset($_POST['button']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $color= $_POST['color'];

    require_once('./connect.php');

    $sql = "INSERT INTO `user`( `name`, `surname`, `birthday`, `color`) VALUES ('$name', '$surname', '$birthday','$color')";

    mysqli_query($conn, $sql);
  }
  header('location: ../')
 ?>
