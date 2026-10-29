@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "GÖKSAN Etiket • {{ $city->name }} Etiket Fabrikası & Rulo Baskı",
  "image": "{{ asset('images/logo.png') }}",
  "url": "{{ route('regional.city', ['citySlug' => $city->slug]) }}",
  "telephone": "+90-342-503-4652",
  "priceRange": "$$",
  "areaServed": {
    "@type": "AdministrativeArea",
    "name": "{{ $city->name }}"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31",
    "addressLocality": "{{ $city->name }}",
    "addressRegion": "{{ $city->region }}",
    "addressCountry": "TR"
  },
  "description": "{{ $city->name }} ve {{ $city->industrial_zones }} organize sanayi bölgelerine toptan rulo etiket, dokuma arma ve ambalaj üretimi. Teslimat süresi: {{ $city->delivery_time }}."
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "{{ $city->name }} Toptan Rulo Etiket",
  "image": "{{ asset('images/logo.png') }}",
  "description": "{{ $city->name }} için toptan termal, kuşe, PP opak rulo barkod etiketi ve kutu ambalaj imalatı.",
  "brand": {
    "@type": "Brand",
    "name": "Göksan Etiket"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "TRY",
    "lowPrice": "0.10",
    "highPrice": "5.00",
    "offerCount": "100"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Ana Sayfa",
    "item": "{{ url('/') }}"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Hizmet Bölgelerimiz",
    "item": "{{ route('regional.index') }}"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "{{ $city->name }} Etiket Fabrikası",
    "item": "{{ route('regional.city', ['citySlug' => $city->slug]) }}"
  }]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "{{ $city->name }} içine rulo etiket siparişlerinde teslimat süresi nedir?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "{{ $city->name }} ve bağlı organize sanayi bölgelerine üretim sonrası sevkiyat süremiz {{ $city->delivery_time }}dir. Acil siparişlerde anlaşmalı ambar ve özel ekspres sevkiyat sunulmaktadır."
      }
    },
    {
      "@type": "Question",
      "name": "{{ $city->name }} organize sanayi bölgelerine toptan sevkiyat yapıyor musunuz?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Evet, {{ $city->industrial_zones }} başta olmak üzere {{ $city->name }} genelindeki tüm fabrikalara doğrudan kapıya teslim rulo etiket ve ambalaj sevkiyatı yapıyoruz."
      }
    },
    {
      "@type": "Question",
      "name": "{{ $city->name }} firmaları için ücretsiz numune kiti gönderiyor musunuz?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Evet, {{ $city->name }} genelindeki tüm kurumsal ve endüstriyel firmalara kuşe, termal, PP opak ve kumaş numune kitlerimizi ücretsiz olarak kargoluyoruz."
      }
    }
  ]
}
</script>
@endpush

@section('content')
<div class="space-y-16 pb-16">
    <!-- Breadcrumbs Navigation -->
    <div class="border-b border-slate-200 bg-slate-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex items-center space-x-2 text-xs text-slate-500">
                <a href="{{ url('/') }}" class="hover:text-orange-600">Ana Sayfa</a>
                <span>/</span>
                <a href="{{ route('regional.index') }}" class="hover:text-orange-600">Hizmet Bölgelerimiz</a>
                <span>/</span>
                <span class="text-orange-600 font-bold">{{ $city->name }} Etiket Fabrikası</span>
            </nav>
        </div>
    </div>

    <!-- City Hero Section (Crisp Light Theme) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-slate-50 via-white to-orange-50/30 border border-slate-200 rounded-3xl p-8 sm:p-12 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-5">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-800">
                            Plaka: #{{ sprintf('%02d', $city->plate_code) }} • {{ $city->region }} Bölgesi
                        </span>
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
                            Teslimat: {{ $city->delivery_time ?? '24-48 Saat' }}
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        {{ $city->name }} Etiket Fabrikası
                        <span class="block text-orange-600 text-2xl sm:text-3xl md:text-4xl font-extrabold mt-1">
                            Toptan Rulo, Barkod & Kutu Ambalaj İmalatı
                        </span>
                    </h1>

                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed max-w-3xl">
                        {{ $city->name }} ve <strong class="text-slate-900">{{ $city->industrial_zones ?? 'Organize Sanayi Bölgesi' }}</strong> tesisleri için doğrudan üreticiden toptan rulo etiket, jakarlı dokuma arma ve ofset kutu ambalaj çözümleri. Aracısız fabrika fiyatı ve <strong class="text-slate-900">{{ $city->delivery_time ?? '24-48 saat' }}</strong> hızlı ambar sevkiyatı garantisi.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-wrap items-center gap-4 pt-3">
                        <a href="#cityQuoteForm" 
                           class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/20 transition-all">
                            <span>{{ $city->name }} İçin Fiyat Al</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba Göksan Etiket, ' . $city->name . ' fabrikamız için toptan rulo etiket fiyat teklifi almak istiyoruz.') }}" target="_blank"
                           class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs shadow-sm transition-all">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                            <span>{{ $city->name }} WhatsApp Hattı</span>
                        </a>

                        <a href="tel:+903425034652" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-white border border-slate-300 hover:bg-slate-50 text-slate-800 font-bold text-xs shadow-xs transition-all">
                            <span>📞 0342 503 46 52</span>
                        </a>
                    </div>
                </div>

                <!-- Right Visual OSB Badge Card -->
                <div class="lg:col-span-4">
                    <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-md space-y-4">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                            <span class="text-xs font-mono font-bold text-orange-600 uppercase">SEVKİYAT PLANI</span>
                            <span class="text-[11px] bg-emerald-50 text-emerald-700 px-2.5 py-0.5 rounded font-bold">● Aktif Hat</span>
                        </div>

                        <div class="space-y-3 text-xs text-slate-700">
                            <div class="flex justify-between items-center py-1 border-b border-slate-100">
                                <span class="text-slate-500">Hedef İl:</span>
                                <strong class="text-slate-900">{{ $city->name }}</strong>
                            </div>
                            <div class="flex justify-between items-center py-1 border-b border-slate-100">
                                <span class="text-slate-500">Teslim Süresi:</span>
                                <strong class="text-emerald-600">{{ $city->delivery_time ?? '24-48 Saat' }}</strong>
                            </div>
                            <div class="flex justify-between items-center py-1 border-b border-slate-100">
                                <span class="text-slate-500">Ambar Noktası:</span>
                                <strong class="text-slate-900">Anlaşmalı OSB Ambarı</strong>
                            </div>
                            <div class="flex justify-between items-center py-1">
                                <span class="text-slate-500">Numune Kiti:</span>
                                <strong class="text-orange-600">Ücretsiz Adrese Teslim</strong>
                            </div>
                        </div>

                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 text-[11px] text-slate-600">
                            <strong>Öncelikli Sanayi Alanları:</strong><br>
                            {{ $city->industrial_zones ?? $city->name . ' Organize Sanayi Bölgesi' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 Local Advantage Cards -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-xs space-y-2">
                <div class="w-10 h-10 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center text-xl mb-3">
                    🚚
                </div>
                <h3 class="text-base font-bold text-slate-900">{{ $city->name }} Hızlı Lojistik & Ambar</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Gaziantep merkez fabrikamızdan her gün {{ $city->name }} yönüne çıkan ambar ve kargo araçlarımız sayesinde acil rulo etiket ihtiyaçlarınız {{ $city->delivery_time }} içinde kapınızda.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-xs space-y-2">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl mb-3">
                    📦
                </div>
                <h3 class="text-base font-bold text-slate-900">{{ $city->name }} Ücretsiz Numune Kiti</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Etiket türüne, yapışkan gücüne (akrilik, nonperm, hotmelt) ve kuka çapına karar vermeden önce adresinize özel ücretsiz numune kataloğumuzu kargoluyoruz.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-xs space-y-2">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl mb-3">
                    💰
                </div>
                <h3 class="text-base font-bold text-slate-900">Doğrudan Üretici Fabrika Fiyatı</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Aracı, komisyoncu veya bayi payı olmadan doğrudan Gaziantep 1. OSB tesislerimizin toptan birim maliyetleriyle en rekabetçi fiyat teklifini sunuyoruz.
                </p>
            </div>
        </div>
    </section>

    <!-- Available Product Solutions for City -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10 space-y-2">
            <span class="text-xs font-bold uppercase tracking-widest text-orange-600">{{ $city->name }} İÇİN ÜRETİM GRUPLARI</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                {{ $city->name }} Sanayisine Özel Etiket & Ambalaj Çözümleri
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                8 renge kadar UV flekso baskı ve mikron hassasiyetinde kesim parkurumuzla üretilmektedir.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs space-y-3">
                <span class="text-2xl">🏷️</span>
                <h4 class="text-sm font-bold text-slate-900">Termal & Kuşe Rulo Etiket</h4>
                <p class="text-xs text-slate-500">Barkod yazıcılar için eko termal, lamine termal ve kuşe rulo etiketler.</p>
                <div class="text-[11px] font-semibold text-orange-600">25mm / 40mm / 76mm Kuka</div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs space-y-3">
                <span class="text-2xl">🛡️</span>
                <h4 class="text-sm font-bold text-slate-900">PP Opak & Plastik Etiket</h4>
                <p class="text-xs text-slate-500">Su, kimyasal, yağ ve sürtünmeye dayanıklı yırtılmaz polipropilen etiketler.</p>
                <div class="text-[11px] font-semibold text-orange-600">Dış Ortam & Soğuk Hava</div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs space-y-3">
                <span class="text-2xl">🧵</span>
                <h4 class="text-sm font-bold text-slate-900">Tekstil & Japon Akmaz</h4>
                <p class="text-xs text-slate-500">90°C yıkamaya dayanıklı kumaş şeritler ve jakarlı dokuma marka armaları.</p>
                <div class="text-[11px] font-semibold text-orange-600">Ağır Yıkama Dayanımlı</div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs space-y-3">
                <span class="text-2xl">📦</span>
                <h4 class="text-sm font-bold text-slate-900">Karton Kutu Ambalaj</h4>
                <p class="text-xs text-slate-500">Ofset baskılı dip kilitli karton kutular ve varak yaldızlı ürün ambalajları.</p>
                <div class="text-[11px] font-semibold text-orange-600">Gıda & İhracat Uyumlu</div>
            </div>
        </div>
    </section>

    <!-- Fast Quote Capture for City -->
    <section id="cityQuoteForm" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border-2 border-orange-500/20 rounded-3xl p-6 sm:p-10 shadow-lg">
            <div class="text-center mb-6 space-y-2">
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-800">
                    {{ $city->name }} FABRİKA FİYAT TEKLİFİ
                </span>
                <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">
                    {{ $city->name }} İçin 15 Dakikada Fiyat Teklifi Alın
                </h3>
                <p class="text-xs text-slate-600">
                    Mühendislerimiz talebinize göre birim maliyetinizi ve ambar sevkiyat planınızı hemen hazırlasın.
                </p>
            </div>

            <form action="{{ route('corporate.quote') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="city" value="{{ $city->name }}">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Firma / Yetkili Adı</label>
                        <input type="text" name="name" placeholder="{{ $city->name }} Sanayi Kuruluşu"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-800 focus:outline-none focus:border-orange-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Telefon Numarası *</label>
                        <input type="tel" name="phone" required placeholder="05XX XXX XX XX"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-800 focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Etiket / Ambalaj Türü</label>
                        <select name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-800 focus:outline-none focus:border-orange-500">
                            <option value="Rulo Kuşe Etiket">Rulo Kuşe Etiket</option>
                            <option value="Direkt Eko Termal">Eko Termal Rulo Etiket</option>
                            <option value="Lamine Termal">Lamine Termal (Top Termal)</option>
                            <option value="PP Opak Plastik">PP Opak (Plastik Su Geçirmez)</option>
                            <option value="Japon Akmaz">Japon Akmaz Kumaş</option>
                            <option value="Dokuma Etiket">Jakarlı Dokuma Arma</option>
                            <option value="Karton Kutu">Karton Kutu Ambalaj</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Ölçüler (En x Boy mm)</label>
                        <input type="text" name="dimensions" placeholder="Örn: 100x150 mm"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-800 focus:outline-none focus:border-orange-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Sipariş Miktarı</label>
                        <input type="text" name="quantity" placeholder="Örn: 20.000 adet / 50 rulo"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-800 focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Özel Talepler / Kuka Çapı / Notlar</label>
                    <textarea name="note" rows="2" placeholder="{{ $city->name }} OSB teslimatı veya özel hammadde gereksinimleri..."
                              class="w-full px-3.5 py-2 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-800 focus:outline-none focus:border-orange-500"></textarea>
                </div>

                <div class="pt-2 flex flex-col sm:flex-row gap-3">
                    <button type="submit" 
                            class="flex-1 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md transition-all">
                        {{ $city->name }} İçin Ücretsiz Teklif İste &rarr;
                    </button>
                    <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba, ' . $city->name . ' etiket siparişi için hızlı teklif almak istiyorum.') }}" target="_blank"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-md transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span>WhatsApp ile Sor</span>
                    </a>
                </div>
            </form>
        </div>
    </section>

    <!-- Internal Linking: Neighboring / Regional Cities Grid -->
    @if(isset($regionalCities) && $regionalCities->isNotEmpty())
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border-t border-slate-200 pt-10">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-base font-bold text-slate-900">
                        {{ $city->region }} Bölgesi Diğer Etiket Fabrikası Noktaları
                    </h3>
                    <p class="text-xs text-slate-500">Komşu sanayi şehirlerimize doğrudan ambar sevkiyat ağımız</p>
                </div>
                <a href="{{ route('regional.index') }}" class="text-xs font-bold text-orange-600 hover:text-orange-700">
                    Tüm 81 İli Gör &rarr;
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3">
                @foreach($regionalCities as $otherCity)
                    <a href="{{ route('regional.city', ['citySlug' => $otherCity->slug]) }}" 
                       class="bg-white border border-slate-200 hover:border-orange-500 p-3 rounded-xl text-center shadow-xs hover:shadow-md transition-all group">
                        <span class="block text-xs font-bold text-slate-800 group-hover:text-orange-600">{{ $otherCity->name }}</span>
                        <span class="block text-[10px] text-slate-400 mt-0.5">#{{ sprintf('%02d', $otherCity->plate_code) }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
@endsection
