<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// use > models
use App\Models\Price;


class PriceController extends Controller
{
    public function index() {
        $price_cards = Price::all();

        return view('prices', [
            'price_cards' => $price_cards,
        ]);
    }
}
