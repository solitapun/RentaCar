<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!--- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!---custom css file link-->
    <link rel="stylesheet" href="css/style.css">

    <!---Bootstrap Link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
<!--header section starts -->
<section class="header">
    <a href="home.php" class="logo">
        <img src="images/logo.png">
        <p>BookaCab <br>
<!--            <small style="font-size: 10px">To your Destination</small>-->
        </p>
    </a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="CheckBooking.php">Check Booking</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!--header section ends-->
<!--header section starts-->


<!--header section end-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/lexus.jpg) no-repeat ">
                <div class="content">
                <span>explore, discover,travel</span>
                    <h3>travel around the world</h3>
                    <a herf="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/bus-min.jpg) no-repeat ">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a herf="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style=" background:url(images/car-rental.jpg) no-repeat ">
                <div class="content">
                    <span>explore, discover,travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a herf="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!--services section starts-->

<section class="services">
    <h1 class="heading-title"> our service</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/travel-luggage.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/driver.png" alt="">
            <h3>Best Driver</h3>
        </div>
        <div class="box">
            <img src="images/pay.png" alt="">
            <h3>Online Payment</h3>
        </div>
    </div>
</section>
<!--services section ends-->


<!--home about section start-->
<section class="home-about">
    <div class="image">
        <img src="images/cambodia.jpg"alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>
            <b>Santa Linux</b> was founded in 2015, co-founder cadt student. <br>
            We aim to provide the safest and comfortable travel experience
            to the customers enjoying their trip with family or friends
            <br> <br> Check out more about us
        </p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
<!---home about section end-->


<!--home packages section starts-->
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/Angkor-wat-sunrise.jpg" alt="">
            </div>
            <div class="content">
                <h3>Angkor wat sunrise</h3>
                <p>Take a glance at the angkor wat temple where known as the famous ruin temple and honorable place </p>
                <a href="book.php"class="btn">book now</a>
            </div>
        </div>

        <div class="box">

            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Take a glance at the angkor wat temple where known as the famous ruin temple and honorable place</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">

            <div class="image">
                <img src="images/cambodia-koh-rong-samloem.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Take a glance at the angkor wat temple where known as the famous ruin temple and honorable place</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">

            <div class="image">
                <img src="images/boko.jpg"alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Take a glance at the angkor wat temple where known as the famous ruin temple and honorable place</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a> </div>
</section>

<!--home packages section end-->
<!--home offer section starts-->


<section class="home-offer">
    <div class="content">
        <h3>up to 50% off</h3>
        <p>hhbfdsbhdbfsfhsfbvhsbvhsbvhbdshvbhsdbvndbvdhvfd</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>




<!--home offer section starts-->




<!--footer section starts-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>term of use</a>
        </div>
        <div class="box">
            <h3>Contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i>cadtcsstudent@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>choy chonvar ,phnom penh - 230342</a>
        </div>
        <div class="box">
            <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>

        </div>
    </div>
    <div class="credit">create by <span>Santa Linux Team</span>| all right reserved!</div>
</section>
<!---footer section end-->


<!---swiper js  link --->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-----custom js file link--->
<script src="js/script.js"></script>
</body>
</html>