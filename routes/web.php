<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[ProductsController::class,'index']);

Route::get('/product/{id}',[ProductsController::class,'show']);

Route::get('/sell',function(){
  return view('sell');
})->middleware('auth');

Route::post('/product',[ProductsController::class,'store']);

require __DIR__.'/auth.php';
