<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::get("/profile", [ProfileController::class, "edit"])->name("profile.edit");
Route::put("/profile", [ProfileController::class, "update"])->name("profile.update");
Route::get("/bookingCalendar", [BookingController::class, "calendar"])->name("booking.calendar");



Route::get("/web", [WebController::class, "index"])->name("web");
Route::get("/web/contact-us", [WebController::class, "contactUs"])->name("web.contactUs");
Route::get("/web/about-us", [WebController::class, "aboutUs"])->name("web.aboutUs");
Route::get("/web/privacy-policy", [WebController::class, "privacyPolicy"])->name("web.privacyPolicy");









Route::resource('coupons', App\Http\Controllers\CouponController::class);

Route::resource('services', App\Http\Controllers\ServiceController::class);

Route::resource('serviceCategories', App\Http\Controllers\ServiceCategoryController::class);

Route::resource('customers', App\Http\Controllers\CustomerController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('bookings', App\Http\Controllers\BookingController::class);
