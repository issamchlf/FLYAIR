@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#1E2340] to-[#2C3152] p-6">
  <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md animate__animated animate__fadeInUp">
    <h2 class="text-3xl font-bold text-center text-[#2C3152] mb-6">Register</h2>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name:</label>
        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#FFA500] transition duration-200">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email:</label>
        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#FFA500] transition duration-200">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password:</label>
        <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#FFA500] transition duration-200">
      </div>
      <div class="mb-6">
        <label for="password_confirmation" class="block text-gray-700 text-sm font-semibold mb-2">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-4 py-2 border border-gray-300 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#FFA500] transition duration-200">
      </div>
      <button type="submit" class="w-full bg-[#FFA500] text-black font-bold py-2 rounded-lg hover:bg-[#e69500] transition duration-300">
        Register
      </button>
    </form>
  </div>
</div>
@endsection
