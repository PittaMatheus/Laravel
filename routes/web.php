<?php
use App\Http\Controllers\ContatoController;

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

Route::get('/', ['as'=> 'site.home', 'uses' =>'Site\HomeController@index']);



Route::get('/contato/{id?}',['uses'=> 'ContatoController@index']);
Route::post('/contato', ['uses'=> 'ContatoController@criar']);
Route::put('/contato', ['uses'=> 'ContatoController@editar']);
Route::get('/admin/cursos', ['as'=> 'admin.cursos', 'uses' =>'Admin\CursoController@index']);
Route::get('/admin/adicionar', ['as'=> 'admin.cursos.adicionar', 'uses' =>'Admin\CursoController@adicionar']);
Route::post('/admin/salvar', ['as'=> 'admin.cursos.salvar', 'uses' =>'Admin\CursoController@salvar']);
Route::get('/admin/editar/{id}', ['as'=> 'admin.cursos.editar', 'uses' =>'Admin\CursoController@editar']);
Route::put('/admin/atualizar/{id}', ['as'=> 'admin.cursos.atualizar', 'uses' =>'Admin\CursoController@atualizar']);
Route::get('/admin/deletar/{id}', ['as'=> 'admin.cursos.deletar', 'uses' =>'Admin\CursoController@deletar']);






