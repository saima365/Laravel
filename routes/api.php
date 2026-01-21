<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CustomerController as ControllersCustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get("customer",[CustomerController::class,"index"]);
