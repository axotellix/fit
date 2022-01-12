<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CrewController extends Controller
{
    public function index() {
        return view('crew', ['page' => 'crew']);
    }
}
