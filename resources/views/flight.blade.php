@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Filter Sidebar -->
        <div class="col-span-1 bg-white p-6 rounded-lg shadow-md border border-gray-200">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Filter Flights</h2>

            <!-- Filter Form -->
            <form method="GET" action="">
                <!-- Price Range Filter -->
                <div class="mb-6">
                    <h3 class="text-gray-700 font-semibold mb-2">Price Range</h3>
                    <input
                        type="range"
                        min="0"
                        max="1000"
                        class="w-full"
                        name="max_price"
                        value="{{ request('max_price', 250) }}"
                        oninput="document.getElementById('price-value').innerText = this.value + ' €'"
                    />
                    <div class="text-sm text-gray-600 mt-2">
                        Max Price: <span id="price-value">{{ request('max_price', 250) }} €</span>
                    </div>
                </div>

                <!-- Departure Time Filter -->
                <div class="mb-6">
                    <h3 class="text-gray-700 font-semibold mb-2">Departure Time</h3>
                    <select name="departure_time" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="" {{ request('departure_time') == '' ? 'selected' : '' }}>Any Time</option>
                        <option value="morning" {{ request('departure_time') == 'morning' ? 'selected' : '' }}>Morning (6 AM - 12 PM)</option>
                        <option value="afternoon" {{ request('departure_time') == 'afternoon' ? 'selected' : '' }}>Afternoon (12 PM - 6 PM)</option>
                        <option value="evening" {{ request('departure_time') == 'evening' ? 'selected' : '' }}>Evening (6 PM - 12 AM)</option>
                    </select>
                </div>

                <!-- Airport Selection -->
                <div class="mb-6">
                    <h3 class="text-gray-700 font-semibold mb-2">Departure Airport</h3>
                    <select name="departure_airport" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="" {{ request('departure_airport') == '' ? 'selected' : '' }}>All Airports</option>
                        <option value="JFK" {{ request('departure_airport') == 'JFK' ? 'selected' : '' }}>JFK International</option>
                        <option value="LHR" {{ request('departure_airport') == 'LHR' ? 'selected' : '' }}>Heathrow</option>
                        <option value="CDG" {{ request('departure_airport') == 'CDG' ? 'selected' : '' }}>Charles de Gaulle</option>
                    </select>
                </div>

                <!-- Apply Filter Button -->
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                    Apply Filters
                </button>
            </form>
        </div>

        <!-- Flight Cards Section -->
        <div class="col-span-3">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($flights as $flight)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                        <div class="p-4">
                            <h4 class="font-bold">{{ $flight->name }}</h4>
                            <p class="text-gray-600">{{ $flight->departure_airport }} ➔ {{ $flight->arrival_airport }}</p>
                            <p class="text-gray-800 font-semibold">{{ $flight->price }} €</p>
                            <p class="text-sm text-gray-500">Departure: {{ $flight->departure_time }}</p>
                            <p class="text-sm text-gray-500">Arrival: {{ $flight->arrival_time }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
