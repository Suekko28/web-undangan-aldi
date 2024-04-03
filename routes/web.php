<?php

use App\Http\Controllers\Alt1Controller;
use App\Http\Controllers\Alt2Controller;
use App\Http\Controllers\Alt3Controller;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/alt1', function () {
    return view('admin.index-alt1');
});

Route::get('/create', function () {
    return view('undangan-aldi.create');
});


// Route::get('/undangan-alt1', function () {
//     return view('undangan-aldi.home');
// });

Route::get('/undangan-alt1', function () {
    return view('undangan-aldi.home');
});

Route::resource('/undangan-alt1/index', Alt1Controller::class)->only(['index', 'store']);

// Route::get('/undangan-alt1/index', function () {
//     return view('undangan-aldi.index');
// });


Route::get('/undangan-alt2', function () {
    return view('undangan-mufli.home');
});


Route::resource('/undangan-alt2/index', Alt2Controller::class)->only(['index', 'store']);



Route::get('/undangan-alt3', function () {
    return view('undangan-nanang.home');
});


Route::resource('/undangan-alt3/index', Alt3Controller::class)->only(['index', 'store']);







