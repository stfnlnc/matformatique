<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/service-a-la-personne', [MainController::class, 'services'])->name('services');
    Route::get('/mentions-legales', [MainController::class, 'legalNotice'])->name('legal');
    Route::get('/politique-de-confidentialite', [MainController::class, 'privacyPolicy'])->name('privacy');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
