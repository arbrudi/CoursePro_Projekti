<?php
require 'config/function.php';


if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"],$_POST["surname"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <form action="#" method="post" class="login-email">
    <p class="login-text" style="font-size: 2 rem; font-weight: 800;">Register</p>
         <div class="input-group">
         <input type="text" name="name" placeholder="Name" required>
        </div>
        <div class="input-group">
        <input type="text" name="surname" placeholder="Surname" required>
        </div>
        <div class="input-group">
        <input type="email" name="email" placeholder="Email"required>
        </div>
        <div class="input-group">
        <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-group">
            <input type="password" name="confirmpassword" placeholder="Confirm your password" required>
        </div>
        <div class="input-group">
           <button type="submit" name="submit" class="bttn">Register</button>
        </div>
        <p class="login-register-text">You already have an account? <a href="login.php">Login Here.</a></p>
        </form>
    </div>


</body>
</html>

