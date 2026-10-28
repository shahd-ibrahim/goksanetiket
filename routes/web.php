<?php

use App\Http\Controllers\RegionalSeoController;
use Illuminate\Support\Facades\Route;

// Home redirect to regional service hub
Route::get('/', function () {
    return redirect()->route('regional.index');
});

// XML Sitemap (Dynamic XML Sitemap for Search Engines)
Route::get('/sitemap.xml', [RegionalSeoController::class, 'sitemap'])->name('sitemap');

// 1. Regional Index - 81 Provinces Grouped by Region
Route::get('/hizmet-bolgelerimiz', [RegionalSeoController::class, 'index'])->name('regional.index');

// Backward compatibility alias for /etiket-hizmet-bolgeleri
Route::get('/etiket-hizmet-bolgeleri', function () {
    return redirect()->route('regional.index', [], 301);
});

// Static pages
Route::get('/hakkimizda', function () {
    return redirect()->route('regional.index');
})->name('about');

Route::get('/iletisim', function () {
    return redirect()->route('regional.index');
})->name('contact');

// 2. City Hub Landing Page: /{citySlug}-etiket-fabrikasi
Route::get('/{citySlug}-etiket-fabrikasi', [RegionalSeoController::class, 'cityHub'])
    ->name('regional.city')
    ->where('citySlug', '[a-z0-9\-]+');

// 3. Service + City Landing Page: /{serviceSlug}/{citySlug}
Route::get('/{serviceSlug}/{citySlug}', [RegionalSeoController::class, 'serviceCity'])
    ->name('regional.service')
    ->where([
        'serviceSlug' => '[a-z0-9\-]+',
        'citySlug' => '[a-z0-9\-]+',
    ]);
