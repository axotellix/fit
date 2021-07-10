<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;

// use > models
use App\Models\Price;
use App\Models\User;

class RequestController extends Controller
{
    // show > request page
    public function index( $plan_id ) {
        $price_card = Price::findOrFail( $plan_id );

        return view('request', [
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

        // redirect > to member plan select page & show success message
        return redirect('prices')->with('purchase-status', 'Thanks for joining us!');    

    } 
}
