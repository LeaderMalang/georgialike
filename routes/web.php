<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () { return view('welcome'); });

Route::group([], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-us',[HomeController::class, 'aboutUs'])->name('about');
    Route::get('/checkout',[HomeController::class, 'checkout'])->name('checkout');
    Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
});

Auth::routes();

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('admin/tours', [AdminController::class, 'tours'])->name('admin.tours')->middleware('is_admin');
Route::get('user/dashboard', [UserController::class, 'index'])->name('user.home')->middleware('is_user');

