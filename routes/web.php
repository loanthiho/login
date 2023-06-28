<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('trangchu', [PageController::class, 'getIndex']);

Route::get('loaisanpham/{type}', [PageController::class, 'getLoaiSP']);

Route::get('chitietsanpham', [PageController::class, 'getDetail']);

Route::get('lienhe', [PageController::class, 'getContact']);

Route::get('gioithieu', [PageController::class, 'getAbout']);

// admin 

Route::get('admin', [AdminController::class, 'getIndexAdmin']);

Route::get('/admin-add-form', [AdminController::class, 'getAdminAdd'])->name('add-product');

Route::post('/admin-add-form', [AdminController::class, 'postAdminAdd']);

Route::get('/admin-edit-form/{id}', [AdminController::class, 'getAdminEdit']);

Route::post('/admin-edit', [AdminController::class, 'postAdminEdit']);

Route::post('/admin-delete/{id}', [AdminController::class, 'postAdminDelete']);

Route::get('/admin-export', [AdminController::class, 'exportAdminProduct'])->name('export');

//Đăng Ký//Đăng NhậpF
Route::get('/login', function () {
    return view('users.login');
});
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', function () {
    return view('users.register');
});
Route::post('/register', [UserController::class, 'Register']);

///CART
Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');

//-------------------------------------CHECKOUT----------------------------------------------------//
Route::get('check-out', [PageController::class, 'getCheckout'])->name('dathang');
Route::post('check-out', [PageController::class, 'postCheckout'])->name('dathang');



//-------------------------------------WISHLIST----------------------------------------------------//
Route::get('/wishlist/add/{id}', [PageController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist/remove/{id}', [PageController::class, 'removeFromWishlist'])->name('wishlist.remove');