<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Truki Lite - Creative Portfolio Platform ⚝⋆.˚</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

    @include('layouts.navigation')

    <div class="min-h-screen">
        <main class="py-8 px-4 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
    @stack('scripts')
</body>
</html>
