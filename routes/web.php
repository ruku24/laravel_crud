<?php

use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductsController::class, 'index'])->name('home');
Route::get('/addProduct', [ProductsController::class, 'addProduct'])->name('addProduct');
Route::post('/store', [ProductsController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit');

Route::get('/delete/{id}', [ProductsController::class, 'delete'])->name('delete');

Route::post('/update/{id}', [ProductsController::class, 'update'])->name('update');
Route::get(('/status/{id}'), [ProductsController::class, 'status'])->name('status');
