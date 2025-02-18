<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\Api\AuthController;

Route::get('/', function () {
    return view('home');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/Login', [AuthController::class, 'login'])->name('login');
Route::get('/flights', [FlightController::class, 'index'])->name('flight.index');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['jwt.auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::get('/me', [AuthController::class, 'me'])->name('me');
});
