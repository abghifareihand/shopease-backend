<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\CallbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    // get user and update
    Route::get('user', [UserController::class, 'fetch']);
    Route::put('user', [UserController::class, 'update']);

    // logout
    Route::post('logout', [UserController::class, 'logout']);

    // order
    Route::post('order', [OrderController::class, 'order']);

    // address
    Route::apiResource('address', AddressController::class);
});

// register
Route::post('register', [UserController::class, 'register']);

// login
Route::post('login', [UserController::class, 'login']);

//category
Route::get('categories', [CategoryController::class, 'index']);

//category
Route::get('products', [ProductController::class, 'index']);

// callback midtrans
Route::post('callback', [CallbackController::class, 'callback']);
