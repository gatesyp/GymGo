<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// to handle user actions
Route::resource('userrequests', 'RequestController');

// to handle trainer actions i e register a trainer
Route::resource('traineroperations', 'TrainerController');


// to handle trainer preference operations
Route::resource('trainerpreference', 'TrainerPreferenceController');

//Route::resource('requests/{id}', 'RequestController');
//
//Route::resource('requests/{id}{google_id}', 'RequestController@create');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/reports', function () {
    return view('reports');
});

Route::get('/settings', function () {
    return view('settings');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
