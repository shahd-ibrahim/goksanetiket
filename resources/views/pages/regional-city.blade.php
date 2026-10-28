@extends('layouts.app')

@section('content')
@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Manufacturer",
  "name": "GÖKSAN Etiket • {{ $city->name }} Rulo Etiket & Ambalaj Fabrikası",
  "image": "{{ asset('assets/images/logo.png') }}",
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
  "description": "{{ $city->name }} ve {{ $city->industrial_zones }} organize sanayi bölgelerine toptan rulo etiket, dokuma arma ve ambalaj üretimi."
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
    "name": "Bölgesel Hizmetler",
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
      "name": "{{ $city->name }} içine etiket siparişi teslimat süresi nedir?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "{{ $city->name }} ve bağlı organize sanayi bölgelerine üretim sonrası sevkiyat süremiz ortalama {{ $city->delivery_time }}dir. Acil siparişlerde anlaşmalı ambar ve özel ekspres sevkiyat sunulmaktadır."
      }
    },
    {
      "@type": "Question",
      "name": "{{ $city->name }} organize sanayi bölgelerine toptan sevkiyat yapıyor musunuz?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Evet, {{ $city->industrial_zones }} başta olmak üzere {{ $city->name }} genelindeki tüm fabrikalara kapıya teslim rulo etiket ve ambalaj sevkiyatı yapıyoruz."
      }
    },
    {
      "@type": "Question",
      "name": "Minimum sipariş adedi ve numune gönderimi var mı?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "1.000 adetten başlayan deneme siparişleri ve yüksek tirajlı rulo baskı yapabilmekteyiz. İsteğiniz üzerine adresinize ücretsiz numune kiti kargolanmaktadır."
      }
    }
  ]
}
</script>
@endpush

<div class="min-h-screen bg-navy-950 text-slate-100">
    <!-- Breadcrumbs Navigation -->
    <div class="border-b border-navy-850 bg-navy-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5">
            <nav class="flex items-center space-x-2 text-xs text-slate-400">
                <a href="{{ url('/') }}" class="hover:text-orange-400 transition-colors">Ana Sayfa</a>
                <span class="text-slate-600">/</span>
                <a href="{{ route('regional.index') }}" class="hover:text-orange-400 transition-colors">Bölgesel Hizmetler</a>
                <span class="text-slate-600">/</span>
                <span class="text-orange-400 font-medium">{{ $city->name }} Etiket Fabrikası</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section (Primary Dark Navy #162c42 & Vibrant Accent Orange #ea6110) -->
    <section class="relative overflow-hidden bg-gradient-to-b from-navy-900 via-navy-900/90 to-navy-950 pt-14 pb-20 border-b border-navy-850">
        <!-- Ambient Radial Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-orange-500/10 blur-[130px] pointer-events-none rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl">
                <!-- Location Badges -->
                <div class="flex flex-wrap items-center gap-3 mb-6">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-orange-500/10 border border-orange-500/30 text-orange-400">
                        <span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
                        Plaka: {{ $city->formatted_plate }} • {{ $city->region }} Bölgesi
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-emerald-500/10 border border-emerald-500/30 text-emerald-400">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        Teslimat Süresi: {{ $city->delivery_time }}
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-navy-850 text-slate-300 border border-navy-750">
                        🏭 Gaziantep 1. OSB Üretim Tesisi
                    </span>
                </div>

                <!-- Targeted H1 Heading -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black tracking-tight text-white mb-6 leading-[1.14]">
                    {{ $city->name }} Etiket Fabrikası
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-orange-500 to-amber-300 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold mt-2">
                        Toptan Rulo, Dokuma & Kutu Ambalaj Üretimi
                    </span>
                </h1>

                <!-- Local Intent Paragraph -->
                <p class="text-base sm:text-lg text-slate-300 mb-8 leading-relaxed max-w-3xl">
                    <strong class="text-white">{{ $city->name }}</strong> ilimizdeki tüm sanayi kuruluşları ve fabrikalar için doğrudan üreticiden toptan rulo barkod etiketleri, jakarlı dokuma etiketler ve özel ambalaj kutuları imal ediyoruz. <span class="text-orange-300 font-semibold">{{ $city->industrial_zones }}</span> sanayi kümelerine <span class="text-amber-400 font-bold">{{ $city->delivery_time }}</span> içerisinde anlaşmalı ambar filomuzla teslimat.
                </p>

                <!-- High-Converting CTAs -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#quote-form" 
                       class="inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-black text-base shadow-xl shadow-orange-500/25 hover:-translate-y-0.5 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Hızlı Fiyat Teklifi Al
                    </a>

                    <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba, ' . $city->name . ' etiket fabrikası için toptan rulo etiket teklifi almak istiyorum.') }}" 
                       target="_blank" 
                       class="inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-base shadow-xl shadow-emerald-500/20 hover:-translate-y-0.5 transition-all">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        WhatsApp ile {{ $city->name }} Teklifi
                    </a>

                    <a href="tel:+903425034652" class="inline-flex items-center gap-2 px-5 py-4 rounded-xl border border-navy-700 bg-navy-850 hover:bg-navy-800 text-slate-200 hover:text-white font-bold text-sm transition-all">
                        <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        0342 503 46 52
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Industrial Zones Banner for City -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-6 relative z-10">
        <div class="bg-gradient-to-r from-navy-850 to-navy-900 border border-navy-750 rounded-2xl p-6 shadow-2xl flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="space-y-1">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-400 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    {{ $city->name }} Organize Sanayi Kapsamı
                </span>
                <p class="text-slate-100 text-sm md:text-base font-semibold">
                    {{ $city->industrial_zones }}
                </p>
                <p class="text-xs text-slate-400">
                    Bölgedeki fabrikalar için düzenli lojistik ve express ambar sevkiyatı mevcuttur.
                </p>
            </div>
            <div class="shrink-0 bg-navy-950 border border-navy-800 rounded-xl px-5 py-3 text-center">
                <span class="text-[11px] uppercase tracking-wider text-slate-400 block">Sevkiyat Hızı</span>
                <span class="text-xl font-extrabold text-orange-400 font-mono">{{ $city->delivery_time }}</span>
            </div>
        </div>
    </div>

    <!-- Local Advantage Cards (3 Columns) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-3">
                {{ $city->name }} Sanayisine Özel Fabrika Avantajlarımız
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                Üretim hattınızın durmaması ve ambalaj kalitenizin yükselmesi için tasarlanan kurumsal standartlarımız.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1: Hızlı Teslimat & Lojistik -->
            <div class="group relative bg-navy-900 border border-navy-800 hover:border-orange-500/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 shadow-xl">
                <div class="w-14 h-14 rounded-xl bg-orange-500/10 border border-orange-500/20 text-orange-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">
                    Hızlı Teslimat & Lojistik
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    {{ $city->name }} ve bağlı sanayi sitelerine ortalama <strong class="text-orange-400">{{ $city->delivery_time }}</strong> teslimat garantisi. Acil siparişlerde anlaşmalı ambar ve ekspres kurye desteği.
                </p>
                <div class="pt-4 border-t border-navy-800 text-xs text-orange-400 font-semibold flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    {{ $city->name }} Kapıya Teslim
                </div>
            </div>

            <!-- Card 2: Ücretsiz Numune -->
            <div class="group relative bg-navy-900 border border-navy-800 hover:border-emerald-500/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 shadow-xl">
                <div class="w-14 h-14 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">
                    Ücretsiz Numune Kiti
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    {{ $city->name }} bölgesindeki imalatçı firmalar için yapışkan dayanımı ve barkod yazıcı testlerine özel ücretsiz numune rulo paketi kargoluyoruz.
                </p>
                <div class="pt-4 border-t border-navy-800 text-xs text-emerald-400 font-semibold flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Sıfır Risk & Önceden Test
                </div>
            </div>

            <!-- Card 3: Fabrika Doğrudan Fiyat -->
            <div class="group relative bg-navy-900 border border-navy-800 hover:border-amber-500/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 shadow-xl">
                <div class="w-14 h-14 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">
                    Fabrika Doğrudan Fiyat
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    Gaziantep 1. OSB tesislerimizde toptan hammadde ithalatımız sayesinde aracı komisyonu olmadan en rekabetçi toptan fabrika fiyatları.
                </p>
                <div class="pt-4 border-t border-navy-800 text-xs text-amber-400 font-semibold flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Toptan Alımlarda %30+ Tasarruf
                </div>
            </div>
        </div>
    </section>

    <!-- Products Showcase Grid -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-navy-850">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
            <div>
                <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-orange-400 mb-2">
                    <span class="w-2 h-2 rounded-full bg-orange-400"></span>
                    Üretim Portföyümüz
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    {{ $city->name }} İçin Ürettiğimiz Etiket & Ambalaj Çeşitleri
                </h2>
                <p class="text-sm text-slate-400 mt-2 max-w-2xl">
                    Endüstriyel barkod yazıcılar, tekstil hazır giyim ve ambalaj hatları için üretilen çözümlerimiz.
                </p>
            </div>
            <a href="#quote-form" class="inline-flex items-center gap-2 text-xs font-semibold text-orange-400 hover:text-orange-300 border border-orange-500/30 bg-orange-500/10 px-4 py-2.5 rounded-lg transition-colors">
                Özel Ebat Teklifi İste &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="group flex flex-col justify-between bg-navy-900 border border-navy-800 hover:border-orange-500/50 rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-1 shadow-lg">
                    <div>
                        <div class="relative w-full h-48 bg-navy-950 overflow-hidden">
                            @if(!empty($product->images) && count($product->images) > 0)
                                <img src="{{ $product->images[0] }}" 
                                     alt="{{ $city->name }} {{ $product->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-600 text-xs">
                                    GÖKSAN
                                </div>
                            @endif
                            <div class="absolute top-3 left-3 bg-navy-950/90 backdrop-blur-md px-2.5 py-1 rounded-md text-[11px] font-bold text-orange-400 border border-navy-800">
                                {{ $city->name }} İmalatı
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-white mb-2 group-hover:text-orange-400 transition-colors">
                                <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $city->slug]) }}">
                                    {{ $product->title }}
                                </a>
                            </h3>
                            <p class="text-xs text-slate-400 leading-relaxed mb-4 line-clamp-3">
                                {{ $product->short_description }}
                            </p>

                            @if(!empty($product->specs) && is_array($product->specs))
                                <div class="space-y-1.5 pt-3 border-t border-navy-800">
                                    @foreach(array_slice($product->specs, 0, 2) as $k => $v)
                                        <div class="flex items-center justify-between text-[11px]">
                                            <span class="text-slate-500">{{ $k }}:</span>
                                            <span class="text-slate-300 font-medium truncate max-w-[160px]">{{ $v }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $city->slug]) }}" 
                           class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-navy-850 hover:bg-orange-500 text-slate-200 hover:text-white font-semibold text-xs border border-navy-750 hover:border-orange-500 transition-all duration-200">
                            {{ $city->name }} Fiyatı & Detay
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Quote Request Section -->
    <section id="quote-form" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-navy-850">
        <div class="bg-gradient-to-br from-navy-850 via-navy-900 to-navy-950 border border-navy-750 rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-orange-500/10 blur-[100px] pointer-events-none rounded-full"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-5 space-y-6">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-orange-500/10 border border-orange-500/30 text-orange-400">
                        ⚡ 15 Dakika İçinde Fiyat Teklifi
                    </span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight">
                        {{ $city->name }} İçin Fabrikadan Hızlı Teklif Alın
                    </h2>
                    <p class="text-sm md:text-base text-slate-300 leading-relaxed">
                        Etiket türünüzü, ölçülerinizi ve adet miktarını iletin; Gaziantep 1. OSB fabrikamızdaki müşteri temsilcimiz {{ $city->name }} sevkiyat koşulları ve toptan fabrika fiyatınızı anında hazırlasın.
                    </p>

                    <div class="space-y-3.5 pt-2">
                        <div class="flex items-center gap-3 text-xs md:text-sm text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">✓</span>
                            <span>{{ $city->name }} sanayi ve fabrikalarına ücretsiz numune</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs md:text-sm text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">✓</span>
                            <span>{{ $city->delivery_time }} içinde express ambar ve kargo teslimi</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs md:text-sm text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">✓</span>
                            <span>Masaüstü ve endüstriyel tüm barkod yazıcılarla tam uyum</span>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-navy-800">
                        <p class="text-xs text-slate-400 mb-2">Doğrudan fabrikayı aramak ister misiniz?</p>
                        <a href="tel:+903425034652" class="text-xl font-bold text-white hover:text-orange-400 transition-colors flex items-center gap-2">
                            <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            +90 342 503 46 52
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7 bg-navy-950/80 border border-navy-800 rounded-2xl p-6 md:p-8 backdrop-blur-xl">
                    <form onsubmit="event.preventDefault(); alert('Talebiniz başarıyla alındı! {{ $city->name }} satış temsilcimiz sizinle 15 dakika içinde iletişime geçecektir.');" class="space-y-4">
                        <input type="hidden" name="city" value="{{ $city->name }}">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Etiket Türü *</label>
                                <select required class="w-full px-3.5 py-2.5 rounded-lg bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                                    <option value="">Seçiniz...</option>
                                    @foreach($products as $p)
                                        <option value="{{ $p->slug }}">{{ $p->title }}</option>
                                    @endforeach
                                    <option value="ozel">Özel İmalat / Diğer</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Sipariş Miktarı *</label>
                                <input type="text" placeholder="Örn: 5.000 adet veya 50 rulo" required
                                       class="w-full px-3.5 py-2.5 rounded-lg bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Ölçüler (En x Boy mm)</label>
                                <input type="text" placeholder="Örn: 100x150 mm veya 80x40 mm"
                                       class="w-full px-3.5 py-2.5 rounded-lg bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Telefon Numaranız *</label>
                                <input type="tel" placeholder="05XX XXX XX XX" required
                                       class="w-full px-3.5 py-2.5 rounded-lg bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1.5">Tasarım / Logo Yükle (İsteğe Bağlı)</label>
                            <input type="file" accept=".pdf,.ai,.psd,.jpg,.png"
                                   class="w-full px-3.5 py-2 rounded-lg bg-navy-900 border border-navy-750 text-slate-400 text-xs file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-orange-500/20 file:text-orange-300">
                        </div>

                        <div class="pt-2">
                            <button type="submit" 
                                    class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-400 hover:to-orange-500 text-white font-black text-sm shadow-xl shadow-orange-500/25 transition-all">
                                <span>{{ $city->name }} İçin Ücretsiz Teklif Al</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Regional Cross-linking & 81-City Matrix -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-navy-850">
        @if(isset($regionalCities) && $regionalCities->count() > 0)
            <div class="mb-10">
                <h3 class="text-base font-bold text-slate-300 mb-4 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-orange-400"></span>
                    {{ $city->region }} Bölgesindeki Diğer Etiket Fabrikası Lokasyonlarımız:
                </h3>
                <div class="flex flex-wrap gap-2.5">
                    @foreach($regionalCities as $neighbor)
                        <a href="{{ route('regional.city', ['citySlug' => $neighbor->slug]) }}" 
                           class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-navy-900 border border-navy-800 text-xs text-slate-300 hover:text-white hover:border-orange-500/50 transition-all">
                            <span>{{ $neighbor->name }} Etiket Fabrikası</span>
                            <span class="font-mono text-[10px] text-orange-400">({{ $neighbor->formatted_plate }})</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        <x-regional-city-grid :currentCitySlug="$city->slug" />
    </section>
</div>
@endsection
