
@extends('Layouts.admin.layout_admin')


@section('content')

<!-- [ section heading ] -->
<h3 class = 'mb-50'>CREW</h3>

<!-- [button: add member ] -->
<a href="/admin/crew/add" class="button mb-20"><span>+ ADD MEMBER</span></a>

<!-- [ content ] -->
<ul class = 'gallery gallery-small-vertical'>

    @foreach( $crew as $member )
        <a href="/admin/crew/edit/{{$member->trainer_id}}">
            <li class="photo" caption = '{{ $member->image->caption }}'>
                <img src="{{ $member->image->url }}" alt="fit-crew">
            </li>
        </a>
    @endforeach

        
</ul>

@if( session()->has('edit-status') )
    <p class="system-message">{{ session('edit-status') }}</p>
@endif

@endsection



