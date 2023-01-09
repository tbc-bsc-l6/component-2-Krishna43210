<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ProductController::class,'index'])->name('home');
Route::post('store', [ProductController::class, 'store'])->name('store');
//route for edit
Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::patch('update/{id}', [ProductController::class, 'update'])->name('update');
//route for delete
Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('delete');