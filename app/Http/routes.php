<?php
use App\Issue;

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
Route::group(['middleware' => ['web']], function () {
    Route::resource('users', 'RequestController');

// to handle trainer actions i e register a trainer
    Route::resource('traineroperations', 'TrainerController');


// to handle trainer preference operations
    Route::resource('trainerpreference', 'TrainerPreferenceController');

// workouts
    Route::resource('workouts', 'WorkoutController');


// handles 'issues' operations
    Route::resource('issues', 'IssuesController');


//Route::resource('requests/{id}', 'RequestController');
//Route::resource('requests/{id}{google_id}', 'RequestController@create');

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

    // your routes here
    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('/reports', function () {
        return view('reports');
    });

    Route::get('/settings', function () {
        $users = \App\User::all();
        $exercises = \App\Workout::all();

        return view('settings', compact('users', 'exercises'));
    });
});
