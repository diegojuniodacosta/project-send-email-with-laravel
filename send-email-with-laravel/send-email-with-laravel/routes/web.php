<?php

use App\Http\Controllers\TransportController;
use Illuminate\Support\Facades\Route;


// Rotas para transportes
Route::get('/', [TransportController::class, 'index'])
    ->name('transports.index');
Route::get('/transports-create', [TransportController::class, 'create'])
    ->name('transports.create');
Route::post('/transports-store', [TransportController::class, 'store'])
    ->name('transports.store');

