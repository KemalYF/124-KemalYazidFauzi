<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;

Route::get('/home', function () {
    return view('layout.pages.home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('rooms');
    Route::get('/rooms', 'index')->name('rooms');
    Route::get('/rooms/{id}', 'show')->name('rooms.show');
});

Route::controller(RoomController::class)->group( function () {
    Route::get('/rooms', 'index')->name('rooms');
    Route::get('/rooms/{id}', 'show')->name('rooms.show');
});

Route::get('/facilities', function () {
    return view('layout.pages.facilities');
})->name('facilities');

Route::get('/booking', function () {
    return view('layout.pages.booking');
})->name('booking');

Route::get('/about', function () {
    return view('layout.pages.contact');
})->name('about');


// yang ini masih bingung bikin desainnya, jadi belum dibikin
Route::get('/login', function () {
    return view('login');
})->name('login');
// End Path