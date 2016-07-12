<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/crm', [
     'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('/postlogin', [
    'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('/dashboard', function () {
    return view('cms/master');
});
