<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIH - Digital Innovation Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-gray-800">
    <!-- Floating Background Elements -->
    <div class="fixed inset-0 overflow-hidden -z-10">
        <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-blue-100 opacity-20 blur-xl"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 rounded-full bg-green-100 opacity-20 blur-xl"></div>
    </div>

    @include('partials.navigation')
    
    @yield('content')
    
    @include('partials.footer')

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>