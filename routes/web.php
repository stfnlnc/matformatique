<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::name('main.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/mentions-legales', [MainController::class, 'legalNotice'])->name('legal');
    Route::get('/politique-de-confidentialite', [MainController::class, 'privacyPolicy'])->name('privacy');
});

Route::name('services.')->domain('services.matformatique.com')->group(function () {
    Route::get('/', [MainController::class, 'services'])->name('home');
    Route::get('/mentions-legales', [MainController::class, 'legalNoticeService'])->name('legal');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/reviews', [MainController::class, 'apiReviews'])->name('api.reviews');
