<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    
    Route::get('/product',[App\Http\Controllers\ProductController::class, 'index']);
    Route::post('/save', [App\Http\Controllers\ProductController::class, 'store']);
    Route::put('/updates', [App\Http\Controllers\ProductController::class, 'update']);
    Route::delete('/destroys', [App\Http\Controllers\ProductController::class, 'destroy']);
