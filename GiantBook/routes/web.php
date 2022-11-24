<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\BookController::class,'book']);

Route::get('/publisher', [\App\Http\Controllers\BookController::class, 'publisher']);

Route::get('/contact', [\App\Http\Controllers\BookController::class, 'contact']);

Route::get('/category/{id}', [\App\Http\Controllers\BookController::class, 'category']);

Route::get('/detail/{id}', [\App\Http\Controllers\BookController::class,'detail']);
