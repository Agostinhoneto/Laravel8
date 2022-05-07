<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;


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


//Route::get('/jogos',[JogosController::class,'index']);

Route::prefix('jogos')->group(function(){
   Route::get('/',[JogosController::class,'index'])->name('jogos-index');
   Route::get('/create',[JogosController::class,'create'])->name('jogos-create');
   Route::post('/',[JogosController::class,'store'])->name('jogos-store');
   Route::get('/{id}/edit',[JogosController::class,'edit'])->where('id','[0-9]+')->name('jogos-edit');
   Route::put('/{id}',[JogosController::class,'update'])->where('id','[0-9]+')->name('jogos-update');
   Route::delete('/{id}',[JogosController::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});

Route::fallback(function(){
   return "Erro@";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
