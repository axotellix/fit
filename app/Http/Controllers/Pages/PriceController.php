<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use > models
use App\Models\Price;


class PriceController extends Controller
{
    public function index() {
        $price_cards = Price::all();

        return view('prices', [
            'page' => 'prices',
            'price_cards' => $price_cards,
        ]);
    }
}
