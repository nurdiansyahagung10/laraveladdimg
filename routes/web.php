<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/form',[ProdukController::class,'formimg'])->name('formimg');
Route::get('/',[ProdukController::class,'index'])->name('index');
Route::post('/add-image',[ProdukController::class,'addimg'])->name('addimg');
Route::get('/laravel', function () {
    return view('welcome');
});
