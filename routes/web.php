<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes pages légales (à adapter selon vos besoins)
Route::get('/mentions-legales', function () {
    return view('legal.mentions');
})->name('legal.mentions');

Route::get('/politique-confidentialite', function () {
    return view('legal.confidentialite');
})->name('legal.confidentialite');
