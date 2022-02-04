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

Route::get('pro', function () {
    return view('user/productDetail');
});




Route::get('/', function () {
    return redirect()->action([\App\Http\Controllers\HomeController::class, 'index']);
});

Auth::routes();

Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [\App\Http\Controllers\UsersController::class, 'index'])->name('user.index');

// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::resource('users', \App\Http\Controllers\UsersController::class);

Route::get('front', [\App\Http\Controllers\FrontController::class, 'index'])->name('front');



Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('cart', [App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ProductController::class, 'remove'])->name('remove.from.cart');
