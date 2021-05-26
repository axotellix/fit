<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- [ FONTS ] -->
    <link href="http://fonts.cdnfonts.com/css/suissnord" rel="stylesheet">

    <!-- [ STYLES ] -->
    <link rel="stylesheet" href="/css/app.css">
    
    <!-- [ SCRIPTS ] -->
    <script src = '/js/jquery.min.js' defer></script>
    <script src = '/js/app.js' defer></script>

    <title>FIT</title>
</head>
<body class = 'preload'>

    @yield('preloader')

    @yield('nav')

    @yield('header')

    @yield('main')

    @yield('footer')

</body>
</html>