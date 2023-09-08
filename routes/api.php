<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BikeCategoryController;
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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

//Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);
//Route::get('/shop/{shop}', [\App\Http\Controllers\ShopController::class, 'show']);
//Route::post('/shop', [\App\Http\Controllers\ShopController::class, 'store']);
//Route::put('/shop/{id}', [\App\Http\Controllers\ShopController::class, 'update']);

Route::apiResource('/shop', ShopController::class);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::apiResource('/bike-category', BikeCategoryController::class);
});
