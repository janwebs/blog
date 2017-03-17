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

Route::get('/', function () {
    // forma de llamar a una vista que esta en resources/views/
    // return view('welcome');
    // forma de llamar a la vista index.blade.php en una subCarpeta en views/
    return view('welcome'); // se puede colocar barra (/) en lugar de punto (.)
});

////////////////////////////////////////////////////////////////////////////////
//                              grupo de rutas                                //
////////////////////////////////////////////////////////////////////////////////
//
// rutas de administracion
//
Route::group(['prefix' => 'admin'], function(){

	// rutas de autenticacion
	Route::get('auth/login', [
		'uses' 	=> 'Auth\AuthController@getLogin',
		'as'	=> 'admin.auth.login'
	]);
	Route::post('auth/login', [
		'uses' 	=> 'Auth\AuthController@postLogin',
		'as'	=> 'admin.auth.login'
	]);
	Route::get('auth/logout', [
		'uses' 	=> 'Auth\AuthController@getLogout',
		'as'	=> 'admin.auth.login'
	]);

	// resource recibe dos parametros, el modelo y el controlador a usar
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses' 	=> 'UsersController@destroy',
		'as'	=> 'admin.users.destroy'
	]);
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' 	=> 'CategoriesController@destroy',
		'as'	=> 'admin.categories.destroy'
	]);

});

////////////////////////////////////////////////////////////////////////
// ruta convencional
/*
Route::get('saludo',function(){
	echo "Hola";
});
*/

//ruta con parametros
/*Route::get('saludo_con_parametro/{nombre}',function($nombre){
	echo "Hola ".$nombre;
});
*/

//ruta con parametros opcional
/*
Route::get('saludo_con_parametro_opcional/{nombre?}',function($nombre = "persona desconocida"){
	echo "Hola ".$nombre;
});
*/

//ruta con nombre personalizado, que llama a un metodo de un controlador
/*
Route::get('saludo',[
	'as' 	=> 'saludos',
	'uses' 	=> 'UserControler@index'
]);
*/

//grupo de rutas
/*
Route::group(['prefix' => 'articles'], function(){
	Route::get('view/{article?}', function($article = "desconocido"){
		echo "articulo: ".$article;
	});
});
*/
//grupo de rutas
/*
Route::group(['prefix' => 'articles'], function(){
	Route::get('viewArticle/{id}', [
		'uses'	=> 'ArticleController@viewArticle',
		'as'	=> 'viewArticle'
	]);
});
*/
////////////////////////////////////////////////////////////////////////