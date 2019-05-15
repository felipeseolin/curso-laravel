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


Route::resource('/painel/produtos', 'Painel\ProdutoController');

//Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Site'], function () {
	//	Route::get('/categoria/{id}', 'SiteController@categoria')->middleware('auth');
	Route::get('/categoria/{id}', 'SiteController@categoria')->middleware('auth');
	Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
});

Route::get('/contato', 'Site\SiteController@contato');
Route::get('/', 'Site\SiteController@index');

/*
 *
 * Rotas de Teste
 *
Route::group(['prefix' => 'painel/testes', 'middleware' => 'auth'], function() {
	Route::get('grupo1', function() {
		return "Grupo 1";
	});
	Route::get('grupo2', function() {
		return "Grupo 2";
	});
	Route::get('/financeiro', function() {
		return "Financeiro";
	});
	Route::get('/', function() {
		return "Default";
	});
});

Route::get('/categoria2/{idCat?}', function($idCat = 'default') {
	return "Posts da categoria2 - {$idCat}";
});

Route::get('/categoria/{idCat}/nome-fixo/{prm2}', function($idCat, $prm2) {
	return "Posts da categoria {$idCat} - {$prm2}";
});

Route::get('/nome/nome2/nome3', function () {
	return 'Rota grande';
})->name('rota.nomeada');

Route::any('/any', function () {
	return 'Route any';
});

Route::match(['get', 'post'], '/match', function () {
	return 'Route match';
});

Route::post('/post', function (){
	return 'Route Post';
});

Route::get('/contato', function (){
	return 'Contato';
});

Route::get('/empresa', function () {
	return view('empresa');
});
*/
