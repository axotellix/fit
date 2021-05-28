
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
    <div id = 'gallery' class="wrapper">

        <!-- [ fit indentity ] -->
        <div class="fit-identity">
            
            <!-- fit logo -->
            <svg class="logo">
                <use xlink:href="/img/sprites.svg#logo"></use>
            </svg>

            <!-- social icons -->
            <div class="icons">

                <a href="">
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

            
        </div>

        <!-- crew photo -->
        <div class="photo-slider">
            <div class="slider-controls">

                <a class="ctrl prev inactive">
                    <svg>
                        <use xlink:href="/img/sprites.svg#chevron-left"></use>
                    </svg>
                </a>
                <a class="ctrl next">
                    <svg>
                        <use xlink:href="/img/sprites.svg#chevron-right"></use>
                    </svg>
                </a>

            </div>
            <img src="/img/gym/1.png" alt="fit gym">
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

        <h2>GALLERY</h2>

        <ul class = 'gallery-wide-horizontal'>
            <li class="photo"><img src="/img/gym/1.png" alt="fit gym"></li>
            <li class="photo"><img src="/img/gym/2.png" alt="fit gym"></li>
            <li class="photo"><img src="/img/gym/3.png" alt="fit gym"></li>

            <li class="photo"><img src="/img/gym/1.png" alt="fit gym"></li>
            <li class="photo"><img src="/img/gym/2.png" alt="fit gym"></li>
            <li class="photo"><img src="/img/gym/3.png" alt="fit gym"></li>

            <li class="photo"><img src="/img/gym/1.png" alt="fit gym"></li>
            <li class="photo"><img src="/img/gym/2.png" alt="fit gym"></li>
            <li class="photo"><img src="/img/gym/3.png" alt="fit gym"></li>

            <li class="photo"><img src="/img/gym/1.png" alt="fit gym"></li>
        </ul>

        <section>
            <p>
                <span class = 'h4'>More photos</span>

                More photos, training sessions, special offers and news in our instagram. <br>Chek it out! 
            </p>

            <a href="" class="button"><span>VISIT INSTAGRAM</span></a>
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