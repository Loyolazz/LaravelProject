<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return response()->json([
        'success' => true,
    ]);
});

Route::prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/CBMSE{id}', [UserController::class, 'show']);
    Route::patch('/edit/{id}', [UserController::class, 'update']);
    Route::delete('/editDel/{id}', [UserController::class, 'destroy']);
});