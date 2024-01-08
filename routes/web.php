<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index'])->name('index');
Route::post('/create', [WebController::class, 'create'])->name('create');
Route::get('/edit/{id}', [WebController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [WebController::class, 'update'])->name('update');