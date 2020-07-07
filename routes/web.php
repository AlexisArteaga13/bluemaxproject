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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', 'IndexController@index')->name('index');

Auth::routes();


// RUTAS PARA LA EMPRESA
Route::get('/admin/empresa', 'EmpresaController@index')->name('empresa');
Route::put('/admin/empresa', 'EmpresaController@update')->name('empresa.update');
// RUTAS PARA LOS USUARIOS
Route::get('/admin/usuarios', 'UsuariosController@index')->name('usuarios');
Route::put('/admin/usuarios/update', 'UsuariosController@update')->name('usuarios.update');
Route::delete('/admin/usuarios/delete/{id?}', 'UsuariosController@destroy')->name('usuario.delete');
Route::post('/admin/usuarios/crear', 'UsuariosController@store')->name('usuarios.store');
// *************************** //