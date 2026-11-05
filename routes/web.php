<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CityController as AdminCityController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\CorporateController;
use App\Http\Controllers\RegionalSeoController;
use Illuminate\Support\Facades\Route;

// ==========================================
// 0. LANGUAGE SWITCHER (TR / AR + RTL)
// ==========================================
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['tr', 'ar'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return back();
})->name('set-locale');

// ==========================================
// 1. CORPORATE & MODULE ROUTES
// ==========================================
Route::get('/', [CorporateController::class, 'home'])->name('home');
Route::get('/kurumsal', [CorporateController::class, 'about'])->name('corporate.about');
Route::get('/hakkimizda', [CorporateController::class, 'about'])->name('about');
Route::get('/makine-parkuru', [CorporateController::class, 'machinery'])->name('corporate.machinery');
Route::get('/uretim-parkuru', [CorporateController::class, 'machinery'])->name('machinery');
Route::get('/sektorler', [CorporateController::class, 'sectors'])->name('corporate.sectors');
Route::get('/sektorlerimiz', [CorporateController::class, 'sectors'])->name('sectors');
Route::get('/teklif-al', [CorporateController::class, 'rfq'])->name('corporate.rfq');
Route::get('/hemen-fiyat-al', [CorporateController::class, 'rfq'])->name('rfq');

// Core Modules
Route::get('/etiket-cozumleri', [CorporateController::class, 'etiketCozumleri'])->name('corporate.etiket');
Route::get('/rulo-barkod-etiketleri', [CorporateController::class, 'etiketCozumleri'])->name('products.etiket');
Route::get('/tekstil-etiketleri', [CorporateController::class, 'tekstilEtiketleri'])->name('corporate.tekstil');
Route::get('/tekstil-dokuma-etiketleri', [CorporateController::class, 'tekstilEtiketleri'])->name('products.tekstil');
Route::get('/matbaa-ambalaj', [CorporateController::class, 'matbaaAmbalaj'])->name('corporate.ambalaj');
Route::get('/matbaa-kutu-ambalaj', [CorporateController::class, 'matbaaAmbalaj'])->name('products.matbaa');
Route::get('/iletisim', [CorporateController::class, 'contact'])->name('corporate.contact');
Route::get('/bize-ulasin', [CorporateController::class, 'contact'])->name('contact');
Route::get('/online-odeme', [CorporateController::class, 'onlinePayment'])->name('payment');
Route::get('/sanal-pos', [CorporateController::class, 'onlinePayment'])->name('corporate.payment');
Route::post('/online-odeme', [CorporateController::class, 'processPayment'])->name('payment.submit');
Route::post('/hizli-teklif', [CorporateController::class, 'submitQuote'])->name('corporate.quote');

// Legal & Corporate Compliance Routes (KVKK, Çerezler, Gizlilik, Mesafeli Satış)
Route::get('/kvkk-aydinlatma-metni', [CorporateController::class, 'kvkk'])->name('legal.kvkk');
Route::get('/cerez-politikasi', [CorporateController::class, 'cookiePolicy'])->name('legal.cookies');
Route::get('/gizlilik-guvenlik', [CorporateController::class, 'privacyPolicy'])->name('legal.privacy');
Route::get('/mesafeli-satis-sozlesmesi', [CorporateController::class, 'distanceSales'])->name('legal.sales');

// Dynamic XML Sitemap
Route::get('/sitemap.xml', [RegionalSeoController::class, 'sitemap'])->name('sitemap');

// ==========================================
// 2. REGIONAL SEO ENGINE (81 İL SİSTEMİ)
// ==========================================
Route::get('/hizmet-bolgelerimiz', [RegionalSeoController::class, 'index'])->name('regional.index');
Route::get('/bolgesel-hizmetler', function () {
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
