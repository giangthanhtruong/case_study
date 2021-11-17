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
    return view('frontend.content');
})->name('frontend.content');
Route::get('/product',[\App\Http\Controllers\ProductController::class,"list"])->name('list-product');
Route::get('/admin',function (){return view('backend.core.master');})->name('admin');
Route::get('/admin/create',function (){return view('backend.products.create');})->name('admin');
Route::get('/admin/home_admin',function (){return view('backend.core.home_admin');})->name('home_admin');
Route::prefix('users')->group(function (){
    Route::get('/', [\App\Http\Controllers\UserController::class,'index'])->name('users.list');
    Route::get('/create',[\App\Http\Controllers\UserController::class,'create'])->name('users.create');
    Route::post('/create',[\App\Http\Controllers\UserController::class,'store'])->name('users.store');
    Route::get('/{id}/update',[\App\Http\Controllers\UserController::class,'edit'])->name('users.edit');
    Route::post('/{id}/update',[\App\Http\Controllers\UserController::class,'update'])->name('users.update');
    Route::post('/delete', [\App\Http\Controllers\UserController::class,'delete']);
});

Route::prefix('products')->group(function (){
    Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('products.list');
    Route::get('/create',[\App\Http\Controllers\ProductController::class,'create'])->name('products.create');
    Route::post('/create',[\App\Http\Controllers\ProductController::class,'store'])->name('products.store');
    Route::get('/{id}/update',[\App\Http\Controllers\ProductController::class,'edit'])->name('products.edit');
    Route::post('/{id}/update',[\App\Http\Controllers\ProductController::class,'update'])->name('update');
    Route::post('/delete',[\App\Http\Controllers\ProductController::class,'delete']);
});

