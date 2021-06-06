<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/crew', function () {
    return view('crew');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/prices', function () {
    return view('prices');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/request', function () {
    return view('request');
});
