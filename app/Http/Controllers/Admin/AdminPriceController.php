<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

class AdminPriceController extends Controller
{
    public function index() {
        return view('admin.price');
    }
}
