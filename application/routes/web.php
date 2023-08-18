<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('blade', function () {
    $myData =[
        'nome' => 'Arthur',
        'email' => 'loyola@blade.com',
    ];

    return view('child', ['nome' => 'Arthur', 'myData' => $myData]);
});
