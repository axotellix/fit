<?php

use Illuminate\Support\Facades\Route;


// [ PAGES ]
Route::namespace('Pages')->group(function () {

    // [ pages: general ]
    Route::get('/', 'HomeController@index');
    Route::get('/crew', 'CrewController@index');
    Route::get('/gallery', 'GalleryController@index');
    Route::get('/prices', 'PriceController@index');
    Route::get('/contacts', function () {
        return view('contacts', ['page' => 'contacts']);
    });

    // [ page: request card ]  
    Route::get('/request/{plan_id}', 'RequestController@index');
    Route::post('/request/{plan_id}', 'RequestController@store');

});


// [ AUTH ]
Route::namespace('Auth')->group(function () {

    Auth::routes();
    Route::get('/logout', 'LoginController@logout')->name('logout');

});


// [ LIVEWIRE ]
Route::namespace('Livewire')->group(function () {

    // [ admin panel: overview ]
    Route::get('/admin', function() { return redirect('/admin/crew'); })->middleware('auth')->name('admin');
    Route::get('/admin/crew', 'AdminCrew@render')->middleware('auth');
    Route::get('/admin/gallery', 'AdminGallery@render')->middleware('auth');
    Route::get('/admin/price', 'AdminPrice@render')->middleware('auth');
    Route::get('/admin/contacts', 'AdminContacts@render')->middleware('auth');

});


// [ ADMIN PANEL ]
Route::namespace('Admin')->group(function () {

    // [ edit crew: add (overview) ]
    Route::get('/admin/crew/add', 'Edit\EditCrewController@show')->middleware('auth');

    // [ edit crew: add (save) ]
    Route::post('/admin/crew/add', 'Edit\EditCrewController@add')->middleware('auth');

    // [ edit crew: edit member data (overview) ]
    Route::get('/admin/crew/edit/{crew_id}', 'Edit\EditCrewController@index')->middleware('auth');

    // [ edit crew: edit member data (save) ]
    Route::post('/admin/crew/edit/{crew_id}', 'Edit\EditCrewController@update')->middleware('auth');

    // [ edit crew: delete member ]
    Route::delete('/admin/crew/delete/{crew_id}', 'Edit\EditCrewController@destroy')->middleware('auth');

});