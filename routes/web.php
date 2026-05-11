<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');
Route::get('/room-detail/{type}', [RoomController::class, 'detail'])->name('rooms.detail');
