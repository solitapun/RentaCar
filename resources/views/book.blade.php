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

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--booking section starts-->
<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form method="POST" action="{{ route('booking') }}" class="book-form">
        {{ csrf_field() }}

        <div class="flex">
            <div class="inputBox">
                <span>
                    <label for="name">name :</label>
                    <input type="text" placeholder="Enter your name" name = "name" id="name" required>
                </span>
            </div>

            <div class="inputBox">
                <span>
                    <label for="email">email :</label>
                    <input type="email" placeholder="Enter your email" name = "email" id="email" required>
                </span>
            </div>

            <div class="inputBox">
                <span>
                    <label for="phone">Phone :</label>
                    <input type="tel" placeholder="Enter your number" name = "phone" id="phone" required>
                </span>
            </div>

            <div class="inputBox">
                <span>
                    <label for="address">address :</label>
                    <input type="text" placeholder="Enter your address" name = "address" id="address" required>
                </span>
            </div>

            <div class="inputBox">
                <span>
                    <label for="destination">destination :</label>
                    <select id="destination" name="destination" required>
                        <option value="Angkor Wat">Angkor Wat</option>
                        <option value="Bokor Mountain">Bokor Mountain</option>
                        <option value="Koh Rong">Koh Rong</option>
                        <option value="Kulen Mountain">Kulen Mountain</option>
                        <option value="Phnom Penh City">Phnom Penh City</option>
                        <option value="Sihanoukville">Sihanoukville</option>
                    </select>
                </span>
            </div>

            <div class="inputBox">
                <span>
                    <label for="passenger">Passenger :</label>
                    <input type="number" placeholder="Number of guests" name = "passenger" id="passenger" required>
                </span>
            </div>

            <div class="inputBox">
                <span>
                    <label for="from">From :</label>
                    <input type="date" name = "from" id="from" required>
                </span>
            </div>

            <div class="inputBox">
                <span>
                    <label for="to">To :</label>
                    <input type="date" name = "to" id="to" required>
                </span>
            </div>
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>
</section>
<!--booking section  ends-->

@endsection
