<?php
  require_once('./connect.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo "$id";
  }
  $sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";

  if (mysqli_query($conn, $sql)) {
    header('location: ../');
  }
 ?>
