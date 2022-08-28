<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// admin
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/', [App\Http\Controllers\PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/create', [App\Http\Controllers\PesertaController::class, 'createPeserta'])->name('peserta.create');
    Route::post('/store', [App\Http\Controllers\PesertaController::class, 'store'])->name('peserta.store');
    Route::get('/peserta/{id}', [App\Http\Controllers\PesertaController::class, 'show'])->name('peserta.show');
    Route::get('/peserta/edit/{id}', [App\Http\Controllers\PesertaController::class, 'edit'])->name('peserta.edit');
    Route::post('/peserta/update/{id}', [App\Http\Controllers\PesertaController::class, 'update'])->name('peserta.update');
    Route::delete('/peserta/delete/{id}', [App\Http\Controllers\PesertaController::class, 'delete'])->name('peserta.delete');

});

// already login


// not yet login
Route::get('/', function () {
    return view('home');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

