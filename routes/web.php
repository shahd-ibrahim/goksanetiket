<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CityController as AdminCityController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
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

// ==========================================
// ADMIN AUTH & DASHBOARD ROUTES
// ==========================================

// Login / Logout
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login'); // Standard auth fallback
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Protected Admin Panel
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Cities Resource (Index, Edit, Update)
    Route::get('/cities', [AdminCityController::class, 'index'])->name('cities.index');
    Route::get('/cities/{city}/edit', [AdminCityController::class, 'edit'])->name('cities.edit');
    Route::put('/cities/{city}', [AdminCityController::class, 'update'])->name('cities.update');

    // Products Resource (Full CRUD)
    Route::resource('products', AdminProductController::class);
});

// ==========================================
// REGIONAL PROGRAMMATIC SEO ROUTES
// ==========================================

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
