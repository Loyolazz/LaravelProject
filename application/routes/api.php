<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return response()->json([
        'success' => true,
    ]);
});

Route::prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']); // Correção aqui
    Route::patch('/edit/{id}', [UserController::class, 'update']); // Correção aqui
    Route::delete('/editDel/{id}', [UserController::class, 'destroy']); // Correção aqui
});

Route::prefix('/movies')->group(function() {
    Route::get('/', [App\Http\Controllers\Api\MovieController::class, 'index']);
    Route::post('/', [App\Http\Controllers\Api\MovieController::class,'store']);
    Route::get('/{id}', [App\Http\Controllers\Api\MovieController::class,'show']);
    Route::patch('/edit/{id}', [App\Http\Controllers\Api\MovieController::class, 'update']);
    Route::delete('/editDel/{id}', [App\Http\Controllers\Api\MovieController::class, 'destroy']);
});

