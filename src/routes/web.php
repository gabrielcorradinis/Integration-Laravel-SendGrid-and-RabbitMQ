<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [PostController::class, 'form'])->name('form');
Route::post('/', [PostController::class, 'formPost'])->name('formPost');
