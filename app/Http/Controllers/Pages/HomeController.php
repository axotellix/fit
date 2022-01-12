<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use > models
use App\Models\Image;

class HomeController extends Controller
{

    public function index() {
        $gyms = Image::where('category', '=', 'Gym')->take(3)->get();
        $crew = Image::where('category', '=', 'Crew')->take(3)->get();

        return view('index', [
            'page' => 'home',
            'gyms' => $gyms,
            'crew' => $crew
        ]);
    }
}
