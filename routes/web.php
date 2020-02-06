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

    Auth::routes();
    Route::get('/landing', 'TimeTrackerController@landing');
    Route::get('/landing2', 'TimeTrackerController@getUser');
    Route::post('/timeIn','TimerController@timeIn');
    //Route::get('/home', 'TimeTrackerController@landing');
    // Route::get('/exam', 'TimeTrackerController@index');
    // Route::post('/exam', 'TimeTrackerController@store');
    // Route::post('/projects/{id}/timers/stop', 'TimerController@stopRunning');
    // Route::post('/projects/{id}/timers', 'TimerController@store');
    // Route::get('/project/timers/active', 'TimerController@running');