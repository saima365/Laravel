<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UserController;
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
Route::apiResource("transactions",TransactionController::class);
Route::apiResource("users",UserController::class);
Route::get("transaction_types",[TransactionController::class,'transaction_types']);
Route::get("account_number/{id}",[TransactionController::class,'account_number']);
