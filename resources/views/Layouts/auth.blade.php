<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- [ FONTS ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/suissnord" rel="stylesheet">

    <!-- [ STYLES ] -->
    <link rel="stylesheet" href="/css/app.css">
    
    <!-- [ SCRIPTS ] -->
    <script src = '/js/libs/slider.js' defer></script>
    <script src = '/js/app.js' defer></script>

    <title>FIT</title>
</head>
<body>

    <!-- [ PRELOADER ] -->
    @include('Layouts.layout_preloader')

    <!-- [ MAIN ]  -->
    <main class = 'auth w-100 flex-col-center-top'>

        <!-- FIT logo -->
        <a href="/">
            <svg class="logo">
                <use xlink:href="/img/sprites.svg#logo"></use>
            </svg>
        </a>

        @yield('content')

        <ul>
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                {{--
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                --}}
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </main>

</body>
</html>
