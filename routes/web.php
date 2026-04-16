<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
});
