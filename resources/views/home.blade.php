@extends('Layout.HeadAndFoot')

@section('content')
    <!--home section start-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide"
                     style="background-image: url('{{ asset('storage/images/lexus.jpg') }}')">
                    <div class="content">
                        <span>Book Us Now!</span>
                        <h3>go anywhere you like</h3>
                        <a href="{{ route('about') }}" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide"
                     style="background:url('{{ asset('storage/images/bus-min.jpg') }}') no-repeat; width:1024px; height: 683px;">
                    <div class="content">
                        <span>Book Us Now!</span>
                        <h3>discover the new places</h3>
                        <a href="{{ route('about') }}" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide"
                     style=" background:url('{{ asset('storage/images/car-rental.jpg') }}') no-repeat ">
                    <div class="content">
                        <span>explore, discover,travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="{{ route('about') }}" class="btn">discover more</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--home section end-->

    <!--services section starts-->
    <section class="services">
        <h1 class="heading-title">our service</h1>
        <div class="box-container">

            <a href="{{ route('comingSoon') }}" class="box">
                <img src="{{ asset('storage/images/travel-luggage.png') }}" alt="">
                <h3>adventure</h3>
            </a>

            <a href="{{ route('comingSoon') }}" class="box">
                <img src="{{ asset('storage/images/icon-2.png') }}" alt="">
                <h3>tour guide</h3>
            </a>

            <a href="{{ route('comingSoon') }}" class="box">
                <img src="{{ asset('storage/images/driver.png') }}" alt="">
                <h3>Best Driver</h3>
            </a>

            <a href="{{ route('comingSoon') }}" class="box">
                <img src="{{ asset('storage/images/pay.png') }}" alt="">
                <h3>Online Payment</h3>
            </a>
        </div>
    </section>
    <!--services section ends-->


    <!--home about section start-->
    <section class="home-about">
        <div class="image">
            <img src="{{ asset('storage/images/cambodia.jpg') }}" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>
                <b>BookACab</b> was founded in 2023, co-founder CADT student. <br>
                We aim to provide the safest and comfortable travel experience
                to the customers enjoying their trip with family or friends !
                <br><br> Check out more about us
            </p>
            <a href="{{ route('about') }}" class="btn">read more</a>
        </div>
    </section>
    <!---home about section end-->


    <!--home packages section starts-->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{ asset('storage/images/Angkor-wat.jpg') }}" alt="" style="width: 100%; height: 100%">
                </div>
                <div class="content">
                    <h3>Angkor wat</h3>
                    <p>Take a glance at the angkor wat temple and enjoy the sunset</p>
                    <a href="{{ route('book') }}" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('storage/images/Bokor.png') }}" alt="" style="height: 100%; width: 100%">
                </div>
                <div class="content">
                    <h3>Bokor Mountain</h3>
                    <p>Enjoy nature up on the mountain with always cold chilling weather</p>
                    <a href="{{ route('book') }}" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('storage/images/cambodia-koh-rong-samloem.jpg') }}" alt="" style="width: 100%; height: 100%">
                </div>
                <div class="content">
                    <h3>Koh Rong</h3>
                    <p>Go swimming , make sand-castle and enjoy its delicious foods !</p>
                    <a href="{{ route('book') }}" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('storage/images/Kulen.png') }}" alt="" style="height: 100%; width: 100%">
                </div>
                <div class="content">
                    <h3>Kulen Mountain</h3>
                    <p>Mountain where King Jayavarman II declared himself as god-king at its peak</p>
                    <a href="{{ asset('book') }}" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="{{ route('package') }}" class="btn">load more</a></div>
    </section>
    <!--home packages section end-->

    <!--home offer section starts-->
    <section class="home-offer">
        <div class="content">
            <h3>up to 50% off</h3>
            <p>FOR NON-HOLIDAY DAY TRIP BOOKING</p>
            <a href="{{ route('book') }}" class="btn">book now</a>
        </div>
    </section>
    <!--home offer section end-->
@endsection
