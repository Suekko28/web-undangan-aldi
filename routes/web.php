<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/undangan-aldi', function () {
    return view('undangan-aldi.home');
});

Route::get('/undangan-aldi/index', function () {
    return view('undangan-aldi.index');
});


Route::get('/undangan-nanang', function () {
    return view('undangan-nanang.home');
});

Route::get('/undangan-nanang/index', function () {
    return view('undangan-nanang.index');
});