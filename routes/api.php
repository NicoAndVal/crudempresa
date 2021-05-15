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

Route::get('/', function(){
    return view('empresas.index');
});

//Middleware para utilizar la autenticación de las rutas con jwt
Route::group(['middleware' =>['web']], function(){
    Route::get('empresas', 'EmpresaController@index')->name('empresas.index');
    Route::get('empresas/create', 'EmpresaController@create');
    Route::post('empresas', 'EmpresaController@store')->name('empresas.store');
    Route::get('empresas/{empresa}/edit','EmpresaController@edit')->name('empresa.edit');
    Route::put('empresa/{empresa}', 'EmpresaController@update')->name('empresa.update');
    Route::delete('empresa/{empresa}','EmpresaController@destroy')->name('empresa.destroy');
});
