<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookACab</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!--- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!---custom css file link-->
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>

    <!---Bootstrap Link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!---swiper js  link --->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-----custom js file link--->
    <script src="{{ asset('script.js') }}"></script>

    {{-- image icon on browser tab --}}
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
</head>

<body>
<!--header section starts -->
<section class="header">
    <a href="{{ route('home') }}" class="logo">
        <img src="{{url('storage/images/logo.png')}}">
        <p>BookACab<br>
            {{--<small style="font-size: 10px">To your Destination</small>--}}
        </p>
    </a>
    <nav class="navbar">
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('about') }}">about</a>
        <a href="{{ route('package') }}">package</a>
        <a href="{{ route('book') }}">book</a>
        <a href="{{ route('checkBooking') }}">Check Booking</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section end-->

    <div>
        @yield('content')
    </div>

<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="{{ route('home') }}"><i class="fas fa-angle-right"></i>home</a>
            <a href="{{ route('about') }}"><i class="fas fa-angle-right"></i>about</a>
            <a href="{{ route('package') }}"><i class="fas fa-angle-right"></i>package</a>
            <a href="{{ route('book') }}"><i class="fas fa-angle-right"></i>book</a>
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
            <a href="#"><i class="fas fa-map"></i>chroy chonvar ,phnom penh</a>
        </div>
        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>
    <div class="credit"> create by <span> BookACab </span> Team | all right reserved!</div>
</section>
<!---footer section end-->

</body>
</html>
