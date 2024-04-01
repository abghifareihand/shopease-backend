<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
    return view('pages.auth.login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('profile', function () {
        return view('pages.profile');
    })->name('profile');
    Route::resource('home', DashboardController::class);
    Route::resource('user', UserController::class);
});
