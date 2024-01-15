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

<div class="heading" style=background:url(header2.jpg) no repeat>
    <h1>package</h1>
</div>

<!-- package section starts -->
<section class="packages">
    <h1 class="heading-title">top destinations</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image-1.png"  width=323px height=200px >
            </div>
            <div class="content">
                <h3>Tajmahal</h3>
                <p>Embark on a regal journey to the iconic Taj Mahal with TrivaGoo.Com. 
                Our exclusive package promises an enchanting blend of history and romance. 
                Witness the architectural marvel in all its splendor while enjoying seamless travel and curated experiences. 
                Unveil the magic of the Taj with us – where every moment is a story etched in time.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-2.jpg"  width=323px height=200px >
            </div>
            <div class="content">
                <h3>Rajasthan</h3>
                <p> "Discover the royal allure of Rajasthan with TrivaGoo.Com. Our exclusive package invites you to a tapestry of vibrant colors, majestic forts, and cultural richness. 
                Immerse yourself in the regal charm of this enchanting land.
                Unearth the magic of Rajasthan with us – where every journey is a celebration of heritage and hospitality.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-3.jpg"  width=323px height=200px  >
            </div>
            <div class="content">
                <h3>Karnataka</h3>
                <p>Uncover the treasures of Karnataka with our exclusive package. 
                From ancient temples to lush landscapes, embark on a journey that blends tradition with natural beauty. 
                Explore Karnataka's rich heritage with comfort and style. Your adventure awaits with TrivaGoo.Com.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image"  width=323px height=200px>
                <img src="image-4.jpg" width=323px height=200px>
            </div>
            <div class="content">
                <h3>Indiagate</h3>
                <p>Experience the grandeur of India Gate with our exclusive package. 
                Immerse yourself in history, culture, and the vibrant heart of Delhi. 
                Join us for a memorable journey filled with iconic landmarks and unforgettable moments. 
                Your Delhi adventure begins with TrivaGoo.Com</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-5.jpg"  width=323px height=200px >
            </div>
            <div class="content">
                <h3>Kerala</h3>
                <p>Experience the serene beauty of Kerala with TrivaGoo.Com. Our exclusive package invites you to a land of backwaters, lush greenery, and tranquil beaches. 
                Immerse yourself in the soothing vibes of this South Indian gem. 
                Your journey to Kerala begins with us – where every moment is a breath of fresh air and a taste of tropical paradise.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-6.jpg"  width=323px height=200px>
            </div>
            <div class="content">
                <h3>Kedarnath</h3>
                <p>Discover divinity in the heart of the Himalayas with our exclusive Kedarnath Package.
                 Seamless travel, spiritual exploration, and breathtaking landscapes await.
                 Join us on this sacred journey, where each step is a prayer, and every moment is a connection with the divine. 
                 Your pilgrimage of a lifetime starts here with TrivaGoo.Com</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-7.jpg"  width=323px height=200px>
            </div>
            <div class="content">
                <h3>Asam</h3>
                <p>Embark on an extraordinary journey to Assam with TrivaGoo.Com. 
                Our exclusive package invites you to explore the lush landscapes, rich culture, and vibrant traditions of this enchanting Northeastern state. 
                Immerse yourself in the unique flavors and warm hospitality. 
                Uncover the wonders of Assam with us – where every adventure is a celebration of diversity and natural beauty.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-8.jpg" width=323px height=200px>
            </div>
            <div class="content">
                <h3>Mumbai</h3>
                <p> "Experience the heartbeat of Bollywood and the vibrant culture of Mumbai with TrivaGoo.Com. Our exclusive package brings you the energy and charm of India's financial capital. 
                Immerse yourself in the bustling markets, iconic landmarks, and the coastal beauty of this dynamic city. 
                Your Mumbai adventure awaits – join us for a journey of excitement and discovery.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-9.jpg"  width=323px height=200px >
            </div>
            <div class="content">
                <h3>Maharastra</h3>
                <p>"Explore the diverse landscapes and cultural gems of Maharashtra with TrivaGoo.Com. Our exclusive package invites you to witness the majestic forts, pristine beaches, and bustling cities that define this state. 
                Immerse yourself in the rich heritage and natural beauty of Maharashtra. Your adventure begins here with us – where every corner tells a unique story.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-10.png"  width=323px height=200px>
            </div>
            <div class="content">
                <h3>Darjeeling</h3>
                <p> "Embark on a picturesque escape to Darjeeling with TrivaGoo.Com. Our exclusive package invites you to the enchanting hills, lush tea gardens, and panoramic vistas of this Himalayan gem.
                 Immerse yourself in the tranquility and charm of Darjeeling. Your journey to the 'Queen of the Hills' starts with us – where every moment is a postcard-worthy memory.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image-11.jpg"  width=323px height=200px >
            </div>
            <div class="content">
                <h3>Shimla</h3>
                <p>Experience the timeless charm of Shimla with TrivaGoo.Com. Our exclusive package beckons you to the serene landscapes, colonial architecture, and delightful weather of this Himachali haven. 
                Immerse yourself in the enchanting vibes of Shimla. Your mountain retreat begins here with us – where every step is a journey into tranquility and nostalgia.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>  

        <div class="box">
            <div class="image">
                <img src="image-12.jpg"  width=323px height=200px>
            </div>
            <div class="content">
                <h3>Manipur</h3>
                <p>"Uncover the hidden treasures of Manipur with TrivaGoo.Com. Our exclusive package invites you to the vibrant landscapes, rich cultural tapestry, and warm hospitality of this northeastern gem. 
                Immerse yourself in the unique charm and traditions of Manipur. Your journey to the heart of India's northeast starts here with us – where every moment is a discovery.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><span class ="btn">load more</span></div>
</section>
<!-- package section starts -->



















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