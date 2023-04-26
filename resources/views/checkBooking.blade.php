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
            Check your booking Here!
        </h1>
    </div>

<section class="booking">
    <h1 class="heading-title">Check Your Booking</h1>
    <form action="{{ route('show') }}" method="post" class="book-form">
        {{ csrf_field() }}

        <div class="flex">
            <div class="inputBox">
                <span>
                    <label for="bookingID">Booking ID :</label>
                    <input type="number" class="no-arrows" placeholder="Enter your booking ID" name = "bookingID" id="bookingID" require>
                </span>
            </div>
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>
</section>

@endsection
