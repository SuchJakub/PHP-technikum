<?php
  if (!empty($_POST['name'])){
    echo $_POST['name'];
  }else{
 ?>
 <form method="post">
   <input type="text" name="name" placeholder="imie" autofocus>
   <input type="submit" name="button" value="zatwierdz">
 </form>
<?php
}
 ?>
