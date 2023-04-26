@extends('Layout.HeadAndFoot')

@section('content')
    <setion id="showw">
        <div class="wrapper">
            <div class="boxx">
                <h2>Your Booking Information</h2>
                <ul>
                    <li>Booking ID:  <p> {{ $user->booking_id }} </p></li>
                    <li>Name: <p> {{ $user->name }} </p></li>
                    <li>Phone: <p> {{ $user->phone }} </p></li>
                    <li>Destination: <p> {{ $user->destination }} </p></li>
                    <li>Passengers: <p> {{ $user->passenger }} </p></li>
                    <li>Trip Start: <p> {{ $user->from }} </p></li>
                    <li>Trip end: <p> {{ $user->to }} </p></li>
                </ul>
                <div style="display: flex; justify-content: space-between">
                    <a href="{{ url()->previous() }}" class="btn" style="margin-bottom: 5px">Go Back</a>

                    <form method="POST" action="{{ url('/checkBooking/show/cancel/' . $user->booking_id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('home') }}" class="btn" style="margin-bottom: 5px" type="submit">Cancel Booking</a>
                    </form>
                </div>
            </div>
        </div>
    </setion>

@endsection

