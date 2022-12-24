<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

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

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/master/anggota-index', 'AnggotaController@index')->name('anggota-index.index');
Route::get('master/anggota-index', 'App\Http\Controllers\AnggotaController@index');
Route::resource('anggota', AnggotaController::class)->parameters(['anggota' => 'anggota']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
