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
    <title>about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
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
       <a href="home.php">home</a>
       <a href="about.php">about</a>
       <a href="package.php">package</a>
       <a href="book.php">book</a>
       <a href="logout.php">Logout</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>


</section>
<!-- header section ends -->

<div class="heading" style=background:url(header.jpg) no repeat>
    <h1>about us</h1>
</div>

<!-- about section starts -->
<section class="about">
    <div class="image">
        <img src="about.jpg" width="200px">
    </div>
    <div class="content">
        <h3>why choose us?</h3>
        <p>Choose us for your travel needs and embark on a journey defined by excellence.
         With a commitment to seamless experiences, personalized service, and unbeatable value, we prioritize your satisfaction at every step.
         Our expertise, diverse offerings, and attention to detail set us apart, ensuring your travel dreams become extraordinary realities.</p>
        <p>Discover the world with confidence – choose TrivaGoo.Com for unparalleled adventures.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>

            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>

            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
        
    </div>


</section>
<!-- about section ends -->

<!-- reviews section starts -->
<section class="reviews">
    <h1 class="heading-title"> clients reviews </h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slider slide">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
                <p> I can't praise TrivaGoo.Com enough! Their travel packages are a testament to meticulous planning and a genuine passion for creating remarkable experiences.
                From the seamless booking process to the awe-inspiring destinations, my journey with them was nothing short of magical. 
                This is the epitome of first-class travel!</p>
                <h3>Priyadarshini Panda</h3>
                <span>traveler</span>
                <img src="pooja1.jpg" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
                <p>A heartfelt thank you to TrivaGoo.Com for orchestrating a dream vacation! The attention to detail and the commitment to customer satisfaction are unparalleled. 
                The accommodations were lavish, the guides were knowledgeable, and every moment felt curated for perfection. 
                I've found my lifelong travel companion in TrivaGoo.Com.</p>
                <h3>Jaysmita Panda</h3>
                <span>traveler</span>
                <img src="mana1.png" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
                <p>I can't stop raving about the incredible experience I had with TrivaGoo.Com. The professionalism, the personal touch, and the sheer joy they bring to travel are unmatched. 
                My vacation felt like a curated masterpiece, filled with amazing sights and cultural gems. 
                Thank you for making my journey so extraordinary! </p>
                <h3>Parthasarathi Pradhan</h3>
                <span>traveler</span>
                <img src="partha2.jpg" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>  
                   <i class="fas fa-star"></i>
                </div>
                <p>Five stars are not enough for TrivaGoo.Com! Their travel expertise and dedication to excellence set them miles ahead. 
                My recent adventure with them was a symphony of breathtaking landscapes, cultural immersion, and unmatched luxury. 
                If you're looking for a travel experience that transcends expectations, this is the company to choose!</p>
                <h3>Amit Panda</h3>
                <span>traveler</span>
                <img src="amit1.jpg" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>  
                   <i class="fas fa-star"></i>
                </div>
                <p>Wow! TrivaGoo.Com delivers on every promise. The sheer variety in their packages, coupled with top-notch service, ensures an unforgettable journey. 
                From historic landmarks to hidden gems, every destination felt like a discovery. 
                My expectations were not just met but exceeded. Kudos to the team for making my vacation truly exceptional! </p>
                <h3>Rajesh Dhal</h3>
                <span>traveler</span>
                <img src="rajesh.jpg" alt="">
            </div>

            <div class= "swiper-slider slide">
                <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
                <p>I had the pleasure of booking my vacation with TrivaGoo.Com, and it was a decision I'll never regret. 
                The level of professionalism, the warmth of their customer service, and the thoughtfulness in crafting unique itineraries make them stand out. 
                They don't just sell travel; they sell memories. Highly recommend TrivaGoo.Com for an unparalleled travel experience! </p>
                <h3>Asutosh Mohapatra</h3>
                <span>traveler</span>
                <img src="asu.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- reviews section ends -->





















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








  
</body>
</html>