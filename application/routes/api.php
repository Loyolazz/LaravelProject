<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return response()->json([
        'success' => true,
    ]);
});

Route::patch('/users/CBMSE/edit/{id}', [UserController::class, 'update']);
Route::get('/users/CBMSE{id}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);