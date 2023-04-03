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
    <form action="Reciept.blade.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>ID :</span>
                <input type="text" placeholder="Enter your ID" name = "ID">
            </div>
        </div>
    </form>
</section>

@endsection
