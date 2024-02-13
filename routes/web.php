<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\ClickFunction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\EmployeController;

Route::controller(BasicController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/test', 'test')->name('test');
    Route::get('/add-new', 'add')->name('add-member');
});

Route::resource('/ourteam', EmployeController::class);
