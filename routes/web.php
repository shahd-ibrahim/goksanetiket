<?php

use App\Http\Controllers\RegionalSeoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('regional.index');
});

// Programmatic Regional SEO Routes
Route::get('/etiket-hizmet-bolgeleri', [RegionalSeoController::class, 'index'])->name('regional.index');
Route::get('/{citySlug}-etiket-fabrikasi', [RegionalSeoController::class, 'cityHub'])->name('regional.city');
Route::get('/{serviceSlug}/{citySlug}', [RegionalSeoController::class, 'serviceCity'])->name('regional.service');
