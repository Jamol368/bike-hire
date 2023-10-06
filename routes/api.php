<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BikeCategoryController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register']);

Route::apiResource('bike-category', BikeCategoryController::class)
->except(['store', 'update', 'destroy']);

Route::apiResource('shop', ShopController::class)
    ->except(['store', 'update', 'destroy']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('rental', RentalController::class);

    Route::post('/refresh', [AuthController::class, 'refresh']);

    Route::apiResource('bike-category', BikeCategoryController::class)
        ->only(['store', 'update', 'destroy']);

    Route::apiResource('shop', ShopController::class)
        ->only(['store', 'update', 'destroy']);
});
