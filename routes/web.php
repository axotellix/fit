<?php

use Illuminate\Support\Facades\Route;


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

// [ auth ]
Auth::routes();
Route::post('/logout', 'Controllers\Auth\LoginController@logout')->name('logout');

// [ admin panel ]
Route::get('/admin', function() { return redirect('/admin/crew'); })->name('admin');
Route::get('/admin/crew', 'Livewire\AdminCrew');
Route::get('/admin/gallery', 'Livewire\AdminGallery');
Route::get('/admin/price', 'Livewire\AdminPrice');
Route::get('/admin/contacts', 'Livewire\AdminContacts');