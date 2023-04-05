@extends('Layout.HeadAndFoot')

@section('content')
    <div class="heading" style="background: url({{ asset('storage/images/thankyou.jpg') }}); height: 37rem;"></div>
    <section>
        <div class="heading-title">
            <h4>your booking ID was sent to your email address !</h4>
        </div>
        <div id="countdown">
            <script>
                // Set the timer duration in seconds
                var duration = 15;

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
                        window.location.href = '/';
                    }
                }, 1000);
            </script>
        </div>
    </section>
@endsection
