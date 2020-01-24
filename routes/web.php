<?php

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

// Route::get('/events/{id}', function ($id) {
//     return view('welcome', 'EventController@index');
// });

Route::get('/events/{id}/delete', 'EventController@delete');

Route::resources([
    'events' => 'EventController',
]);

