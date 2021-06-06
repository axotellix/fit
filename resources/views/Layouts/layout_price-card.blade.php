
<!-- [ price card ] -->
<div class="card-price">

    <div class="card-wrapper">
        <span class="h4 plan-title">
            {{ $plan_title ?? 'Plan title' }}
        </span>

        <span class="price">
            {{ $price ?? '$0 / mo' }}
        </span>

        <span class="plan-type">
            {{ $plan_type ?? 'Plan type' }}
        </span>
    </div>

    @if($show_cta ?? true)
        <a href="{{ $url ?? '' }}" class="CTA button"><span>GET A CARD</span></a>
    @endif
    
</div>