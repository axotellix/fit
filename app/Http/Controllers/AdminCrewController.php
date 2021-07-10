<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCrewController extends Controller
{
    public function index() {
        return view('admin.crew');
    }
}
