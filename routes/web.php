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

Route::get('/home', 'HomeController@index')->name('home');
// RUTAS PARA LA EMPRESA
Route::get('/admin/empresa', 'EmpresaController@index')->name('empresa');
Route::put('/admin/empresa', 'EmpresaController@update')->name('empresa.update');
// RUTAS PARA LOS USUARIOS
Route::get('/admin/usuarios', 'UsuariosController@index')->name('usuarios');
Route::put('/admin/usuarios/update', 'UsuariosController@update')->name('usuarios.update');
Route::delete('/admin/usuarios/delete/{id?}', 'UsuariosController@destroy')->name('usuario.delete');
Route::post('/admin/usuarios/crear', 'UsuariosController@store')->name('usuarios.store');
// *************************** //
// AJAX DE FORMULARIO
Route::post('/ajaxcorreo','IndexController@correo')->name('correo');
// AJAX PARA PRODUCTOS
Route::get('/ajaxproductos','IndexController@productos')->name('ajaxprod');
// RUTAS PARA EL ENCABEZAADO
Route::get('/admin/encabezados','SeccionEncabezadoController@index')->name('encabezados');
Route::put('/admin/encabezados/update','SeccionEncabezadoController@update')->name('encabezados.update');
Route::delete('/admin/encabezados/delete/{id?}','SeccionEncabezadoController@destroy')->name('encabezados.delete');
Route::post('/admin/encabezados/crear','SeccionEncabezadoController@store')->name('encabezados.store');
//RUTAS PARA SECCIÓN NOSOTROS
Route::get('/admin/nosotros','SeccionNosotrosController@index')->name('nosotros');
Route::put('/admin/nosotros/update','SeccionNosotrosController@update')->name('nosotros.update');
Route::delete('/admin/nosotros/delete/{id?}','SeccionNosotrosController@destroy')->name('nosotros.delete');
Route::post('/admin/nosotros/crear','SeccionNosotrosController@store')->name('nosotros.store');
//RUTAS PARA SECCIÓN SERVICIOS
Route::get('/admin/servicios','SeccionServiciosController@index')->name('servicios');
Route::put('/admin/servicios/update','SeccionServiciosController@update')->name('servicios.update');
Route::delete('/admin/servicios/delete/{id?}','SeccionServiciosController@destroy')->name('servicios.delete');
Route::post('/admin/servicios/crear','SeccionServiciosController@store')->name('servicios.store');
// RUTAS PARA CATEGORIAS
Route::get('/admin/categorias','CategoriaController@index')->name('categorias');
Route::put('/admin/categorias/update','CategoriaController@update')->name('categorias.update');
Route::delete('/admin/categorias/delete/{id?}','CategoriaController@destroy')->name('categorias.delete');
Route::post('/admin/categorias/crear','CategoriaController@store')->name('categorias.store');
// RUTAS PARA PRODUCTOS
Route::get('/admin/productos','ProductosController@index')->name('productos');
Route::put('/admin/productos/update','ProductosController@update')->name('productos.update');
Route::delete('/admin/productos/delete/{id?}','ProductosController@destroy')->name('productos.delete');
Route::post('/admin/productos/crear','ProductosController@store')->name('productos.store');
