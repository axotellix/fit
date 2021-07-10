
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

        @foreach( $price_cards as $price_card )
            @include('Layouts.layout_price-card', [
                'plan_title' => $price_card->card->title, 
                'price'      => "$$price_card->price / $price_card->period", 
                'plan_type'  => $price_card->card->type,
                'url'        => "/request/" . $price_card->card->plan_id
            ])  
        @endforeach
        
        
        @if( session()->has('purchase-status') )
            <p class="system-message">{{ session('purchase-status') }}</p>
        @endif

    </div>
    @endsection

    {{-- [ common content ] --}}
    @include('Layouts.layout_main')

@endsection


{{-- [ FOOTER ] --}}
@section('footer')

    @include('Layouts.layout_footer')

@endsection