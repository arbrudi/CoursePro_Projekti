<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../Css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
 </head>
<body>
    <header>
        <a href="#" class="brand">CoursePro</a>
        <div class="menu-btn active"></div>
        <div class="navigation active">
            <div class="navigation-items">
                <a href="#">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Services</button>
                    <div class="dropdown-content">
                        <a href="comps.php">Computer Science</a>
                        <a href="#">Engineering</a>
                        <a href="#">Mathematics</a>
                    </div>
                </div>
                <a href="#">Contact Us</a>
                <a href="index.php">Log out</a>
            </div>
            </div>
       
    </header>

    <section class="home">

            <video class="video-slide" src="../css/fotot_slider/gif4.mp4" autoplay muted loop>
            <video class="video-slide" src="../css/fotot_slider/gif2.mp4" autoplay muted loop></video>
            <video class="video-slide" src="../css/fotot_slider/gif1.mp4" autoplay muted loop></video>
            <video class="video-slide" src="../css/fotot_slider/gif3.mp4" autoplay muted loop></video>
            <video class="video-slide" src="../css/fotot_slider/gif33.mp4" autoplay muted loop></video>
            <video class="video-slide" src="../css/fotot_slider/gif4.mp4" autoplay muted loop></video>

        </video>
        <div class="content">
            <div class="c1">
            <h1>Welcome to<br><span>CoursePro!</span></h1>
            <p>Here at CoursePro we strive for easier access to learning that will help every student achieve their academic success.</p>

      
    
     </div>
        </div>

        <div class="slider-navigation"> <br><br>
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
        
        </section>

        <section class="about1">
            <div class="about-section">
                <div class="inner-container">
            <h2>About Us</h2>
            <p class="text">This is the part where you as a viewer get to know more about us and our team! We are also students just like you (presummably) and we sure do know how its like not finding the right material to use to study or something more direct to guide us for a exam, whichever it may be. But, that is very time consuming and during finals week there is everything but time. So, we decided to create a space where that is accessable and free. 
         </p>
         <div class="skills">
             <span>Who are we?</span>
             <span>What do we do?</span>
             <span>Our team</span>
         </div>
            </div>
        </div>
        </section>

        <script type="text/javascript">
            const menuBtn = document.querySelector(".menu-btn");
            const navigation = document.querySelector(".navigation");
    
            menuBtn.addEventListener("click", () => {
                menuBtn.classList.toggle("active");
                    navigation.classList.toggle("active");
            })
    
            //pjesa e javascript per nav te video slider
            const btns = document.querySelectorAll(".nav-btn");
            const slides = document.querySelectorAll(".video-slide");
    
            var sliderNav = function(manual){
               
                btns.forEach((btn) => {
                    btn.classList.remove("active");
                });
    
                slides.forEach((slide) => {
                    slide.classList.remove("active");
                });
                btns[manual].classList.add("active");
                slides[manual].classList.add("active");
            }
    
            btns.forEach((btn, i) => {
               btn.addEventListener("click", () => {
                sliderNav(i); 
               });
            });
        </script>
        
    </body>
    </html>
    