@extends('layouts.app')

@section('content')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    .animate-float { animation: float 6s infinite ease-in-out; }
</style>


<section class="text-center pt-16 pb-8 px-4">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in-up">
            Your Journey Starts Here
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-200 animate-fade-in-up delay-100">
            Book your next adventure with FlyAir and experience the world like never before.
        </p>
        <a href="#" class="inline-block bg-orange-500 text-black px-8 py-4 rounded-lg text-lg font-bold hover:bg-orange-600 transition-all animate-fade-in-up delay-200">
            Explore Destinations
        </a>
    </div>
</section>

<div class="max-w-4xl mx-auto px-4 my-12">
    <form class="bg-white/10 backdrop-blur-sm p-6 rounded-xl grid grid-cols-1 md:grid-cols-4 gap-4">
        <input type="text" placeholder="From" class="p-3 rounded-md bg-white/90 text-black">
        <input type="text" placeholder="To" class="p-3 rounded-md bg-white/90 text-black">
        <input type="date" class="p-3 rounded-md bg-white/90 text-black">
        <select class="p-3 rounded-md bg-white/90 text-black">
            <option value="1">1 Passenger</option>
            <option value="2">2 Passengers</option>
            <option value="3">3+ Passengers</option>
        </select>
        <button type="submit" class="col-span-full bg-orange-500 py-4 rounded-md font-bold hover:bg-orange-600 transition-all">
            Search Flights
        </button>
    </form>
</div>

<div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl text-center hover:transform hover:-translate-y-2 transition-all">
        <h3 class="text-xl font-bold mb-4">Best Prices</h3>
        <p class="text-gray-300">We guarantee the lowest fares for your flights</p>
    </div>
    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl text-center hover:transform hover:-translate-y-2 transition-all">
        <h3 class="text-xl font-bold mb-4">Flexible Bookings</h3>
        <p class="text-gray-300">Change or cancel your plans with ease</p>
    </div>
    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl text-center hover:transform hover:-translate-y-2 transition-all">
        <h3 class="text-xl font-bold mb-4">24/7 Support</h3>
        <p class="text-gray-300">Our team is always here to help you</p>
    </div>
</div>


@endsection


