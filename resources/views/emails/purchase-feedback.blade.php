
<!-- [ body ] -->
@component('mail::message')
Hi,  **{{ $user->name }}**,  
Thanks for choosing FIT fitness center!

Your membership card has been successfully purchased.    
  
------\
Please, check the details:
 - **Card plan name:** {{ $user->plan[0] }}
 - **Card plan type:** {{ $user->type[0] }}
 - **Price:** ${{ $user->price[0] }} / {{ $user->period[0] }}
  

<!-- [ buttons ] -->
@component('mail::button', ['url' => $details_link])
show details
@endcomponent
@component('mail::button', ['url' => $reject_link])
cancel purchase
@endcomponent


<!-- [ team sign ] -->
Stay fit!  
with FIT team.
@endcomponent