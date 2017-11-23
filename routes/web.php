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

Route::get('/', function () {
    return view('welcome');
});
   
Route::prefix('admin')->name('admin.')->group(function () {
    //perfiles de usuario
    Route::resource('perfiles','PerfilesController');
    
    //usuarios de sistema
    Route::get('usuarios/buscar', 'UsuariosController@buscar')->name('usuarios.buscar');
    Route::resource('usuarios','UsuariosController');    
    
    //modulos
    Route::get('modulos/comprobar', 'ModulosController@comprobar')->name('modulos.comprobar');
    Route::get('modulos/empresa/{empresa}', 'ModulosEmpresaController@listar')->name('modulos.listar');
    Route::post('modulos/asociar', 'ModulosEmpresaController@asociar')->name('modulos.asociar');
    Route::post('modulos/desasociar', 'ModulosEmpresaController@desasociar')->name('modulos.desasociar');
    Route::post('modulos/actualizar', 'ModulosEmpresaController@desasociar')->name('modulos.actualizar');
    
    Route::get('empresas/{empresa}/modulos', 'EmpresasController@modulos')->name('empresas.modulos');
    
    //empresas
    Route::get('empresas/{empresa}/usuarios/{accion?}', 'EmpresasController@usuarios')->name('empresas.usuarios');
    Route::post('empresas/{empresa}/usuario/{usuario}/{accion}', 'EmpresasController@admUsuarios')->name('empresas.usuarios'); //debiese ser un controlador usuarioEmpresa
    Route::resource('empresas','EmpresasController');
        
});


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

