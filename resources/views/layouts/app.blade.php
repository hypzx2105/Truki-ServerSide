<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Truki - @yield('title')</title>
    
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4 flex justify-between">
        <a href="{{ route('portfolios.index') }}" class="text-xl font-bold">Truki</a>
        <div class="space-x-4">
            <a href="{{ route('portfolios.index') }}" class="hover:underline">Portfolios</a>
            <a href="{{ route('portfolios.create') }}" class="hover:underline">New</a>
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
