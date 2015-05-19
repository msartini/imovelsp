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

Route::get('profile', 'ProfileController@index') ;

Route::get('perfil', 'ProfileController@perfil') ;

Route::get('home', 'HomeController@index') ;

Route::get('produtos', 'ProdutoController@index') ;

Route::get('listagemImoveis', 'HomeController@listagemImoveis') ;

Route::get('usuario', 'UsuarioController@index') ;

Route::get('fornecedor/cadastro', 'FornecedorController@index') ;

Route::post('fornecedor', 'FornecedorController@store') ;

Route::get('fornecedor', 'FornecedorController@show') ;

Route::get('arquivos', 'MediaController@index') ;

Route::get('perfil-2', 'ProfileController@perfil');


Route::get('logoutservice', function () {
    if (Auth::check()) {
        Auth::logout();
        //Session::flush();  
    }
    return '[{"disconected": "ok"}]';
});


Route::get('admin', 'FornecedorController@index');

//Route::get('admin', ['middleware' => 'auth.basic', 'uses' => 'FornecedorController@index']);

// Route::get('admin', array('middleware' => 'auth.basic', function () {
//     if (Auth::check()) {
//         //return "Hello Admin!";
//     } else {
//         //return view('auth/login');
//     }
// }));

//Route::get('admin', ['middleware' => 'auth.basic', 'as' => 'paineladmin', 'uses' => 'FornecedorController@index', function () {
//}]);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
