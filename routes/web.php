<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Models\Supremo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


Route::get('/api/software', function () {
    $software = Supremo::query()->first();

    abort_unless($software, 404);

    $disk = Storage::disk('public_folder');

    return response()->json([
        'matcleaner_version' => $software->file_matcleaner ? $software->file_matcleaner_ver : null,
        'matcleaner' => $software->file_matcleaner ? $disk->url($software->file_matcleaner) : null,
        'windows_url' => $software->file_windows ? $disk->url($software->file_windows) : null,
        'macos_url' => $software->file_macos ? $disk->url($software->file_macos) : null,
        'macos_instructions_url' => $software->file_macos_instructions ? $disk->url($software->file_macos_instructions) : null,
    ]);
});
