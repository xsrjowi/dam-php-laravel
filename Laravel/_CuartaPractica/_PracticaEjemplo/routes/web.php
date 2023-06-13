<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Middleware\UpdateMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');

Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');

Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

// Route::get('/tickets', [TicketController::class, 'cerrar'])->name('tickets.cerrar');

Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

Route::get('/tickets/edit/{id}', [TicketController::class, 'edit'])->name('tickets.edit');

Route::put('/tickets/update/{id}', [TicketController::class, 'update'])->name('tickets.update');

Route::delete('/tickets/{id}', [TicketController::class, 'destroy'])->name('tickets.destroy');
