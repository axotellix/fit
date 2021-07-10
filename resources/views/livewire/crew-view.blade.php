
<div id = 'crew' class="wrapper">
    
{{-- crew description --}}
<div class="crew-info">
            
    <svg class="logo">
        <use xlink:href="/img/sprites.svg#logo"></use>
    </svg>

    <section>
        <p>
            <span class = 'crew-name'>{{ $crew->first_name}} {{ $crew->second_name }}</span>
            <span class = 'crew-age'>{{ $crew->age }} years old</span>

            {{ $crew->description }}
        </p>
    </section>
</div>

{{-- crew photo --}}
<div class="crew-photo">
    <img src="{{ $img->url }}" alt="{{ $img->caption }}">
</div>

</div>
