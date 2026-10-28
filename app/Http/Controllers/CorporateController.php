<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    /**
     * Corporate Homepage
     */
    public function home()
    {
        $products = Product::active()->get();
        $ruloProducts = $products->where('category', 'rulo-barkod')->take(6);
        $tekstilProducts = $products->where('category', 'tekstil-dokuma')->take(3);
        $ambalajProducts = $products->where('category', 'matbaa-ambalaj')->take(3);
        
        $featuredCities = City::whereIn('slug', ['gaziantep', 'istanbul', 'bursa', 'ankara', 'izmir', 'adana', 'kocaeli', 'konya'])->get();

        $seo = [
            'title' => 'GÖKSAN Etiket • Matbaa • Ambalaj | Endüstriyel Rulo & Tekstil Etiketi İmalatı',
            'description' => 'Gaziantep 1. OSB tesislerimizde toptan rulo etiket, dokuma etiket, karton kutu ambalaj ve barkod çözümleri. 81 ilimize 24-48 saatte doğrudan sevkiyat.',
            'canonical' => url('/'),
        ];

        return view('pages.home', compact('products', 'ruloProducts', 'tekstilProducts', 'ambalajProducts', 'featuredCities', 'seo'));
    }

    /**
     * Kurumsal / About Us Page
     */
    public function about()
    {
        $seo = [
            'title' => 'Kurumsal | GÖKSAN Etiket • Matbaa • Ambalaj',
            'description' => 'Gaziantep 1. OSB tesislerimizde son teknoloji flekso ve ofset parkurumuzla Türkiye sanayisine yüksek kaliteli etiket ve ambalaj çözümleri sunuyoruz.',
            'canonical' => route('corporate.about'),
        ];

        return view('pages.about', compact('seo'));
    }

    /**
     * Rulo & Barkod Etiket Çözümleri
     */
    public function etiketCozumleri()
    {
        $products = Product::active()->category('rulo-barkod')->get();

        $seo = [
            'title' => 'Rulo Etiket & Barkod Çözümleri | Göksan Etiket',
            'description' => 'Termal etiket, kuşe etiket, PP opak ve silver mat demirbaş etiketleri. 8 renge kadar UV flekso rulo baskı ve toptan fabrika fiyatları.',
            'canonical' => route('corporate.etiket'),
        ];

        return view('pages.etiket-cozumleri', compact('products', 'seo'));
    }

    /**
     * Tekstil & Dokuma Etiketleri
     */
    public function tekstilEtiketleri()
    {
        $products = Product::active()->category('tekstil-dokuma')->get();

        $seo = [
            'title' => 'Tekstil & Dokuma Etiketleri | Göksan Etiket',
            'description' => 'Dokuma etiket, saten yıkama talimatı (Japon akmaz) ve özel kesimli karton sallama etiketleri. Tekstil ve hazır giyim sanayine özel çözümler.',
            'canonical' => route('corporate.tekstil'),
        ];

        return view('pages.tekstil-etiketleri', compact('products', 'seo'));
    }

    /**
     * Matbaa & Ambalaj Çözümleri
     */
    public function matbaaAmbalaj()
    {
        $products = Product::active()->category('matbaa-ambalaj')->get();

        $seo = [
            'title' => 'Matbaa & Kutu Ambalaj Çözümleri | Göksan Etiket',
            'description' => 'Karton kutu ambalaj, özel bıçak kesimli endüstriyel etiketler ve mukavva kutu çözümleri. Üretici güvencesiyle yüksek mukavemetli ambalaj.',
            'canonical' => route('corporate.ambalaj'),
        ];

        return view('pages.matbaa-ambalaj', compact('products', 'seo'));
    }

    /**
     * İletişim / Contact Page
     */
    public function contact()
    {
        $seo = [
            'title' => 'İletişim & Fabrika Adresi | GÖKSAN Etiket • Matbaa • Ambalaj',
            'description' => 'Gaziantep 1. OSB merkez fabrikamız ile iletişime geçin. Telefon: +90 342 503 46 52, WhatsApp: +90 533 024 63 38.',
            'canonical' => route('corporate.contact'),
        ];

        return view('pages.contact', compact('seo'));
    }

    /**
     * Fast Quote Form Processing
     */
    public function submitQuote(Request $request)
    {
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:30'],
            'product_type' => ['nullable', 'string', 'max:100'],
            'quantity' => ['nullable', 'string', 'max:50'],
            'city' => ['nullable', 'string', 'max:100'],
            'note' => ['nullable', 'string', 'max:1000'],
        ]);

        return back()->with('quote_success', 'Talebiniz başarıyla alındı! Satış mühendislerimiz 15 dakika içinde sizinle iletişime geçecektir.');
    }
}
