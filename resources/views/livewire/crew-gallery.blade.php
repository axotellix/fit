
<div class = 'component'>

<!-- [ content ] -->
<h2>OUR CREW</h2>

<ul class = 'gallery gallery-small-vertical'>
    
    @foreach( $crew as $member )
        <li class="photo" 
            member-id = '{{ $member->trainer_id }}' 
            wire:click = "$emit('setCrew', {{ $member->trainer_id }})"
            onclick = 'window.scroll({top: 0, behavior: "smooth"});'
            caption = '{{ $member->image->caption }}'
        >
            <img src="{{ $member->image->url }}" alt="fit-crew">
        </li>
    @endforeach
    
</ul>
</div>