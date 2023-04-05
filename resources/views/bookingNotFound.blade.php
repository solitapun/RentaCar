@extends('Layout.HeadAndFoot')

@section('content')
    <div class="heading">
        <img src="{{ asset('/storage/images/notfound.png') }}" style="width: auto">
    </div>

    <div class="heading-title">
        <h4>Make sure the booking ID is correct !</h4>
    </div>
    <section id="countdown">
        <script>
            // Set the timer duration in seconds
            var duration = 5;

            // Get the countdown element
            var countdown = document.getElementById('countdown');

            // Start the countdown timer
            var timer = setInterval(function() {
                // Update the countdown element with the remaining time
                countdown.innerHTML = 'Redirecting in ' + duration + ' seconds...';

                // Decrement the duration
                duration--;

                // If the duration is 0, redirect to the new view
                if (duration < 0) {
                    clearInterval(timer);
                    window.location.href = '/checkBooking';
                }
            }, 1000);
        </script>
    </section>
@endsection
