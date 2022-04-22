
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
    <title>Welcome</title>
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
           
     </div> 
    </div>
</header>

<div class="w" id="w">
    <p>Welcome to CoursePro!</p>
    <hr>
    <br>
  <h4>In a world where the internet has taken over, CoursePro is the key to your education.
  You can find plenty of educational materials right here.</h4>

<h4>Knowledge is power, and it's right in front of you. Take it and wield it!</h4>
<br>
<h4>Do you want to become a part of our growing family?</h4>
<div class="here">
<a href="login.php">Click here!</a>
</div>
</div> 
<script type="text/javascript">
       //pjesa e javascript per nav menu
       const menuBtn = document.querySelector('.menu-btn');
        const navigation = document.querySelector(".navigation");
       menuBtn.addEventListener("click", () => {
           menuBtn.classList.toggle("active");
           navigation.classList.toggle("active");

       });
   </script>
</body>
</html>

