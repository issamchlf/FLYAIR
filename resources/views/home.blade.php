@extends('layouts.app')

@section('content')
<div class="bg-[url(https://cdn.zmescience.com/wp-content/uploads/2023/08/clouds-cumulus-sky-nature-preview.jpg)] ..."></div>

    <section class="relative flex flex-col md:flex-row items-center justify-between px-12 py-16">
        <div class="max-w-lg space-y-6">
            <p class="text-sm uppercase text-black-500 tracking-widest">Elevate Your Travel Journey</p>
            <h1 class="text-5xl font-bold">Experience The Magic Of Flight!</h1>
            <button class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Book A Trip Now</button>
        </div>
        <div class="w-full md:w-1/2">
            <img src="{{ asset('img/plane2.png') }}" alt="Airplane" class="w-full">
        </div>
    </section>

    <section class="px-12 py-12">
        <div class="space-y-8">
          <div class="flex flex-col md:flex-row justify-between items-center bg-gradient-to-r from-blue-500 to-white-600 text-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
            <div class="space-y-2">
              <h3 class="text-xl font-bold">Awesome Places</h3>
              <p class="text-gray-200">Discover The World In One Click At A Time!</p>
            </div>
            <button class="mt-4 md:mt-0 px-6 py-2 bg-white text-purple-600 rounded-lg hover:bg-gray-200 transition duration-300">Explore Now →</button>
          </div>
      
          <div class="flex flex-col md:flex-row justify-between items-center bg-gradient-to-r from-blue-500 to-white-600 text-white p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
            <div class="space-y-2">
              <h3 class="text-xl font-bold">Exotic Destinations</h3>
              <p class="text-gray-200">Experience luxury and adventure in every trip!</p>
            </div>
            <button class="mt-4 md:mt-0 px-6 py-2 bg-white text-purple-600 rounded-lg hover:bg-gray-200 transition duration-300">Explore Now →</button>
          </div>
        </div>
      </section>
      
      
    
    <div class="max-w-7xl mx-auto px-6 py-10">
        <section>
            <h2 class="text-3xl font-bold">Popular Destination</h2>
            <p class="text-gray-500">Unleash Your Wanderlust With SkyWings</p>
            <div class="flex gap-4 overflow-x-auto mt-6">
                <div class="w-64 bg-blue-100 rounded-lg shadow-lg p-4">
                    <img src="{{ asset('img/chawen2.JPG') }}" class="rounded-lg w-full" alt="Destination">
                    <h3 class="font-semibold mt-2">The Blue City</h3>
                    <p class="text-gray-500 text-sm">Chefchaouen, Morocco</p>
                </div>
                <div class="w-64 bg-blue-100 rounded-lg shadow-lg p-4">
                    <img src="{{ asset('img/dubai.jpg') }}" class="rounded-lg w-full" alt="Destination">
                    <h3 class="font-semibold mt-2">Khalifa Tour</h3>
                    <p class="text-gray-500 text-sm">Dubai, Emarates</p>
                </div>
                <div class="w-64 bg-blue-100 rounded-lg shadow-lg p-4">
                    <img src="{{ asset('img/sahara.png') }}" class="rounded-lg w-full" alt="Destination">
                    <h3 class="font-semibold mt-2">Grand Sahara</h3>
                    <p class="text-gray-500 text-sm">Merzouga, Morocco</p>
                </div>
                <div class="w-64 bg-blue-100 rounded-lg shadow-lg p-4">
                    <img src="{{ asset('img/thailand.jpg') }}" class="rounded-lg w-full" alt="Destination">
                    <h3 class="font-semibold mt-2">Toub Kaak Beach</h3>
                    <p class="text-gray-500 text-sm">Krabi, Thailand</p>
                </div>
                <div class="w-64 bg-blue-100 rounded-lg shadow-lg p-4">
                    <img src="{{ asset('img/barcelona.jpg') }}" class="rounded-lg w-full" alt="Destination">
                    <h3 class="font-semibold mt-2">Sagrada Família</h3>
                    <p class="text-gray-500 text-sm">Barcelona, Spain</p>
                </div>
            </div>
        </section>
        <section class="mt-16 flex flex-col md:flex-row items-center gap-6">
            <img src="{{ asset('img/seat.jpg') }}" class="rounded-lg shadow-lg" alt="Promo">
            <div>
                <h2 class="text-4xl font-bold">UNLEASH WANDERLUST WITH SKYWINGS</h2>
                <p class="text-gray-500">Explore new places and experience different cultures.</p>
                <button class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg">Book A Flight Now</button>
            </div>
        </section>
    </div>

@endsection


