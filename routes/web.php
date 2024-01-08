<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostController;

Route::get('/', [WebController::class, 'index'])->name('index');
Route::post('/create', [WebController::class, 'create'])->name('create');
Route::get('/edit/{id}', [WebController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [WebController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [WebController::class,'delete'])->name('delete');


Route::resource('/post', PostController::class);