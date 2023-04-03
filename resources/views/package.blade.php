@extends('Layout.HeadAndFoot')

@section('content')

<div class="heading" style="background:url({{ asset('storage/images/header-bg-2.jpg') }})">
    <h1 style="
        display: inline-block; background: var(--light-white);
        margin-top: 1rem;
        color: var(--black);
        font-size: 5rem;
        padding: 3rem 5rem;
        cursor: default">
        Our packages
    </h1>
</div>

<!--package section starts-->
<section class="packages">
    <h1 class="heading-title">top destination</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/img-1.jpg') }}"alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
                <a href="{{ route('book') }}" class="btn" >Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/img-2.jpg') }}" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
                <a href="{{ route('book') }}" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/img-3.jpg') }}" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
                <a href="{{ asset('book') }}" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/img-4.jpg') }}"alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
                <a href="{{ route('book') }}" class="btn" >Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{ asset('storage/images/img-5.jpg') }}"alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
                <a href="{{ route('book') }}" class="btn" >Book now</a>
            </div>
        </div>
    </div>

    {{--<div class="box">
        <div class="image">
            <img src="{{ asset('storage/images/img-6.jpg') }}"alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>lorem isodfsfjfhsfdsdhfbsbfh  hfhsjfsahfsjfslk</p>
            <a href="{{ route('book') }}" class="btn" >Book now</a>
        </div>
    </div>

    <div class="box">
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

    <div class="load-more">
        <span class="btn">
            load more
        </span>
    </div>
</section>
<!--package section end-->

@endsection
