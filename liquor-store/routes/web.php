<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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


Route::prefix('/admin')->group(function (){
    Route::get('/home_admin',function (){return view('backend.core.home_admin');})->name('home_admin');
    Route::prefix('/users')->group(function (){
        Route::get('/',function (){return view('backend.core.master');})->name('admin');
        Route::get('/', [\App\Http\Controllers\UserController::class,'index'])->name('users.list');
        Route::get('/create',[\App\Http\Controllers\UserController::class,'create'])->name('users.create');
        Route::post('/create',[\App\Http\Controllers\UserController::class,'store'])->name('users.store');
        Route::get('/{id}/update',[\App\Http\Controllers\UserController::class,'edit'])->name('users.edit');
        Route::post('/{id}/update',[\App\Http\Controllers\UserController::class,'update'])->name('users.update');
        Route::post('/delete', [\App\Http\Controllers\UserController::class,'delete']);
    });

    Route::prefix('/products')->group(function (){
        Route::get('/',[ProductController::class,'index'])->name('products.list');
        Route::get('/create',[ProductController::class,'create'])->name('products.create');
        Route::post('/create',[ProductController::class,'store'])->name('products.store');
        Route::get('/{id}/update',[ProductController::class,'edit'])->name('products.edit');
        Route::post('/{id}/update',[ProductController::class,'update'])->name('update');
        Route::post('/delete',[ProductController::class,'delete']);
    });
    Route::prefix('/orders')->group(function (){
        Route::get('/',[\App\Http\Controllers\OrderController::class,'showOrder'])->name('orders.list');
        Route::get('/create',[\App\Http\Controllers\OrderController::class,'create'])->name('orders.create');
        Route::post('/create',[\App\Http\Controllers\OrderController::class,'store'])->name('orders.store');
    });

});



Route::get('/login',[\App\Http\Controllers\AuthController::class,'formLogin'])->name('login');
Route::post('login',[\App\Http\Controllers\AuthController::class,'login'])->name('user.login');
Route::get('logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('user.logout');
Route::get('register',[\App\Http\Controllers\AuthController::class,'formRegister'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class,'register']);
Route::get('/',[HomeController::class,'homePage'])->name('home');

Route::prefix('/home')->group(function (){
    Route::get('/',[HomeController::class,'homePage'])->name('home');
    Route::get('/products',[ProductController::class,'showProducts'])->name('show.products');
    Route::prefix('/cart')->group(function (){
        Route::get('/addToCart/{id}',[CartController::class,'addToCart'])->name('addToCart');
    });
    Route::prefix('/order')->group(function (){
        Route::get('/',[\App\Http\Controllers\OrderController::class,'showOrder'])->name('user.order');



    });
    Route::get('/deleteAll',[HomeController::class,'deleteAll'])->name('home.deleteAll');


    Route::get('/blog-single',[\App\Http\Controllers\BlogController::class,'blog'])->name('blog');
    Route::get('{id}/product-single',[\App\Http\Controllers\ProductSingleController::class,'productSingle'])->name('product-single');
});
