<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class, 'index'])->name('home');

Route::get('/shop',[ProductsController::class, 'index'])->name('shop');
Route::get('/shop/{id}',[ProductsController::class, 'show'])->name('product');

Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::get('/add-to-cart/{id}',[CartController::class,'add_to_cart'])->name('add.to.cart');
Route::get('/delete-from-cart/{id}',[CartController::class,'delete_from_cart'])->name('delete.from.cart');
Route::put('/update-from-cart/{id}', [CartController::class,'update'])->name('update.from.cart');