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

/*
  **ASSIGNMENT**
  Task 1: Add the appropiate URI to the function Route::get() below
  Task 2: Pass the name of the view you want to load to the function view()
*/
Route::get('',function(){
  return view('');
});

require __DIR__.'/auth.php';
