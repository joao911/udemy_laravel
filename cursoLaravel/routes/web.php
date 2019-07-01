<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contato', 'contatoController@index');
Route::post('/contato',['uses'=>'contatoController@criar']);
Route::put('/contato', ['uses'=>'contatoController@editar']);
Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'cursoController@index']);
Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adcionar','uses'=>'Admin\cursoControler@adicionar']);
Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\cursoControler@salvar']);
Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\cursoControler@editar']);
Route::get('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\cursoControler@atualizar']);
Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\cursoControler@deletar']);