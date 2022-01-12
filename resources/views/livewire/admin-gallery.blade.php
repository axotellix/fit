
@extends('Layouts.admin.layout_admin')


@section('content')

<!-- [ section heading ] -->
<h3 class = 'mb-50'>GALLERY</h3>
    
<!-- [ content ] -->
<ul class = 'gallery-wide-horizontal'  data-slider = 'gallery'>
    @foreach( $gyms as $gym )
        <li class="photo">
            <img src="{{ $gym->url }}" alt="fit gym">
        </li>
    @endforeach
</ul>

@if( session()->has('edit-status') )
    <p class="system-message">{{ session('edit-status') }}</p>
@endif

@endsection