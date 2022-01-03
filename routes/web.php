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

Route::get('/', [\App\Http\Controllers\PaisController::class, 'index'])->name('home'); //show és una funció a dins el controlador

Route::get('/africa', [\App\Http\Controllers\PaisController::class, 'showC'])->name('Àfrica');
Route::get('/america', [\App\Http\Controllers\PaisController::class, 'showC'])->name('Amèrica');
Route::get('/asia', [\App\Http\Controllers\PaisController::class, 'showC'])->name('Àsia');
Route::get('/europa', [\App\Http\Controllers\PaisController::class, 'showC'])->name('Europa');
Route::get('/oceania', [\App\Http\Controllers\PaisController::class, 'showC'])->name('Oceania');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
