<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    /**
     * Corporate Homepage (Ultra-modern Light Theme B2B)
     */
    public function home()
    {
        $allProducts = Product::active()->get();

        // 5 Core B2B Catalog Categories
        $catalog = [
            'rulo' => [
                'name' => __('cat_rulo'),
                'icon' => '🏷️',
                'description' => 'Kuşe, Direkt Termal, Eko Termal ve Lamine rulo barkod etiketleri.',
                'products' => $allProducts->whereIn('slug', ['kuse-etiket', 'termal-etiket', 'barkod-etiketi'])->values(),
            ],
            'plastik' => [
                'name' => __('cat_plastik'),
                'icon' => '🛡️',
                'description' => 'Suya, yağa, sürtünmeye ve kimyasallara dayanıklı polipropilen ve metalize etiketler.',
                'products' => $allProducts->whereIn('slug', ['pp-opak-etiket', 'seffaf-etiket', 'silver-mat-etiket'])->values(),
            ],
            'tekstil' => [
                'name' => __('cat_tekstil'),
                'icon' => '🧵',
                'description' => '90°C kaynatmaya dayanıklı Japon akmaz kumaş şeritler ve jakarlı dokuma armalar.',
                'products' => $allProducts->whereIn('slug', ['japon-akmaz-etiket', 'dokuma-etiket', 'karton-sallama-etiket'])->values(),
            ],
            'guvenlik' => [
                'name' => __('cat_guvenlik'),
                'icon' => '🔒',
                'description' => 'Söküldüğünde iz bırakan Güvenlik VOID, garanti ve seri numaralı güvenlik etiketleri.',
                'products' => $allProducts->whereIn('slug', ['guvenlik-void-etiket'])->values(),
            ],
            'ozel' => [
                'name' => __('cat_ozel'),
                'icon' => '✨',
                'description' => 'Varak yaldız, gofre kabartma ve ofset baskılı özel karton kutu ambalaj çözümleri.',
                'products' => $allProducts->whereIn('slug', ['kutu-ambalaj', 'ozel-kesim-etiket', 'endustriyel-ambalaj'])->values(),
            ],
        ];

        // Key Regional Hubs for Homepage teaser (clean list, no 81-city wall)
        $keyHubs = City::whereIn('slug', ['gaziantep', 'istanbul', 'bursa', 'kocaeli', 'ankara', 'izmir', 'adana', 'tekirdag'])->get();

        $seo = [
            'title' => 'GÖKSAN Etiket • Endüstriyel Rulo Etiket & Ambalaj Fabrikası | goksanetiket.com',
            'description' => 'Gaziantep 1. OSB tesislerimizde toptan rulo etiket, dokuma arma, karton kutu ambalaj ve barkod çözümleri. 81 ilimizin organize sanayi bölgelerine 24-48 saatte ambar sevkiyatı.',
            'canonical' => url('/'),
        ];

        return view('pages.home', compact('catalog', 'keyHubs', 'seo'));
    }

    /**
     * Kurumsal / About Us Page
     */
    public function about()
    {
        $seo = [
            'title' => 'Kurumsal | GÖKSAN Etiket • Matbaa • Ambalaj Sanayi',
            'description' => 'Gaziantep 1. OSB tesislerimizde son teknoloji 8 renk UV flekso ve ofset parkurumuzla Türkiye sanayisine doğrudan üretici etiket ve ambalaj çözümleri sunuyoruz.',
            'canonical' => route('corporate.about'),
        ];

        return view('pages.about', compact('seo'));
    }

    /**
     * Machinery / Üretim Parkuru Page
     */
    public function machinery()
    {
        $seo = [
            'title' => 'Üretim Parkuru & Makine Parkı | Göksan Etiket',
            'description' => '8 Renk UV Flexo baskı hatları, dijital rulo sonlandırma, varak yaldız üniteleri ve otomatik dilimleme makinelerimizle sıfır hata toleransı.',
            'canonical' => route('corporate.machinery'),
        ];

        return view('pages.machinery', compact('seo'));
    }

    /**
     * Sectors / Hizmet Verilen Sektörler Page
     */
    public function sectors()
    {
        $seo = [
            'title' => 'Sektörel Etiket Çözümleri | Göksan Etiket',
            'description' => 'Gıda, kozmetik, tekstil, kimya, lojistik ve otomotiv sektörlerinin özel şartnamelerine tam uyumlu endüstriyel etiket ve ambalaj üretimi.',
            'canonical' => route('corporate.sectors'),
        ];

        return view('pages.sectors', compact('seo'));
    }

    /**
     * Dedicated RFQ (Request for Quote) Wizard Page
     */
    public function rfq()
    {
        $products = Product::active()->get();
        $cities = City::orderBy('name')->get();

        $seo = [
            'title' => 'Online Fiyat Teklifi Al (RFQ) | Göksan Etiket',
            'description' => '2 adımda rulo etiket veya ambalaj özellikleri seçin, anında fabrikadan doğrudan toptan birim fiyat teklifinizi ve WhatsApp onayınızı alın.',
            'canonical' => route('corporate.rfq'),
        ];

        return view('pages.rfq', compact('products', 'cities', 'seo'));
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
            'dimensions' => ['nullable', 'string', 'max:100'],
            'quantity' => ['nullable', 'string', 'max:50'],
            'city' => ['nullable', 'string', 'max:100'],
            'note' => ['nullable', 'string', 'max:1000'],
        ]);

        return back()->with('quote_success', app()->getLocale() === 'ar' 
            ? 'تم استلام طلبكم بنجاح! سيتواصل معكم فريق المبيعات خلال 15 دقيقة.' 
            : 'Talebiniz başarıyla alındı! Satış mühendislerimiz 15 dakika içinde sizinle iletişime geçecektir.');
    }
}
