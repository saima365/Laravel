<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\RoleController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->controller(AuthController::class)->group(function(){
    Route::post('logout', 'logout');
});



Route::get("/role",[RoleController::class,"index"]);


Route::apiResource("customers",CustomerController::class);
