<?php

use App\Http\Controllers\Alt1Controller;
use App\Http\Controllers\Alt2Controller;
use App\Http\Controllers\Alt3Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeAlt1Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UndanganAlt1Controller;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewAlt1Controller;
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



// Routing Admin


Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [LoginController::class, 'register'])->name('register.form');
Route::post('/create', [LoginController::class, 'create'])->name('register.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/view-alternative1', [ViewAlt1Controller::class, 'index'])->name('view-alternative1');
    // Route::get('/undangan/pilih-template', [UndanganController::class, 'template'])->name('template');
    // Route::resource('/undangan', UndanganController::class);
    Route::resource('/undangan-alternative1', UndanganAlt1Controller::class);
    Route::get('/undangan-alternative1', [UndanganAlt1Controller::class, 'index'])->name('undangan-alternative1');

});



// Routing User

Route::get('/', function () {
    return view('index');
});

// Route::get('/undangan-alt1', function () {
//     return view('undangan-aldi.home');
// });

Route::get('/undangan-alt1/{nama_undangan}', [ViewAlt1Controller::class, 'show'])->name('undangan-alt1-home');

Route::resource('/undangan-alt1/index', Alt1Controller::class)->only(['index', 'store']);




Route::get('/undangan-alt2', function () {
    return view('undangan-mufli.home');
});


Route::resource('/undangan-alt2', Alt2Controller::class)->only(['index', 'store']);



Route::get('/undangan-alt3', function () {
    return view('undangan-nanang.home');
});


Route::resource('/undangan-alt3', Alt3Controller::class)->only(['index', 'store']);







