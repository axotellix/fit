<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- [ FONTS ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/suissnord" rel="stylesheet">

    <!-- [ STYLES ] -->
    <link rel="stylesheet" href="/css/app.css">
    <livewire:styles />
    
    <!-- [ SCRIPTS ] -->
    <script src = '/js/libs/slider.js' defer></script>
    <script src = '/js/app.js' defer></script>

    <title>FIT</title>
</head>
<body class = 'preload'>

    @yield('preloader')

    @yield('nav')

    @yield('header')

    @yield('main')

    @yield('footer')

    <livewire:scripts />
    
</body>
</html>