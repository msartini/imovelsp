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


 

Route::get('/', 'WelcomeController@index') ;
 

Route::group(array('prefix' => 'imagens'), function () {
    
    Route::get('/criar', [ 'as' => 'images.criar', 'uses' => 'UploadImageController@create']);
    Route::post('/criar', [ 'as' => 'images.store', 'uses' => 'UploadImageController@store']);

});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
