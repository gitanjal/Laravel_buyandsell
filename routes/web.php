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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/products',function(){
  return view('products');
});

Route::get('/product/{id}',function(){
  return view('product');
});

Route::get('/sell',function(){
  return view('sell');
});

Route::post('/product',[ProductsController::class,'store']);

require __DIR__.'/auth.php';
