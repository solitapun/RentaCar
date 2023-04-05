<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\BookingController;

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
    return view('home');
});

/* Pages Routes */
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/package', [PageController::class, 'package'])->name('package');
Route::get('/book', [PageController::class, 'book'])->name('book');
Route::get('/checkBooking', [PageController::class, 'checkBooking'])->name('checkBooking');
Route::get('/book/complete', [PageController::class, 'thankYou'])->name('thankYou');
Route::get('/comingsoon', [PageController::class, 'comingsoon'])->name('comingSoon');

/* Booking Route */
Route::post('/book/booking', [BookingController::class, 'Register'])->name('booking');


