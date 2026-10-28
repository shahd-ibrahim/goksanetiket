<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CityController as AdminCityController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\CorporateController;
use App\Http\Controllers\RegionalSeoController;
use Illuminate\Support\Facades\Route;

// ==========================================
// 1. CORPORATE & MODULE ROUTES
// ==========================================

Route::get('/', [CorporateController::class, 'home'])->name('home');
Route::get('/kurumsal', [CorporateController::class, 'about'])->name('corporate.about');
Route::get('/hakkimizda', function () {
    return redirect()->route('corporate.about', [], 301);
});

// Core Modules
Route::get('/etiket-cozumleri', [CorporateController::class, 'etiketCozumleri'])->name('corporate.etiket');
Route::get('/tekstil-etiketleri', [CorporateController::class, 'tekstilEtiketleri'])->name('corporate.tekstil');
Route::get('/matbaa-ambalaj', [CorporateController::class, 'matbaaAmbalaj'])->name('corporate.ambalaj');
Route::get('/iletisim', [CorporateController::class, 'contact'])->name('corporate.contact');
Route::post('/hizli-teklif', [CorporateController::class, 'submitQuote'])->name('corporate.quote');

// Dynamic XML Sitemap
Route::get('/sitemap.xml', [RegionalSeoController::class, 'sitemap'])->name('sitemap');

// ==========================================
// 2. REGIONAL SEO ENGINE (81 İL SİSTEMİ)
// ==========================================

// Regional Index
Route::get('/bolgesel-hizmetler', [RegionalSeoController::class, 'index'])->name('regional.index');
Route::get('/hizmet-bolgelerimiz', function () {
    return redirect()->route('regional.index', [], 301);
});
Route::get('/etiket-hizmet-bolgeleri', function () {
    return redirect()->route('regional.index', [], 301);
});

// Automated Turkish Provinces Matrix (Multi-keyword City Hub Patterns)
Route::get('/{citySlug}-etiket-fabrikasi', [RegionalSeoController::class, 'cityHub'])
    ->name('regional.city')
    ->where('citySlug', '[a-z0-9\-]+');

Route::get('/{citySlug}-etiket-uretimi', [RegionalSeoController::class, 'cityHub'])
    ->where('citySlug', '[a-z0-9\-]+');

Route::get('/{citySlug}-rulo-etiket', [RegionalSeoController::class, 'cityHub'])
    ->where('citySlug', '[a-z0-9\-]+');

// ==========================================
// 3. ADMIN PANEL ROUTES
// ==========================================

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/cities', [AdminCityController::class, 'index'])->name('cities.index');
    Route::get('/cities/{city}/edit', [AdminCityController::class, 'edit'])->name('cities.edit');
    Route::put('/cities/{city}', [AdminCityController::class, 'update'])->name('cities.update');
    Route::resource('products', AdminProductController::class);
});

// ==========================================
// 4. WILDCARD PRODUCT + CITY SERVICE ROUTE
// ==========================================
Route::get('/{serviceSlug}/{citySlug}', [RegionalSeoController::class, 'serviceCity'])
    ->name('regional.service')
    ->where([
        'serviceSlug' => '[a-z0-9\-]+',
        'citySlug' => '[a-z0-9\-]+',
    ]);
