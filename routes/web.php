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

Route::get('/undangan-alt1', function () {
    return view('undangan-aldi.home');
});

Route::get('/undangan-alt1/index', function () {
    return view('undangan-aldi.index');
});

Route::get('/undangan-aldi/coba', function () {
    return view('undangan-aldi.coba');
});


Route::get('/undangan-alt3', function () {
    return view('undangan-nanang.home');
});

Route::get('/undangan-alt3/index', function () {
    return view('undangan-nanang.index');
});


Route::get('/undangan-alt2', function () {
    return view('undangan-mufli.home');
});

Route::get('/undangan-coba', function () {
    return view('undangan-mufli.coba');
});

Route::get('/undangan-alt2/index', function () {
    return view('undangan-mufli.index');
});


// Route::get('/', function () {
//     return view('index');
// });


