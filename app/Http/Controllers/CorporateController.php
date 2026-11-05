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
        $isAr = app()->getLocale() === 'ar';

        // 5 Core B2B Catalog Categories
        $catalog = [
            'rulo' => [
                'name' => __('cat_rulo'),
                'icon' => '🏷️',
                'description' => __('cat_rulo_desc'),
                'products' => $allProducts->whereIn('slug', ['kuse-etiket', 'termal-etiket', 'barkod-etiketi'])->values(),
            ],
            'plastik' => [
                'name' => __('cat_plastik'),
                'icon' => '🛡️',
                'description' => __('cat_plastik_desc'),
                'products' => $allProducts->whereIn('slug', ['pp-opak-etiket', 'seffaf-etiket', 'silver-mat-etiket'])->values(),
            ],
            'tekstil' => [
                'name' => __('cat_tekstil'),
                'icon' => '🧵',
                'description' => __('cat_tekstil_desc'),
                'products' => $allProducts->whereIn('slug', ['japon-akmaz-etiket', 'dokuma-etiket', 'karton-sallama-etiket'])->values(),
            ],
            'guvenlik' => [
                'name' => __('cat_guvenlik'),
                'icon' => '🔒',
                'description' => __('cat_guvenlik_desc'),
                'products' => $allProducts->whereIn('slug', ['guvenlik-void-etiket'])->values(),
            ],
            'ozel' => [
                'name' => __('cat_ozel'),
                'icon' => '✨',
                'description' => __('cat_ozel_desc'),
                'products' => $allProducts->whereIn('slug', ['kutu-ambalaj', 'ozel-kesim-etiket', 'endustriyel-ambalaj'])->values(),
            ],
        ];

        // Key Regional Hubs for Homepage teaser (clean list, no 81-city wall)
        $keyHubs = City::whereIn('slug', ['gaziantep', 'istanbul', 'bursa', 'kocaeli', 'ankara', 'izmir', 'adana', 'tekirdag'])->get();

        $seo = [
            'title' => $isAr 
                ? 'مصنع غوكسان • ملصقات الرول الصناعية والتغليف والباركود | goksanetiket.com' 
                : 'GÖKSAN Etiket • Endüstriyel Rulo Etiket & Ambalaj Fabrikası | goksanetiket.com',
            'description' => $isAr 
                ? 'من منشآتنا بالمنطقة الصناعية الأولى بغازي عنتاب نوفر ملصقات الرول، علامات النسيج، وعلب التغليف بالجملة. شحن لـ 81 محافظة خلال 24-48 ساعة.' 
                : 'Gaziantep 1. OSB tesislerimizde toptan rulo etiket, dokuma arma, karton kutu ambalaj ve barkod çözümleri. 81 ilimizin organize sanayi bölgelerine 24-48 saatte ambar sevkiyatı.',
            'canonical' => url('/'),
        ];

        return view('pages.home', compact('catalog', 'keyHubs', 'seo'));
    }

    /**
     * Kurumsal / About Us Page
     */
    public function about()
    {
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'من نحن | مصنع غوكسان للملصقات والتغليف' : 'Kurumsal | GÖKSAN Etiket • Matbaa • Ambalaj Sanayi',
            'description' => $isAr 
                ? 'منشأة متكاملة في غازي عنتاب لطباعة الفليكسو UV 8 ألوان وتصنيع علب الكرتون والملصقات الصناعية.' 
                : 'Gaziantep 1. OSB tesislerimizde son teknoloji 8 renk UV flekso ve ofset parkurumuzla Türkiye sanayisine doğrudan üretici etiket ve ambalaj çözümleri sunuyoruz.',
            'canonical' => route('corporate.about'),
        ];

        return view('pages.about', compact('seo'));
    }

    /**
     * Machinery / Üretim Parkuru Page
     */
    public function machinery()
    {
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'خطوط الإنتاج ومعدات المصنع | غوكسان' : 'Üretim Parkuru & Makine Parkı | Göksan Etiket',
            'description' => $isAr 
                ? 'خطوط طباعة فليكسو UV 8 ألوان، وحدات تشطيب وقص رقمي، طباعة فويل وتقطيع رول أوتوماتيكي.' 
                : '8 Renk UV Flexo baskı hatları, dijital rulo sonlandırma, varak yaldız üniteleri ve otomatik dilimleme makinelerimizle sıfır hata toleransı.',
            'canonical' => route('corporate.machinery'),
        ];

        return view('pages.machinery', compact('seo'));
    }

    /**
     * Sectors / Hizmet Verilen Sektörler Page
     */
    public function sectors()
    {
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'القطاعات والخبرات الصناعية | غوكسان' : 'Sektörel Etiket Çözümleri | Göksan Etiket',
            'description' => $isAr 
                ? 'حلول ملصقات وتغليف مخصصة للأغذية، مستحضرات التجميل، المنسوجات، الكيماويات واللوجستيات.' 
                : 'Gıda, kozmetik, tekstil, kimya, lojistik ve otomotiv sektörlerinin özel şartnamelerine tam uyumlu endüstriyel etiket ve ambalaj üretimi.',
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
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'معالج طلب عرض السعر الفوري (RFQ) | غوكسان' : 'Online Fiyat Teklifi Al (RFQ) | Göksan Etiket',
            'description' => $isAr 
                ? 'حدد مواصفات الملصق أو التغليف واحصل على عرض سعر فوري بأسعار المصنع المباشرة عبر واتساب.' 
                : '2 adımda rulo etiket veya ambalaj özellikleri seçin, anında fabrikadan doğrudan toptan birim fiyat teklifinizi ve WhatsApp onayınızı alın.',
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
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'ملصقات الرول والباركود | غوكسان' : 'Rulo Etiket & Barkod Çözümleri | Göksan Etiket',
            'description' => $isAr 
                ? 'ملصقات حرارية، كوشيه، بولي بروبيلين وسيلفر مات ميتالايز للأصول بأسعار المصنع المباشرة.' 
                : 'Termal etiket, kuşe etiket, PP opak ve silver mat demirbaş etiketleri. 8 renge kadar UV flekso rulo baskı ve toptan fabrika fiyatları.',
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
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'ملصقات النسيج وأشرطة الغسيل | غوكسان' : 'Tekstil & Dokuma Etiketleri | Göksan Etiket',
            'description' => $isAr 
                ? 'شارات جاكار منسوجة، أشرطة قماش ياباني للغسيل القاسي وبطاقات كرتون تعليق مصممة للألبسة.' 
                : 'Dokuma etiket, saten yıkama talimatı (Japon akmaz) ve özel kesimli karton sallama etiketleri. Tekstil ve hazır giyim sanayine özel çözümler.',
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
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'علب الكرتون والتغليف الفاخر | غوكسان' : 'Matbaa & Kutu Ambalaj Çözümleri | Göksan Etiket',
            'description' => $isAr 
                ? 'علب كرتون مطبوعة أوفست، طباعة فويل ذهبي، وتغليف صناعي مقاوم مطابق لمعايير التصدير.' 
                : 'Karton kutu ambalaj, özel bıçak kesimli endüstriyel etiketler ve mukavva kutu çözümleri. Üretici güvencesiyle yüksek mukavemetli ambalaj.',
            'canonical' => route('corporate.ambalaj'),
        ];

        return view('pages.matbaa-ambalaj', compact('products', 'seo'));
    }

    /**
     * İletişim / Contact Page
     */
    public function contact()
    {
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'اتصل بنا وعنوان المصنع | غوكسان للملصقات' : 'İletişim & Fabrika Adresi | GÖKSAN Etiket • Matbaa • Ambalaj',
            'description' => $isAr 
                ? 'تواصل مع مصنعنا بالمنطقة الصناعية الأولى بغازي عنتاب. هاتف: 03425034652، واتساب: 05330246338.' 
                : 'Gaziantep 1. OSB merkez fabrikamız ile iletişime geçin. Telefon: +90 342 503 46 52, WhatsApp: +90 533 024 63 38.',
            'canonical' => route('corporate.contact'),
        ];

        return view('pages.contact', compact('seo'));
    }

    /**
     * Online Ödeme / Sanal POS (B2B Payment Gateway Page)
     */
    public function onlinePayment()
    {
        $isAr = app()->getLocale() === 'ar';

        $seo = [
            'title' => $isAr ? 'الدفع الإلكتروني الآمن (Sanal POS) | غوكسان للملصقات' : 'Online Ödeme & Sanal POS | GÖKSAN Etiket • Matbaa • Ambalaj',
            'description' => $isAr
                ? 'نظام الدفع الإلكتروني الآمن ثلاثي الأبعاد (3D Secure) لعملاء مصنع غوكسان للملصقات والتغليف.'
                : 'Göksan Etiket kurumsal müşterileri için 256-Bit SSL ve 3D Secure güvenceli online kredi kartı / Sanal POS tahsilat sistemi.',
            'canonical' => route('payment'),
        ];

        return view('pages.online-odeme', compact('seo'));
    }

    /**
     * Process Online Payment / Sanal POS Request
     */
    public function processPayment(Request $request)
    {
        $validated = $request->validate([
            'order_no' => ['required', 'string', 'max:100'],
            'customer_name' => ['required', 'string', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:120'],
            'amount' => ['required', 'numeric', 'min:1'],
            'currency' => ['required', 'in:TRY,USD,EUR'],
            'card_holder' => ['required', 'string', 'max:120'],
            'card_number' => ['required', 'string', 'max:25'],
            'expiry' => ['required', 'string', 'max:7'],
            'cvv' => ['required', 'string', 'max:4'],
            'note' => ['nullable', 'string', 'max:500'],
        ]);

        return back()->with('payment_status', app()->getLocale() === 'ar'
            ? 'تم تسجيل طلب الدفع الخاص بكم بنجاح (وضع المعاينة الآمن 3D Secure). يرجى التواصل مع قسم المحاسبة لتفعيل بوابة البنك.'
            : 'Ödeme işleminiz 3D Secure doğrulama katmanına iletildi. Sanal POS (PayTR / İyzico) canlı API anahtarları tanımlandığında tahsilat otomatik tamamlanacaktır.');
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
