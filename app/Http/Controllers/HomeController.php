<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// use > models
use App\Models\Image;

class HomeController extends Controller
{
    public function index() {
        $gyms = Image::where('category', '=', 'Gym')->take(3)->get();
        $crew = Image::where('category', '=', 'Crew')->take(3)->get();

        return view('index', [
            'gyms' => $gyms,
            'crew' => $crew
        ]);
    }
}
