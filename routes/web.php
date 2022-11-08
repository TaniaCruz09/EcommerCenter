<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaTiendaController;
use App\Http\Controllers\CategoriaProductoController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::resource('categorias', CategoriaTiendaController::class);
Route::resource('categorias-productos', CategoriaProductoController::class);
Route::resource('user', UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
