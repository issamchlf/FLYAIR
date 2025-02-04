<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FlightController;
use App\Http\Controllers\Api\AirplaneController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['jwt.auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/me', [AuthController::class, 'me']);
});

Route::middleware(['jwt.auth', 'admin'])->group(function () {
    Route::put('/users/{user}/role', [AuthController::class, 'changeRole']);
});

route::get('/airplanes', [AirplaneController::class, 'index'])->name('apiindex.airplane');
route::get('/airplanes/{id}', [AirplaneController::class, 'show'])->name('apishow.airplane');
route::post('/airplanes', [AirplaneController::class, 'store'])->name('apistore.airplane');
route::put('/airplanes/{id}', [AirplaneController::class, 'update'])->name('apiupdate.airplane');
route::delete('/airplanes/{id}', [AirplaneController::class, 'destroy'])->name('apidelete.airplane');

route::get('/flights', [FlightController::class, 'index'])->name('apiindex.flight');   
route::get('/flights/{id}', [FlightController::class, 'show'])->name('apishow.flight');
route::post('/flights', [FlightController::class, 'store'])->name('apistore.flight');
route::put('/flights/{id}', [FlightController::class, 'update'])->name('apiupdate.flight');
route::delete('/flights/{id}', [FlightController::class, 'destroy'])->name('apidelete.flight');