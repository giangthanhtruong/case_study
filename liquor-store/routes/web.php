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
