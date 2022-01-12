<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use > models
use App\Models\Image;

class GalleryController extends Controller
{
    public function index() {
        $gyms = Image::where('category', '=', 'Gym')->get();

        return view('gallery', [
            'page' => 'gallery',
            'gyms' => $gyms,
        ]);
    }
}
