<?php

require_once './controllers/MenuController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/csstyle.css">
    <title>Computer Science</title>
</head>
<body>
<header>
    <a href="#" class="brand">CoursePro</a>
     <div class="menu-btn"></div>

    <div class="navigation">
        <div class="navigation-items">
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="views/menuDashboard.php">Dashboard</a>
            
     </div> 
    </div>
</header>
<br><br><br><br>
<h2>Computer Science</h2>
<hr>
<section class="product"> 
    <h3 class="product-category">Books</h3>
    <button class="pre-btn"><img src="Css/img/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="Css/img/arrow.png" alt=""></button>
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
<script src="script.js"> </script>
</body>

</html>


    