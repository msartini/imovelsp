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

/* Usuário enviou os dados para serem salvos no banco */
Route::post('fornecedor', 'FornecedorController@store') ;
Route::get('fornecedor', 'FornecedorController@show') ;



Route::get('arquivos', 'MediaController@index') ;




//Rota para Media Controller
//Route::resource('media', 'MediaController', ['only' => ['index', 'show']]);









Route::get('perfil-2', 'ProfileController@perfil');

// Route::get('perfil-2', function(){
//     return View::make('profileclone')->render();
// });
  

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
