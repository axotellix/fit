
@extends('Layouts.layout_app')


{{-- [ PRELOADER ] --}}
@section('preloader')

    @include('Layouts.layout_preloader')

@endsection


{{-- [ NAVBAR ] --}}
@section('nav')

    @include('Layouts.layout_nav')

@endsection


{{-- [ HEADER ] --}}
@section('header')

    {{-- [ extra content ] --}}
    @section('header-content')
    <div id = 'crew' class="wrapper">

        <!-- crew description -->
        <div class="crew-info">
            
            <svg class="logo">
                <use xlink:href="/img/sprites.svg#logo"></use>
            </svg>

            <section>
                <p>
                    <span class = 'crew-name'>Aaron Thompson</span>
                    <span class = 'crew-age'>27 years old</span>

                    Aaron is a world powerlifting champion. He is presently a member of the USA national powerlifting team. He has several times presented the USA on international powerlifting contests.
                </p>
            </section>
        </div>

        <!-- crew photo -->
        <div class="crew-photo">
            <img src="/img/crew/1.png" alt="Aaron Thompson">
        </div>

        
    </div>
    @endsection

    {{-- [ common content ] --}}
    @include('Layouts.layout_header')

@endsection


{{-- [ MAIN ] --}}
@section('main')

    {{-- [ extra content ] --}}
    @section('main-content')
    <div class="wrapper">

        <h2>OUR CREW</h2>

        <ul class = 'gallery gallery-small-vertical'>
            <li class="photo" caption = 'Aaron Thompson'><img src="/img/crew/1.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Alexandra Rivera'><img src="/img/crew/2.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Ryan Adams'><img src="/img/crew/3.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Aaron Thompson'><img src="/img/crew/1.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Alexandra Rivera'><img src="/img/crew/2.png" alt="fit-crew"></li>
            
            <li class="photo" caption = 'Aaron Thompson'><img src="/img/crew/1.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Alexandra Rivera'><img src="/img/crew/2.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Ryan Adams'><img src="/img/crew/3.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Aaron Thompson'><img src="/img/crew/1.png" alt="fit-crew"></li>
            <li class="photo" caption = 'Alexandra Rivera'><img src="/img/crew/2.png" alt="fit-crew"></li>
            
        </ul>
        
    </div>
    @endsection

    {{-- [ common content ] --}}
    @include('Layouts.layout_main')

@endsection


{{-- [ FOOTER ] --}}
@section('footer')

    @include('Layouts.layout_footer')

@endsection