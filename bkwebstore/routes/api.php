<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\Admin\AboutAdminController;

Route::prefix('v1')->group(function () {    

    // Auth
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    // About
    // Route::get('/about', [AboutController::class, 'index']);
    Route::get('/about', function () {
    return response()->json([
        'success' => true,
        'message' => 'API works'
    ]);
});

    Route::middleware('auth:sanctum')->group(function () {

        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/me', [AuthController::class, 'me']);

        Route::apiResource('categories', ProductCategoryController::class)
            ->except(['index', 'show']);
    });

    Route::apiResource('categories', ProductCategoryController::class)
        ->only(['index', 'show']);


    Route::apiResource('products', ProductController::class)
    ->only(['index', 'show']);

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('products', ProductController::class)
        ->except(['index', 'show']);

});
});


Route::middleware(['auth:sanctum', 'admin'])->group(function () {

    Route::apiResource('products', ProductController::class)
        ->except(['index', 'show']);

    Route::apiResource('categories', ProductCategoryController::class)
        ->except(['index', 'show']);

});


// Admin Route Group``
Route::prefix('admin')->group(function () {

    Route::get('/about', [AboutAdminController::class, 'index']);

    Route::put('/about/hero', [AboutAdminController::class, 'updateHero']);

    Route::post('/about/cards', [AboutAdminController::class, 'storeCard']);

    Route::put('/about/cards/{id}', [AboutAdminController::class, 'updateCard']);

    Route::delete('/about/cards/{id}', [AboutAdminController::class, 'deleteCard']);

});