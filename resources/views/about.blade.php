@extends('Layout.HeadAndFoot')

@section('content')
<div class="heading" style="background:url({{ asset('storage/images/about-img.jpg') }}); height:35rem;">
    <div class="content">
        <h1 style="
        display: inline-block; background: var(--light-white);
        margin-top: 1rem;
        color: var(--black);
        font-size: 5rem;
        padding: 3rem 5rem;
        cursor: default">ABOUT US</h1>
    </div>

</div>

<!--about section starts-->
<section class="about">
    <div class="image">
        <img src="{{ asset('storage/images/cambodia-map.jpg') }}" alt="">
    </div>
    <div class="content">
        <h3>why choose us?</h3>
        <p>lorem ghsege ygyyyyyyyyyyyyyy.</p>
        <p>Lorem3000wshhhhhhhhhhh</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>

            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>

        </div>
    </div>
</section>
<!--about section ends -->

<!--review section stars-->
<section class="reviews">
    <h1 class="heading-title">clients reviews</h1>
    <div class="swiper reviews-slider">
            <div class="swiper-slider slide">
                <div class="stars">
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                </div>
                <p>I am happy with the service and the driver</p>
                <h3>jonh jackson</h3>
                <span>traveler</span>
                <img src="{{ asset('storage/images/p1.jpg') }}" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>

                </div>
                <p>Can't wait to book again for the next vacation</p>
                <h3>jonh jackson</h3>
                <span>traveler</span>
                <img src="{{ asset('storage/images/p2.jpg') }}" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                </div>
                <p>we really enjoy the trip along with the comfortable ride</p>
                <h3>jonh jackson</h3>
                <span>traveler</span>
                <img src="{{ asset('storage/images/p3.jpg') }}" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                </div>
                <p>We'd love to travel with this rental car the next time for the family trip</p>
                <h3>jonh jackson</h3>
                <span>traveler</span>
                <img src="{{ asset('storage/images/p4.jpg') }}" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                </div>
                <p>Thanks for your service, will try again</p>
                <h3>jonh jackson</h3>
                <span>traveler</span>
                <img src="{{asset('storage/images/p5.jpg')}}" alt="">
            </div>

            <div class="swiper-slider slide">
                <div class="stars">
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                    <i class=" fas fa-star"></i>
                </div>
                <p>The driver was unexpectedly knowledgeable about the place
                    <br>and recommended us many wonderful places to visit.<br>
                    In addition, he was also our guide to many historical places.
                </p>
                <h3>jonh jackson</h3>
                <span>traveler</span>
                <img src="{{ asset('storage/images/p6.jpg') }}" alt="">
            </div>
    </div>
</section>
<!--review section ends-->

@endsection

