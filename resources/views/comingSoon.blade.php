@extends('Layout.HeadAndFoot')

@section('content')
    <div class="heading" style="background: url({{ asset('storage/images/comingsoon.jpg') }}); height: 71rem;"></div>

    <section>
        <div id="countdown">
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
                        window.location.href = '/';
                    }
                }, 1000);
            </script>
        </div>
    </section>
@endsection
