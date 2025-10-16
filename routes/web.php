<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\GaleriController;


Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/about', function () {
    return view('tentang');
});

Route::get('/eskul', [EskulController::class, 'index']);
Route::get('/galery', [GaleriController::class, 'index']);
