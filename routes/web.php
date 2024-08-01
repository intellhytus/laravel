<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginCont;


//Route::get('/', function () {return view('welcome');});
Route::get('/home', HomeController::class);
Route::get('/login', [\App\Http\Controllers\LoginCont::class, 'index'])->name('login.index');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'users'])->name('registro');
