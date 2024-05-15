<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.home');
})->name('home');

Route::get('/home', function () {
    sleep(1);
    return redirect()->route("home");
});

Route::get('/room', function () {
    return view('layout.room');
})->name('room');

Route::get('/favorite', function () {
    return view('layout.favorite');
})->name('favorite');

Route::get('/about', function () {
    return view('layout.about');
})->name('about');

// yang ini masih bingung bikin desainnya, jadi belum dibikin, sama notif juga nanti bukan page, jadi pop up / logo
Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

Route::get('/login', function () {
    return view('login');
})->name('login');
// End Path