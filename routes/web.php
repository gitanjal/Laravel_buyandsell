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


/*
**ASSIGNMENT**
**Task 1: We shall load the form to post an ad for a product on clicking the 'sell' button,
          Or on entering the url www.bns.go/sell on the browser's addressbar.
          But currently it is getting loaded as the home page!
          Fix this by passing the correct URI to the first parameter of the function below?
          **
*/
Route::get('/',function(){
  return view('sell');
});

require __DIR__.'/auth.php';
