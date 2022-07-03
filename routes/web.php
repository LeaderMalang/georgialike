<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourCategoryController;
use App\Http\Controllers\TourDayController;
use App\Http\Controllers\TourDetailController;
use App\Http\Controllers\HotelCategoryController;
use App\Http\Controllers\HotelController;

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
    Route::get('/checkout/{tourid}',[HomeController::class, 'checkout'])->name('checkout');
    Route::post('/booking',[HomeController::class, 'SaveBooking'])->name('SaveBooking');

    Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
});

Auth::routes();

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('admin/tours', [AdminController::class, 'tours'])->name('admin.tours')->middleware('is_admin');
Route::get('user/dashboard', [UserController::class, 'index'])->name('user.home')->middleware('is_user');
Route::get('admin/tour/category', [TourCategoryController::class, 'index'])->name('admin.tours.category')->middleware('is_admin');
Route::post('admin/tour/category/store', [TourCategoryController::class, 'store'])->name('admin.tours.category.store')->middleware('is_admin');
Route::get('admin/tour/category/destroy/{id}', [TourCategoryController::class, 'destroy'])->name('admin.tours.category.destroy')->middleware('is_admin');

Route::get('admin/tour/detail', [TourDetailController::class, 'index'])->name('admin.tours.detail')->middleware('is_admin');
Route::post('admin/tour/detail/store', [TourDetailController::class, 'store'])->name('admin.tours.detail.store')->middleware('is_admin');
Route::get('admin/tour/detail/destroy/{id}', [TourDetailController::class, 'destroy'])->name('admin.tours.detail.destroy')->middleware('is_admin');


Route::get('admin/tour/day', [TourDayController::class, 'index'])->name('admin.tours.day')->middleware('is_admin');
Route::post('admin/tour/day/store', [TourDayController::class, 'store'])->name('admin.tours.day.store')->middleware('is_admin');


Route::get('admin/hotel/category', [HotelCategoryController::class, 'index'])->name('admin.hotel.category')->middleware('is_admin');
Route::post('admin/hotel/category/store', [HotelCategoryController::class, 'store'])->name('admin.hotel.category.store')->middleware('is_admin');
Route::get('admin/hotel/category/destroy/{id}', [HotelCategoryController::class, 'destroy'])->name('admin.hotel.category.destroy')->middleware('is_admin');


Route::get('admin/hotel', [HotelController::class, 'index'])->name('admin.hotel')->middleware('is_admin');
Route::post('admin/hotel/store', [HotelController::class, 'store'])->name('admin.hotel.store')->middleware('is_admin');
Route::get('admin/hotel/destroy/{id}', [HotelController::class, 'destroy'])->name('admin.hotel.destroy')->middleware('is_admin');



