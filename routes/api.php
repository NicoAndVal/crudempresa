<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Rutas del crud
Route::group(['middleware' =>['web']], function(){
    //Muestra todas las empresas
    Route::get('empresas', 'EmpresaController@index')->name('empresas.index');
    //Muestra el formulario para guardar una empresa
    Route::get('empresas/create', 'EmpresaController@create')->name('empresas.create');
    //Guarda una empresa
    Route::post('empresas', 'EmpresaController@store')->name('empresas.store');
    //Muestra vista de la empresa que se quiere editar
    Route::get('empresas/{empresa}/edit','EmpresaController@edit')->name('empresa.edit');
    //Actualiza la empresa
    Route::put('empresa/{empresa}', 'EmpresaController@update')->name('empresa.update');
    //Elimina la empresa
    Route::delete('empresa/{empresa}','EmpresaController@destroy')->name('empresa.destroy');
});
