<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

// Ana səhifə otaqları göstərsin
Route::get('/', [RoomController::class, 'index'])->name('rooms.index');

// Otaq əlavə etmək üçün yol
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');