<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// index - login form
Route::get('/', array('before' => 'guest', 'uses' => 'HomeController@showLogin'));

// login action
Route::post('login', array('before' => 'guest', 'uses' => 'HomeController@login'));

// logout action
Route::get('logout', array('before' => 'auth', 'uses' => 'HomeController@logout'));

// page displayed upon login
Route::get('passwords', array('before' => 'auth', 'uses' => 'HomeController@listPasswords'));

// resource for record controller - create, edit etc.
Route::group(array('before' => 'auth'), function() {
    Route::resource('record', 'RecordController'); 
});