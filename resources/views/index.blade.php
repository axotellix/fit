
@extends('Layouts.layout_app')


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
        <a href="" class="CTA button-big">JOIN NOW</a>

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

    @endsection

    {{-- [ common content ] --}}
    @include('Layouts.layout_main')

@endsection