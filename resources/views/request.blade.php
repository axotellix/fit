
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
    <div id = 'request' class="wrapper">

        <h2>GET MEMBERSHIP</h2>

        @include('Layouts.layout_price-card', [
            'plan_title' => 'Easy start!', 
            'price'      => '$20 / mo', 
            'plan_type'  => 'Monthly membership',
            'show_cta'   => false
        ])
        <a href="/prices" class = 'button-plain ml-2 mb-50'>SELECT ANOTHER</a>
        
        @include('Layouts.layout_form', [
            'submit' => 'GET A CARD',

            'title_1'  => 'PERSONAL INFO',
            'fields' => [

                // firts name
                [
                    'type'          => 'text',
                    'name'          => 'first_name',
                    'id'            => 'first_name',
                    'placeholder'   => 'FIRST NAME ...',
                    'required'      => true
                ],

                // second name
                [
                    'type'          => 'text',
                    'name'          => 'second_name',
                    'id'            => 'second_name',
                    'placeholder'   => 'SECOND NAME ...',
                    'required'      => true
                ],
                
                // email
                [
                    'type'          => 'email',
                    'name'          => 'email',
                    'id'            => 'email',
                    'placeholder'   => 'EMAIL ...',
                    'required'      => true
                ],
                
                // phone
                [
                    'type'          => 'tel',
                    'name'          => 'phone',
                    'id'            => 'phone',
                    'placeholder'   => 'PHONE NUMBER ...',
                    'required'      => true
                ],

            ],

            'title_2'  => 'PAYMENT DETAIL',
            'remark'   => <<< REMARK
            It`s not a real purchase, the form doesn`t do anything.
            any data entered will do!
            REMARK,
            'credit'   => true

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