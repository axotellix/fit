
@extends('Layouts.layout_app')


{{-- [ PRELOADER ] --}}
@section('preloader')

    @include('Layouts.layout_preloader')

@endsection


{{-- [ NAVBAR ] --}}
@section('nav')

    @include('Layouts.layout_nav')

@endsection


{{-- [ MAIN ] --}}
@section('main')

    {{-- [ extra content ] --}}
    @section('main-content')
    <div id = 'contacts' class="wrapper">

        <h2>CONTACTS</h2>

        <section class = 'contacts-wrapper'>

            <!-- [ how we can be reached ] -->
            <div class="contacts">
                <p class="contacts-plain">
                    <span>phone</span> +7 (999) 320-40-10 <br>
                    <span>email</span> fit@center.com
                </p>

                <p class="contacts-social">
                    <a href="">
                        <svg class="social-icon ico-19">
                            <use xlink:href="/img/sprites.svg#ico-instagram"></use>
                        </svg>
                        <span>instagram</span>
                    </a>

                    <a href="">
                        <svg class="social-icon ico-19">
                            <use xlink:href="/img/sprites.svg#ico-whatsapp"></use>
                        </svg>
                        <span>whatsapp</span>
                    </a>

                    <a href="">
                        <svg class="social-icon ico-19">
                            <use xlink:href="/img/sprites.svg#ico-youtube"></use>
                        </svg>
                        <span>youtube</span>
                    </a>
                </p>
            </div>

            <!-- [ working hours ] -->
            <div class="working-hours">
                <p>
                    <span class = 'subtitle'>Working hours</span> <br>
                    <span class = 'weekday'>Mon - Fri</span> 9 a.m. - 10 p.m. <br>
                    <span class = 'weekday'>Weekend</span> 9 a.m. - 8 p.m.
                </p>
            </div>

        </section>


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