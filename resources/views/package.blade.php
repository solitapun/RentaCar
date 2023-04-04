@extends('Layout.HeadAndFoot')

@section('content')

<div class="heading" style="background:url({{ asset('storage/images/Travel.jpg') }}); height: 40rem ">
    {{--<h1 style="
        display: inline-block; background: var(--light-white);
        margin-top: 1rem;
        color: var(--black);
        font-size: 5rem;
        padding: 3rem 5rem;
        cursor: default">
        Our packages
    </h1>--}}
</div>

<!--package section starts-->
<section class="packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/Angkor-wat.jpg') }}" alt="">
            </div>
            <div class="content">
                <h3>Angkor wat</h3>
                <p>Take a glance at the angkor wat temple and enjoy the sunset</p>
                <a href="{{ route('book') }}" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/Bokor.png') }}" alt="">
            </div>
            <div class="content">
                <h3>Bokor Mountain</h3>
                <p>Enjoy nature up on the mountain with always cold chilling weather</p>
                <a href="{{ route('book') }}" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/cambodia-koh-rong-samloem.jpg') }}" alt="">
            </div>
            <div class="content">
                <h3>Koh Rong</h3>
                <p>Go swimming , make sand-castle and enjoy its delicious foods !</p>
                <a href="{{ route('book') }}" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/Kulen.png') }}"alt="">
            </div>
            <div class="content">
                <h3>Kulen Mountain</h3>
                <p>Mountain where King Jayavarman II declared himself as god-king at its peak</p>
                <a href="{{ asset('book') }}" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/Phnom Penh.jpg') }}"alt="">
            </div>
            <div class="content">
                <h3>Phnom Penh City</h3>
                <p>Travel around the city of Phnom Penh and enjoy fabulous places !</p>
                <a href="{{ route('book') }}" class="btn" >Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/Sihanoukville.png') }}"alt="">
            </div>
            <div class="content">
                <h3>sihanoukville</h3>
                <p>Enjoy speed boat , jet ski , and other various water activities !</p>
                <a href="{{ route('book') }}" class="btn" >Book now</a>
            </div>
        </div>
    </div>
    {{--<div class="box">
        <div class="image">
            <img src="{{ asset('storage/images/img-7.jpg') }}"alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
            <a href="{{ route('book') }}" class="btn" >Book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="{{ asset('storage/images/img-8.jpg') }}"alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
            <a href="{{ route('book') }}" class="btn" >Book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="{{ asset('storage/images/img-9.jpg') }}"alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
            <a href="{{ route('book') }}" class="btn" >Book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="{{ asset('storage/images/img-10.jpg') }}"alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
            <a href="{{ route('book') }}" class="btn" >Book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="{{ asset('storage/images/img-11.jpg') }}"alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
            <a href="{{ route('book') }}" class="btn" >Book now</a>
        </div>
    </div>--}}

   {{-- <div class="load-more">
        <span class="btn">
            load more
        </span>
    </div>--}}
</section>
<!--package section end-->

@endsection
