
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
    <div class="wrapper">

        <h2>PRICE LIST</h2>

        @include('Layouts.layout_price-card', [
            'plan_title' => 'Easy start!', 
            'price'      => '$20 / mo', 
            'plan_type'  => 'Monthly membership',
            'url'        => ''
        ])

        @include('Layouts.layout_price-card', [
            'plan_title' => 'Stay close!', 
            'price'      => '$50 / mo', 
            'plan_type'  => 'Family membership',
            'url'        => ''
        ])

        @include('Layouts.layout_price-card', [
            'plan_title' => 'Profitable!', 
            'price'      => '$200 / yr', 
            'plan_type'  => 'Annual membership',
            'url'        => ''
        ])

        

    </div>
    @endsection

    {{-- [ common content ] --}}
    @include('Layouts.layout_main')

@endsection


{{-- [ FOOTER ] --}}
@section('footer')

    @include('Layouts.layout_footer')

@endsection