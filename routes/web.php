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

Route::get('/{id}', [\App\Http\Controllers\CiutatController::class, 'index'])->name('detall');
Route::get('/{pais_id}/{id}', [\App\Http\Controllers\CiutatPlatController::class, 'index'])->name('ciutatplat');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
