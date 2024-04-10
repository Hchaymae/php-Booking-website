<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <title>Home</title>
</head>

<body>
    <!-- header section starts  -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>
    <!-- header section ends  -->
    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(img/background1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Around The World</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(img/background2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Around The New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(img/background3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!-- home section ends  -->


    <!-- services section starts  -->
    <section class="services">
        <h1 class="heading-title"> Our Services </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/icon1.png">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="img/icon2.png">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="img/icon3.png">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="img/icon4.png">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="img/icon5.png">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="img/icon6.png">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends  -->

    <!-- home about section starts -->

    <section class="home-about">

        <div class="image">
            <img src="img/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus quibusdam illo.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>

    </section>

    <!-- Home about ices section ends  -->

    <!-- Home packages starts  -->

    <section class="home-packages">

        <h1 class="heading-title">
            Our Packages
        </h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="img/package1.jpg" alt="Taj_mahal">
                </div>
                <div class=" content">
                    <h3>Adventure & Tour </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="book.php" class="btn">Book Now!</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/package2.jpg" alt="river">
                </div>
                <div class="content">
                    <h3>Adventure & Tour </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="book.php" class="btn">Book Now!</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/package3.jpg" alt="montain">
                </div>
                <div class="content">
                    <h3>Adventure & Tour </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="book.php" class="btn">Book Now!</a>
                </div>
            </div>

        </div>

        <div class="load-more">
            <a href="package.php" class="btn">
                Load More!
            </a>
        </div>

    </section>
    <!-- Home packages ends  -->

    <!-- Home offer section starts  -->

    <section class="home-offer">

        <div class="content">
            <h3>Up to 50% Off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate optio exercitationem incidunt quisquam
                explicabo neque similique magnam officia quos. Praesentium?</p>
            <a href="book.php" class="btn">Book Now!</a>
        </div>

    </section>

    <!-- Home offer seection ends  -->

    <!-- footer section starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Asq Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms Of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +212-65824-9540 </a>
                <a href="#"><i class="fas fa-phone"></i> +212-65824-9540 </a>
                <a href="#"><i class="fas fa-envelope"></i> h.chaymae@gmail </a>
                <a href="#"><i class="fas fa-map"></i> Daoudiat,Marrakech </a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin </a>
            </div>
        </div>
        <div class="credit">Created By <span>Ms.Hamdoune Chaymae </span>| All Rights Reserved!</div>
    </section>
    <!-- footer section ends  -->
    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- swiper js file link  -->
    <script src="script_js.js"></script>
</body>

</html>