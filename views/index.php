<?php
require_once '../config/function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>So sad to see you go <?php echo $user["name"]; ?>!</h1>
    <a href="logout.php">Logout</a>
  </body>
</html>
