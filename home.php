<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edges">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
<!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
       <!--<a href="login.php">login</a>
       <a href="registration form.php">registration form</a>-->
       <a href="home.php">home</a>
       <a href="about.php">about</a>
       <a href="package.php">package</a>
       <a href="book.php">book</a>
       <a href="logout.php">Logout</a>
       
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>


</section>
<!-- header section ends -->

<section class="home">
    <div class=" swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(homeslide-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>

                </div>

            </div>
            <div class="swiper-slide slide" style="background:url(homeslide-2.jpeg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>

                </div>

            </div>
            <div class="swiper-slide slide" style="background:url(homeslide3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour wrothwhile</h3>
                    <a href="package.php" class="btn">discover more</a>

                </div>

            </div>


        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>


















</section>

<!-- home section ends -->

<!-- service section starts -->
<section class="services">
    <h1 class="heading-title"> our services</h1>
    <div class="box-container">

        <div class="box">
            <img src="icon-1.png">
            <h3>adventure</h3>
        </div>
        <div class="box">
            <img src="icon-2.jpg">
            <h3>tour guide</h3>
        </div>
        <div class="box">
            <img src="icon-3.png">
            <h3>trekking</h3>
        </div>
        <div class="box">
            <img src="icon-4.png">
            <h3>camp fire</h3>
        </div>
        <div class="box">
            <img src="icon-5.jpg">
            <h3>off road</h3>
        </div>
        <div class="box">
            <img src="icon-6.jpg">
            <h3>camping</h3>
        </div>
    </div>
</section>
<!-- service section ends -->

<!-- home about section starts -->
<section class="home-about">
    <div class="image">
        <img src="about.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>At TrivaGoo.Com, we believe that every journey is a story waiting to be told. With a passion for exploration and a commitment to creating unforgettable experiences, we welcome you to embark on a voyage of discovery with us. Our mission is to transform your travel dreams into reality. 
        Join us as we explore the world together. Your journey begins here, and every experience is a page worth turning.
        Welcome to TrivaGoo.Com, where the extraordinary becomes the ordinary, and every trip is a tale to remember.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>
<!-- home about section ends -->

<!-- home packages section starts -->
<section class="home-packages">
    <h1 class="heading-title"> our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image-1.jpeg">
            </div>
            <div class="content">
                <h3>Kedarnath</h3>
                <p>Discover divinity in the heart of the Himalayas with our exclusive Kedarnath Package. 
                 Seamless travel, spiritual exploration, and breathtaking landscapes await. 
                 Join us on this sacred journey, where each step is a prayer, and every moment is a connection with the divine. Your pilgrimage of a lifetime starts here with TrivaGoo.Com</p>
                <a href="book.php" class="btn">book now</a>      
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img2.jpg" >
            </div>
            <div class="content">
                <h3>IndiaGate</h3>
                <p>Experience the grandeur of India Gate with our exclusive package. 
                Immerse yourself in history, culture, and the vibrant heart of Delhi. Join us for a memorable journey filled with iconic landmarks and unforgettable moments. 
                Your Delhi adventure begins with TrivaGoo.Com</p>
                <a href="book.php" class="btn">book now</a>      
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image-3.jpg" >
            </div>
            <div class="content">
                <h3>Karnataka</h3>
                <p>Uncover the treasures of Karnataka with our exclusive package. 
                From ancient temples to lush landscapes, embark on a journey that blends tradition with natural beauty. 
                Explore Karnataka's rich heritage with comfort and style. Your adventure awaits with TrivaGoo.Com.</p>
                <a href="book.php" class="btn">book now</a>      
            </div>
        </div>
    </div>
    <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->

<!-- home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
       <p>Unlock Your Adventure: Enjoy up to 50% off on our travel packages! Seize the opportunity to explore more while saving big. Use code "TRIVAGOO" and turn your travel dreams into reality. Limited time offer, book now with TrivaGoo.Com! </p>
        <a href="book.php" class="btn">book now</a>
           
    </div>
</section>
<!-- home offer section ends -->





















<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+91 7735349303</a>
        <a href="#"><i class="fas fa-phone"></i>+91 6371380211</a>
        <a href="#"><i class="fas fa-envelope"></i>travelerplanner@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>bhubaneswar,india - 751022</a>
        </div>

        <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit"> created by <span> traveler planner</span> | all rights reserved!</div>
</section>
<!-- footer section ends -->








    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script  src="script1.js"></script>

</body>
</html>