<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::post("/register", [RegisterController::class, "store"]);
Route::get('/register', [RegisterController::class, "create"])->middleware("guest"); // Var ieiet itkai tie kas nav login

Route::delete("/logout", [SessionController::class, "destroy"]);
Route::post("/login", [SessionController::class, "store"]);
Route::get('/login', [SessionController::class, "create"])->name("login")->middleware("guest");

Route::get("/money", [SessionController::class, "gold"])->middleware("auth");

