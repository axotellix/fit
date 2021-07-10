<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- [ FONTS ] -->
    <link href="http://fonts.cdnfonts.com/css/suissnord" rel="stylesheet">

    <!-- [ STYLES ] -->
    <link rel="stylesheet" href="/css/app.css">
    <livewire:styles />

    <!-- [ SCRIPTS ] -->
    <script src = '/js/turbolinks.js' defer></script>

    <title>FIT</title>
</head>
<body>

    
    <!-- [ SIDEBAR: admin navigation ] -->
    <livewire:admin-sidebar />

    <!-- [ MAIN ] -->
    <main class = 'admin'>
        @yield('content')
    </main>

    <!-- [ livewire scripts ] -->
    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>

</body>
</html>