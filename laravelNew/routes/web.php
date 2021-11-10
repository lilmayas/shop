<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admins\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\LocaleController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/admins/posts', [PostController::class, 'index'])->name('admin.posts');
Route::get('/admins/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admins/posts', [PostController::class, 'store'])->name('admin.posts.store');

//Route::resource('/admins/categories', [CategoryController::class]);
//Route::resource('admins/categories', \App\Http\Controllers\Admins\CategoryController::class);
// Route::get('/locale/{code}', [\App\Http\Controllers\LocaleController::class,'setLocale'])->name('locale');