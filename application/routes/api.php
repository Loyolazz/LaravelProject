<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Api\UserController;


Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);


Route::get('/', function(){
    return response()->json([
        'success' => true,
    ]);
});