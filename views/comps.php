<?php

require_once '../controllers/MenuController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/csstyle.css">
    <title>Computer Science</title>
</head>
<body>
<header>
        <a href="#" class="brand">CoursePro</a>
        <div class="menu-btn active"></div>
        <div class="navigation active">
            <div class="navigation-items">
                <a href="index11.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Services</button>
                    <div class="dropdown-content">
                        <a href="comps.php">Computer Science</a>
                        <a href="#">Engineering</a>
                        <a href="#">Mathematics</a>
                    </div>
                </div>
                <a href="#">Contact Us</a>
                <a href="menuDashboard.php">Dashboard</a>
                <a href="index.php">Log out</a>
            </div>
            </div>
       
    </header>
<br><br><br><br>
<h2>Computer Science</h2>
<hr>
<section class="product"> 
    <h3 class="product-category">Books</h3>
    <button class="pre-btn"><img src="../Css/img/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="../Css/img/arrow.png" alt=""></button>
    <?php
    $books = new MenuController;
    $all= $books->readData();
    for ($e=0;$e< count($all);$e++){
            echo '   
           <div class="lol">
            <div class="product-container">
            <div class="product-card">
            <div class="product-image">
                <img src="' .$all[$e]['book_image'].'" class="product-thumb" alt="">
                <button class="card-btn">Download</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">'.$all[$e]['book_title'].'</h2>
                <p class="product-short-description">'.$all[$e]['book_body'].'</p>
        </div>
            </div>
         
            ';
           
    }

?>

</section>
<script src="../js/script.js"> </script>
</body>

</html>


    