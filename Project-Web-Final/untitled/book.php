<?php
session_start();
    include ("connection.php");
    include ("function.php");

    if ($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $destination = $_POST['destination'];
        $guest = $_POST['guests'];
        $from = $_POST['from'];
        $to = $_POST['to'];

        if(!empty($user_name) && !empty($email) && !empty($phone) && !empty($address) && !empty($destination) && !empty($guest)
            && !empty($from) && !empty($to))
        {
            //save to database
            $ID = random_num(20);
            $query = "insert into (ID,Username,Email,Phone,Address,Destination,People,LeavingDate,ComeBack) 
                values ('$ID','$name','$email', '$phone', '$address', '$destination', '$guest', '$from', '$to')";
            mysqli_query($query);
            header("Location: Reciept.php");
            die;
        }
        else
        {
            echo "Please enter valid information";
        }
    }
?>

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
<!--booking section starts-->
<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="Enter your name" name = "name">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="Enter your email" name = "email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="tel" placeholder="Enter your number" name = "phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Enter your address" name = "address">
            </div>
            <div class="inputBox">
                <span>Destination :</span>
                <input type="text" placeholder="place you want to visit" name = "destination">
            </div>
            <div class="inputBox">
                <span>Passenger :</span>
                <input type="number" placeholder="number of guests" name = "guests">
            </div>
            <div class="inputBox">
                <span>From :</span>
                <input type="date" placeholder="Enter your name" name = "From">
            </div>
            <div class="inputBox">
                <span>To :</span>
                <input type="date" placeholder="Enter your name" name = "To">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>





<!--booking section  ends-->




<!---footer section starts-->

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
    <div class="credit">create by <span>Santa Linux</span> &nbsp;| all right reserved!</div>
</section>
<!---footer section end-->







<!---swiper js  link --->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-----custom js file link--->
<script src="js/script.js"></script>
</body>
</html>