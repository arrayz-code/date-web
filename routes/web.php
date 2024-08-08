<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::controller(FrontController::class)->group(function(){
Route::get('/', 'index')->name('app.front');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts.app');
    });
});



