<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WebController;
use App\Models\ServiceBooking;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get("/guest/login", [CustomerAuthController::class, "loginForm"])->name("guest.login");

// dd(ServiceBooking::with(["bookable", "customer"])->get());


Route::group(["prefix" => ""], function () {
    Route::get("", [WebController::class, "index"])->name("web");
    Route::get("/search", [WebController::class, "search"])->name("web.search");
    Route::get("/contact-us", [WebController::class, "contactUs"])->name("web.contactUs");
    Route::get("/about-us", [WebController::class, "aboutUs"])->name("web.aboutUs");
    Route::get("/serviceCategory/{serviceCategory}", [WebController::class, "serviceCategory"])->name("web.serviceCategory");
    Route::get("/checkout/{serviceBooking}", [WebController::class, "checkout"])->name("web.checkout");
    Route::get("/booking/{service}", [WebController::class, "booking"])->name("web.booking");
    Route::post("/booking/{service}/save", [WebController::class, "saveBooking"])->name("web.booking.save");
    Route::get("/privacy-policy", [WebController::class, "privacyPolicy"])->name("web.privacyPolicy");
});



Route::group(["prefix" => "dashboard"], function () {

    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
    Route::get("/bookingCalendar", [BookingController::class, "calendar"])->name("booking.calendar");


    Route::resource('coupons', App\Http\Controllers\CouponController::class);
    Route::resource('services', App\Http\Controllers\ServiceController::class);
    Route::resource('serviceCategories', App\Http\Controllers\ServiceCategoryController::class);
    Route::resource('customers', App\Http\Controllers\CustomerController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('bookings', App\Http\Controllers\BookingController::class);
    Route::resource("settings", SettingsController::class);
    Route::resource("profile", ProfileController::class);
});
