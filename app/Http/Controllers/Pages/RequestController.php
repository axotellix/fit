<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\PurchaseFeedback;
use Illuminate\Support\Facades\Mail;


// use > models
use App\Models\Price;
use App\Models\User;
use App\Models\CardPlan;

class RequestController extends Controller
{
    // show > request page
    public function index( $plan_id ) {
        $price_card = Price::findOrFail( $plan_id );

        return view('request', [
            'page' => 'request',
            'price_card' => $price_card,
        ]);
    }

    // save > data to DB
    public function store() {

        // create > new instance of User Model
        $user = new User();     

        // get > data
        $user->first_name  = request('first_name');
        $user->second_name = request('second_name');
        $user->email       = request('email');
        $user->phone       = request('phone');
        $user->plan_id     = request('plan_id');

        // save > data to DB
        $user->save();

        // prepare > user info (for email)
        $user_info = (object) [
            'name'   => $user->first_name,
            'plan'   => CardPlan::where( 'plan_id', '=', $user->plan_id )->pluck('title'),
            'type'   => CardPlan::where( 'plan_id', '=', $user->plan_id )->pluck('type'),
            'price'  => Price::where( 'plan_id', '=', $user->plan_id )->pluck('price'),
            'period' => Price::where( 'plan_id', '=', $user->plan_id )->pluck('period')
        ];

        Mail::to( $user->email )->send(new PurchaseFeedback( $user_info ));

        // redirect > to member plan select page & show success message
        return redirect('prices')->with('purchase-status', 'Thanks for joining us!');    

    } 
}
