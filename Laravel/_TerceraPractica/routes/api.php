<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\PlatformController;
use App\Http\Middleware\ApartmentInsertMiddleware;
use App\Http\Middleware\ApartmentUpdateMiddleware;
use App\Http\Middleware\ApartmentDeleteMiddleware;
use App\Http\Middleware\RegisterMiddleware;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Controllers\Apartments_Rented_Controller;
use App\Http\Controllers\Apartaments_Premium_Controller;

// Login y register
Route::middleware([RegisterMiddleware::class])->post('/signin', [AuthController::class, 'register']);
Route::middleware([LoginMiddleware::class])->post('/signup', [AuthController::class, 'Login']);

// Apartamentos
Route::middleware([ApartmentUpdateMiddleware::class])->put('/apartments/{id}', [ApartmentController::class, 'update']);
Route::middleware([ApartmentInsertMiddleware::class])->post('/apartments', [ApartmentController::class, 'store']);
Route::delete('/apartments/{id}', [ApartmentController::class, 'destroy']);
Route::get('/apartments/{id}', [ApartmentController::class, 'show']);
Route::get('/apartments', [ApartmentController::class, 'index'])->name('apartments.index');
