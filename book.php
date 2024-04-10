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


    <title>Book</title>
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
    <div class="heading" style="">
        <h1>Book Now</h1>
    </div>


    <!-- booking section starts  -->

    <section class="booking">

        <h1 class="heading-title">
            Book Your Trip!
        </h1>

        <form action="book_form.php" method="post" class="book-form">

            <?php
        if(isset($_GET['msg']) && $_GET['msg']="ok"){
            echo "<p style='color:blue; font-size:18px;'>Your form has been submitted successfully.</p>";
        }
        if(isset($_GET['error']) && $_GET['error']="no"){
            echo "<p style='color:red; font-size:18px;'>Something went wrong!!</p>";
        }
        ?>

            <div class="flex">

                <div class="inputBox">
                    <span>Name : </span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                </div>

                <div class="inputBox">
                    <span>Email : </span>
                    <input type="email" placeholder="Enter Your Email" name="email">
                </div>

                <div class="inputBox">
                    <span>Phone : </span>
                    <input type="text" placeholder="Enter Your Phone" name="phone">
                </div>

                <div class="inputBox">
                    <span>Address : </span>
                    <input type="text" placeholder="Enter Your Address" name="address">
                </div>

                <div class="inputBox">
                    <span>Where To : </span>
                    <input type="number" placeholder="Place You Want To Visit " name="place">
                </div>

                <div class="inputBox">
                    <span>How Many : </span>
                    <input type="number" placeholder="Number Of Guests" name="guest">
                </div>

                <div class="inputBox">
                    <span>Arrivals : </span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputBox">
                    <span>Leaving : </span>
                    <input type="date" name="leaving">
                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

    <!-- booking section ends  -->


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
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- swiper js file link  -->
    <script src="script_js.js"></script>
</body>

</html>