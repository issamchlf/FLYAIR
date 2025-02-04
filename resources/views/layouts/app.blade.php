<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'FLYAIR')</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body class=" bg-gradient-to-br from-[#1E2340] to-[#2C3152] text-white min-h-screen overflow-x-hidden ">

    <x-header />


    <main class="">
        @yield('content')
    </main>


    <x-footer />
</body>

</html>
