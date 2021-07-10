
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

        <!-- [ photo slider ] -->
        <div class="photo-slider" data-slider = 'container'>
            <div class="slider-controls">

                <a class="ctrl prev inactive"  data-slider = 'prev'>
                    <svg>
                        <use xlink:href="/img/sprites.svg#chevron-left"></use>
                    </svg>
                </a>
                <a class="ctrl next"  data-slider = 'next'>
                    <svg>
                        <use xlink:href="/img/sprites.svg#chevron-right"></use>
                    </svg>
                </a>

            </div>
            <!-- <img src="/img/gym/1.png" data-slider = 'img' alt="fit gym"> -->
            <img src = '' data-slider = 'img' alt="fit gym">
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

        <ul class = 'gallery-wide-horizontal' data-slider = 'gallery'>
            @foreach( $gyms as $gym )
                <li class="photo" data-slider-id = "{{ $loop->index }}">
                    <img src="{{ $gym->url }}" alt="fit gym">
                </li>
            @endforeach
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