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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::group(array('prefix' => 'imagens'), function () {

    Route::get('/criar', [ 'as' => 'images.criar', 'uses' => 'UploadImageController@create']);
    Route::post('/criar', [ 'as' => 'images.store', 'uses' => 'UploadImageController@store']);

});


Route::group(array('prefix' => 'fornecedor'), function () {
    Route::get('/cadastro', [ 'as' => 'fornecedor.cadastro', 'uses' => 'FornecedorController@index']);
    Route::get('/', [ 'as' => 'fornecedor.show', 'uses' => 'FornecedorController@show']);
    Route::post('/', [ 'as' => 'fornecedor.store', 'uses' => 'FornecedorController@store']);
});



Route::group(array('prefix' => 'arquivos'), function () {
    Route::get('/', [ 'as' => 'media.index', 'uses' => 'MediaController@index']);
    Route::get('/{mediaId}', [ 'as' => 'media.show', 'uses' => 'MediaController@show']);
});


/*
 * @route admin
 */
Route::group(array('prefix' => 'admin'), function () {
    Route::group(array('prefix' => 'imoveis'), function () {
        Route::get('/criar', [ 'as' => 'estate.criar', 'uses' => 'EstateController@create']);
        Route::get('/', [ 'as' => 'state.index', 'uses' => 'EstateController@index']);
        Route::get('/{estateId}', ['as' => 'state.show', 'uses' => 'EstateController@show']);
        Route::post('/salvar', [ 'as' => 'admin.estate.store', 'uses' => 'EstateController@store']);
    });
});


Route::group(array('prefix' => 'file'), function () {
    Route:get('/', [ 'as' => 'files.list', 'uses' => 'FileController@index']);
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
