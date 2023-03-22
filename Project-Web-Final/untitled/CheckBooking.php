<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!--- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!---custom css file link-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--header section starts -->
<section class="header">
    <a href="home.php" class="logo">
        <img src="images/logo.png">
        <p>BookaCab<br>
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
<div class="heading" style="background:url(images/Angkor-wat-sunrise.jpg)">
    <h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">Check Your Booking</h1>
    <form action="Reciept.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>ID :</span>
                <input type="text" placeholder="Enter your ID" name = "ID">
            </div>

