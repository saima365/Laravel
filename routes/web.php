<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WalletController;
use App\Mail\UserNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout.erp.app');
// });
route::get("/",[DashboardController::class,"index"]);
// Route::get('/students', function () {
//     return view('students');
// });

// Route::get('/students/{name}/{id}', function ($name,$id) {

//    $student=["Mithila","Marisha","Sumaiya","Sabrina"];
// return view("students",["id"=>$id,"name"=>$name,"student"=>$student]);

// });
route::get("/students",[StudentController::class,"index"]);
route::get("/student/create",[StudentController::class,"create"]);
route::get("/student/{id}",[StudentController::class,"delete"]);
route::get("/customers",[CustomerController::class,"index"]);
route::get("/customer/create",[CustomerController::class,"create"]);
route::post("/customer/save",[CustomerController::class,"save"]);
route::delete("/customer/delete/{id}",[CustomerController::class,"delete"]);
route::get("/customer/edit/{id}",[CustomerController::class,"edit"]);
route::post("/customer/update/{id}",[CustomerController::class,"update"]);
route::get("/wallet",[WalletController::class,"index"]);
Route::get('/mail', function () {
    Mail::to("afrinakthertithebhuiyan@gmail.com")->send(new UserNotification);
    return "Mail sent successfully";
});

route::fallback(function(){
   return "<h1>404 not Found</h1>";
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
