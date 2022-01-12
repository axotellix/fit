<?php

use Illuminate\Support\Facades\Route;

Route::get('assets/{filename}', function ($filename){
    $path =  'public/'.$filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/', 'Controllers\HomeController@index');
Route::get('/crew', 'Controllers\CrewController@index');
Route::get('/gallery', 'Controllers\GalleryController@index');
Route::get('/prices', 'Controllers\PriceController@index');
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/request/{plan_id}', 'Controllers\RequestController@index');
Route::post('/request/{plan_id}', 'Controllers\RequestController@store');

// [ auth ]
Auth::routes();
Route::post('/logout', 'Controllers\Auth\LoginController@logout')->name('logout');

// [ admin panel: overview ]
Route::get('/admin', function() { return redirect('/admin/crew'); })->name('admin');
Route::get('/admin/crew', 'Livewire\AdminCrew');
Route::get('/admin/gallery', 'Livewire\AdminGallery');
Route::get('/admin/price', 'Livewire\AdminPrice');
Route::get('/admin/contacts', 'Livewire\AdminContacts');

// [ admin panel: add ]
Route::get('/admin/crew/add', 'Controllers\Edit\EditCrewController@show');
Route::get('/admin/crew/add', 'Controllers\Edit\EditCrewController@show');
Route::get('/admin/crew/add', 'Controllers\Edit\EditCrewController@show');
Route::get('/admin/crew/add', 'Controllers\Edit\EditCrewController@show');

// [ admin panel: add ]
Route::post('/admin/crew/add', 'Controllers\Edit\EditCrewController@add');
Route::post('/admin/crew/add', 'Controllers\Edit\EditCrewController@add');
Route::post('/admin/crew/add', 'Controllers\Edit\EditCrewController@add');
Route::post('/admin/crew/add', 'Controllers\Edit\EditCrewController@add');

// [ admin panel: edit (overview) ]
Route::get('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@index');
Route::get('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@index');
Route::get('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@index');
Route::get('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@index');

// [ admin panel: edit (save changes) ]
Route::post('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@update');
Route::post('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@update');
Route::post('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@update');
Route::post('/admin/crew/edit/{crew_id}', 'Controllers\Edit\EditCrewController@update');

// [ admin panel: delete ]
Route::delete('/admin/crew/delete/{crew_id}', 'Controllers\Edit\EditCrewController@destroy');
Route::delete('/admin/crew/delete/{crew_id}', 'Controllers\Edit\EditCrewController@destroy');
Route::delete('/admin/crew/delete/{crew_id}', 'Controllers\Edit\EditCrewController@destroy');
Route::delete('/admin/crew/delete/{crew_id}', 'Controllers\Edit\EditCrewController@destroy');