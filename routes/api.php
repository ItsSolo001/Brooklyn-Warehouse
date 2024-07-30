<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::get('products', [ProductsController::class, 'index']);
    Route::post('products', [ProductsController::class, 'store']);
    Route::get('products/{product}', [ProductsController::class, 'show']);
    Route::put('products/{product}', [ProductsController::class, 'update']);
    Route::delete('products/{product}', [ProductsController::class, 'destroy']);
});

