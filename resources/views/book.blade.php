@extends('Layout.HeadAndFoot')

@section('content')
<div class="heading" style="background:url({{ asset('storage/images/Angkor-wat-sunrise1.jpg') }}); height:40rem;">
    <h1 style="
        display: inline-block; background: var(--light-white);
        margin-top: 1rem;
        color: var(--black);
        font-size: 4rem;
        padding: 3rem 5rem;
        cursor: default">
        best experience guaranteed!
    </h1>
</div>

<!--booking section starts-->
<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <label>
                    <input type="text" placeholder="Enter your name" name = "name">
                </label>
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <label>
                    <input type="email" placeholder="Enter your email" name = "email">
                </label>
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <label>
                    <input type="tel" placeholder="Enter your number" name = "phone">
                </label>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <label>
                    <input type="text" placeholder="Enter your address" name = "address">
                </label>
            </div>
            <div class="inputBox">
                <span>Destination :</span>
                <label>
                    <input type="text" placeholder="place you want to visit" name = "destination">
                </label>
            </div>
            <div class="inputBox">
                <span>Passenger :</span>
                <label>
                    <input type="number" placeholder="number of guests" name = "guests">
                </label>
            </div>
            <div class="inputBox">
                <span>From :</span>
                <label>
                    <input type="date" placeholder="Enter your name" name = "From">
                </label>
            </div>
            <div class="inputBox">
                <span>To :</span>
                <label>
                    <input type="date" placeholder="Enter your name" name = "To">
                </label>
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!--booking section  ends-->

@endsection
