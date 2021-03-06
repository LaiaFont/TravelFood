<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});*/

Route::get('/', [\App\Http\Controllers\PaisController::class, 'index'])->name('home'); //index és una funció a dins el controlador
Route::get('/lang/{idioma}', 'App\Http\Controllers\LocalitzacioController@index');

Route::get('/pais/{pais_id}', [\App\Http\Controllers\CiutatController::class, 'index'])->name('detall');
Route::get('/detall/{pais_id}/{ciutat_id}', [\App\Http\Controllers\CiutatController::class, 'showP'])->name('ciutatplat');
Route::get('/plat/{ciutat_nom}/{plat_id}', [\App\Http\Controllers\PlatController::class, 'index'])->name('plat');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
