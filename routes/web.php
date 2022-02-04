<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
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

Route::get('/',HomeController::class)->name('home');
Route::get('libros',[LibroController::class,'index'])->name('libros.index');
Route::get('libros/create',[LibroController::class,'create'])->name('libros.create');
Route::post('libros/create',[LibroController::class,'store'])->name('libros.store');
Route::get('libros/{libro}',[LibroController::class,'show'])->name('libros.show');
Route::get('libros/{libro}/edit',[LibroController::class,'edit'])->name('libros.edit');
Route::put('libros/{libro}',[LibroController::class,'update'])->name('libros.update');
Route::delete('libros/{libro}',[LibroController::class,'destroy'])->name('libros.destroy');


