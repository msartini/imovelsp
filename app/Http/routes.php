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

Route::get('/posts', 'PostController@index');

Route::get('/usuarios', 'UsuarioController@index');


Route::get('/arquivos', 'MediaController@index');

Route::group(array('prefix' => 'imagens'), function () {
    
    Route::get('/criar', [ 'as' => 'images.criar', 'uses' => 'UploadImageController@create']);
    Route::post('/criar', [ 'as' => 'images.store', 'uses' => 'UploadImageController@store']);

});


Route::group(array('prefix' => 'fornecedor'), function () {
    Route::get('/cadastro', [ 'as' => 'fornecedor.cadastro', 'uses' => 'FornecedorController@index']);
    Route::get('/', [ 'as' => 'fornecedor.show', 'uses' => 'FornecedorController@show']);
});


Route::group(array('prefix' => 'file'), function () {
    Route:get('/', [ 'as' => 'files.list', 'uses' => 'FileController@index']);
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
