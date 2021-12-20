<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('logout', function() {
    return view("auth.login");
});

Route::get('/proizvodi', function () {
    return view('proizvodi');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/model', function () {
    return view('model');
});

require __DIR__.'/auth.php';
