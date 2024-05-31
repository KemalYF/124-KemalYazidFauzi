<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

// coba-coba doang yang inimah, sayang dihapus nanti lupa hahaha

// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Route::get('/', [HomeController::class, 'index'])->name('rooms')->middleware('auth');
// Route::get('/home', [HomeController::class, 'index'])->name('rooms')->middleware('auth');
// Route::get('/rooms', [HomeController::class, 'index'])->name('rooms')->middleware('auth');
// Route::get('/rooms/{id}', [HomeController::class, 'show'])->name('rooms.show')->middleware('auth');
// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// end of test

// Home Route
// Route::get('/', [HomeController::class, 'index'])->name('home');
// atau bisa juga seperti ini
Route::get('/home', function () {
    return view('layout.pages.home');
})->name('home');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('rooms');
    Route::get('/home', 'index')->name('rooms');

})->name('home');

Route::controller(RoomController::class)->group( function () {
    Route::get('/rooms', 'index')->name('rooms');
    Route::get('/rooms/{id}', 'show')->name('rooms.show');
});

Route::get('/facilities', function () {
    return view('layout.pages.facilities');
})->name('facilities');

Route::get('/booking', function () {
    return view('layout.pages.booking');
})->name('booking')->middleware('auth');

Route::get('/contact', function () {
    return view('layout.pages.contact');
})->name('contact');

// mau pake middleware semua, tapi ini website hotel, masa mau liat-liat hotelnya harus login dulu,
// jadi cuma booking saja yang middleware

// Room Routes
// Route::middleware('auth')->group(function () {
//     Route::controller(RoomController::class)->group(function () {
//         Route::get('/rooms', 'index')->name('rooms');
//         Route::get('/rooms/{id}', 'show')->name('rooms.show');
//     });

//     // Facilities Route
//     Route::get('/facilities', function () {
//         return view('layout.pages.facilities');
//     })->name('facilities');

//     // Booking Route
//     Route::get('/booking', function () {
//         return view('layout.pages.booking');
//     })->name('booking');

//     // Contact Route
//     Route::get('/contact', function () {
//         return view('layout.pages.contact');
//     })->name('contact');
// });

// end of middleware

// Authentication Routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout.post')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');