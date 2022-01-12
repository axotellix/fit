
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
    <div class="wrapper flex-col-center-top">

        <!-- FIT logo -->
        <svg class="logo">
            <use xlink:href="/img/sprites.svg#logo"></use>
        </svg>

        <!-- CTA button -->
        <a href="/prices" class="CTA button-big"><span>JOIN NOW</span></a>

        <!-- social icons -->
        <div class="icons">

            <a href="https:/instagram.com/axotellix" target="_blank">
                <svg class="social-icon ico-19">
                    <use xlink:href="/img/sprites.svg#ico-instagram"></use>
                </svg>
            </a>
            <a href="">
                <svg class="social-icon ico-19 mt--1">
                    <use xlink:href="/img/sprites.svg#ico-whatsapp"></use>
                </svg>
            </a>
            <a href="">
                <svg class="social-icon ico-21">
                    <use xlink:href="/img/sprites.svg#ico-youtube"></use>
                </svg>
            </a>

        </div>

        <!-- background image -->
        <img class = 'background-img' src="/img/fit-toned.png" alt="fit-cover">
        
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

        <h2>ABOUT US</h2>

        <section>
            <p>
                <span class = 'h4'>FIT fitness center</span>

                FIT fitness Clubs is a results-driven fitness club with gyms located in Moscow, Russia. Large, bright rooms and panoramic windows all around will more cosy than at home! Our modern fitness center offers all the amenities you’d expect to find in any gym, but in friendly, hassle-free environment that welcomes members of all ages and abilities.
            </p>
        </section>

        <section>

            <p>
                <span class = 'h4'>Our gyms</span>

                We aim at providing the most comfortable & modern gyms. So we pay special attention to what is really important for comfortable training – space, light and air. Check out those loft style gyms!
            </p>

            <ul class = 'gallery-wide-horizontal'>
                @foreach( $gyms as $gym )
                    <li class="photo"><img src="{{ $gym->url }}" alt="fit-gym"></li>
                @endforeach
            </ul>

            <a href="https:/instagram.com/axotellix" class="button"  target = "_blank"><span>VISIT INSTAGRAM</span></a>

        </section>

        <section>

            <p>
                <span class = 'h4'>Our crew</span>

                Practice makes perfect - and with our crew twice as perfect! Practice with expirienced, patient & friendly trainers. 
            </p>

            <ul class = 'gallery gallery-small-vertical'>
                @foreach( $crew as $member )
                    <li class="photo" caption = "{{ $member->caption }}">
                        <img src="{{ $member->url }}" alt="fit-crew">
                    </li>
                @endforeach
            </ul>

            <a href="/crew" class="button"><span>SEE ALL CREW</span></a>

        </section>


        <h2>FIND US HERE</h2>

        <section>
            <p class = 'mb-20'>4 Romanov ln, apt. 2</p>

            <div class="map">
                <a href="" class="button"><span>OPEN IN YANDEX.MAPs</span></a>
                <img src="/img/map.jpg" alt="map">
            </div>
        </section>

    </div>
    @endsection

    {{-- [ common content ] --}}
    @include('Layouts.layout_main')

@endsection


{{-- [ FOOTER ] --}}
@section('footer')

    @include('Layouts.layout_footer')

@endsection