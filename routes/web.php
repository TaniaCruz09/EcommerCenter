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
Route:: view ('/', 'login' )-> name('login');

Route:: view ('/', 'Tienda.index' )-> name('index');

Route::get('/', function () {
    return view('homeTania');
});

Auth::routes();

Route::get('homeTani');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
