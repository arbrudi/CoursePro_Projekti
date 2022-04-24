<?php
require 'config/function.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}


$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->log($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
    }
  else if($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  else if($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }      
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
</head>
<body>
    <div class="container">
        <form id="form"action="#" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2 rem; font-weight: 800;">Login</p>
        <div class="input-group">
            <input type="text" placeholder="Enter your username or email" name="usernameemail" required >
        <p id="email-err"> Please enter a valid Email or Username!</p>
            </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
            <p id="pass-err"> Please enter a valid Password!</p>
        </div>
        <div class="input-group">
           <button name="submit" class="bttn">Login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="register.php">Register Here.</a></p>
        </form>
    </div>
  
</body>
</html>
