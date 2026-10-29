@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Manufacturer",
  "name": "GÖKSAN Etiket • Matbaa • Ambalaj",
  "url": "https://www.goksanetiket.com",
  "logo": "{{ asset('images/logo.png') }}",
  "description": "Gaziantep 1. OSB'den Türkiye genelinde 81 il ve organize sanayi bölgelerine toptan rulo etiket, dokuma etiket ve ambalaj sevkiyatı.",
  "telephone": "+90-342-503-4652",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31",
    "addressLocality": "Şehitkamil",
    "addressRegion": "Gaziantep",
    "postalCode": "27000",
    "addressCountry": "TR"
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
    "name": "Hizmet Bölgelerimiz (81 İl)",
    "item": "{{ route('regional.index') }}"
  }]
}
</script>
@endpush

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-12">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ url('/') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">Hizmet Bölgelerimiz (81 İl)</span>
    </nav>

    <!-- Header & Live Search Bar -->
    <section class="text-center max-w-4xl mx-auto space-y-6">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-orange-50 border border-orange-200 text-orange-700">
            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            Türkiye Geneli 81 İl ve Organize Sanayi Bölgeleri (OSB)
        </div>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            Türkiye'nin Endüstriyel Rulo Etiket & Ambalaj Fabrikası
        </h1>

        <p class="text-sm sm:text-base text-slate-600 leading-relaxed max-w-2xl mx-auto">
            Gaziantep 1. OSB modern tesislerimizden 81 ilimizin tüm organize sanayi bölgelerine doğrudan toptan rulo baskı! İlinizi seçerek teslimat sürelerini ve OSB lojistik avantajlarını inceleyin.
        </p>

        <!-- Live Instant Search Bar -->
        <div class="max-w-xl mx-auto relative pt-2">
            <input type="text" id="citySearch" placeholder="İl veya sanayi bölgesi arayın (Örn: Bursa, İkitelli, Başpınar, Gebze, Denizli)..." 
                   class="w-full px-5 py-4 pl-12 rounded-2xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 shadow-md transition-all">
            <svg class="w-5 h-5 text-slate-400 absolute left-4 top-6 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
    </section>

    <!-- Key Metrics Stats (Light Theme) -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white border border-slate-200 rounded-2xl p-5 text-center shadow-xs">
            <div class="text-2xl sm:text-3xl font-black text-slate-900 font-mono">81 İl</div>
            <div class="text-xs text-slate-500 mt-1">Tam Kapsama & Kapıya Teslim</div>
        </div>
        <div class="bg-white border border-slate-200 rounded-2xl p-5 text-center shadow-xs">
            <div class="text-2xl sm:text-3xl font-black text-orange-600 font-mono">350+</div>
            <div class="text-xs text-slate-500 mt-1">Organize Sanayi Bölgesi (OSB)</div>
        </div>
        <div class="bg-white border border-slate-200 rounded-2xl p-5 text-center shadow-xs">
            <div class="text-2xl sm:text-3xl font-black text-emerald-600 font-mono">24-48 Saat</div>
            <div class="text-xs text-slate-500 mt-1">Hızlı Ambar & Express Sevk</div>
        </div>
        <div class="bg-white border border-slate-200 rounded-2xl p-5 text-center shadow-xs">
            <div class="text-2xl sm:text-3xl font-black text-slate-900 font-mono">8 Renk UV</div>
            <div class="text-xs text-slate-500 mt-1">Flekso Rulo Baskı Parkuru</div>
        </div>
    </div>

    <!-- Grouped Cities by Region (Clean Directory Cards) -->
    <div id="regionsSection" class="space-y-12">
        <div class="border-b border-slate-200 pb-4 flex items-center justify-between">
            <h2 class="text-xl sm:text-2xl font-black text-slate-900 flex items-center gap-2">
                <span>📍</span> Coğrafi Bölgelere Göre Fabrika Dağıtım Ağı
            </h2>
            <span class="text-xs font-semibold text-slate-500">81 İl İndeksi</span>
        </div>

        @foreach($groupedCities as $regionName => $citiesList)
            <div class="region-block space-y-4">
                <div class="flex items-center justify-between border-b border-slate-200/80 pb-2">
                    <h3 class="text-sm font-bold text-slate-800 flex items-center gap-2 uppercase tracking-wide">
                        <span class="w-2.5 h-2.5 rounded-full bg-orange-500"></span>
                        <span>{{ $regionName }} Bölgesi</span>
                    </h3>
                    <span class="text-[11px] font-bold text-slate-500 bg-slate-100 px-2.5 py-0.5 rounded-full border border-slate-200">
                        {{ $citiesList->count() }} İl
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($citiesList as $city)
                        <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" 
                           class="city-card bg-white border border-slate-200 hover:border-orange-500 p-4 rounded-2xl shadow-xs hover:shadow-md transition-all group flex flex-col justify-between"
                           data-city-name="{{ mb_strtolower($city->name, 'UTF-8') }}"
                           data-industrial-zones="{{ mb_strtolower($city->industrial_zones ?? '', 'UTF-8') }}">
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-mono font-bold text-slate-400 group-hover:text-orange-600 transition-colors">
                                        #{{ sprintf('%02d', $city->plate_code) }}
                                    </span>
                                    <span class="text-[10px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded font-medium">
                                        {{ $city->delivery_time ?? '24-48 Saat' }}
                                    </span>
                                </div>

                                <h4 class="text-base font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                                    {{ $city->name }}
                                </h4>

                                <p class="text-[11px] text-slate-500 line-clamp-2 mt-1 leading-relaxed">
                                    {{ $city->industrial_zones ?? 'Organize Sanayi Bölgesi ve sanayi siteleri' }}
                                </p>
                            </div>

                            <div class="pt-3 border-t border-slate-100 mt-3 flex items-center justify-between text-[11px] font-semibold text-orange-600 group-hover:translate-x-1 transition-transform">
                                <span>Etiket Fabrikası &rarr;</span>
                                <span class="text-slate-400 font-normal">Toptan Fiyat</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- No Search Results Found Alert -->
    <div id="noResults" class="hidden text-center py-16 bg-white border border-slate-200 rounded-3xl space-y-3">
        <span class="text-4xl">🔍</span>
        <h3 class="text-base font-bold text-slate-800">Aradığınız il veya OSB bulunamadı</h3>
        <p class="text-xs text-slate-500">Lütfen farklı bir şehir veya organize sanayi bölgesi adı giriniz.</p>
    </div>
</div>

<!-- Instant Real-Time Search Filter Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('citySearch');
        const cityCards = document.querySelectorAll('.city-card');
        const regionBlocks = document.querySelectorAll('.region-block');
        const noResults = document.getElementById('noResults');

        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                const query = e.target.value.trim().toLowerCase();
                let anyVisible = false;

                regionBlocks.forEach(block => {
                    let visibleInRegion = 0;
                    const cards = block.querySelectorAll('.city-card');

                    cards.forEach(card => {
                        const cityName = card.getAttribute('data-city-name') || '';
                        const osb = card.getAttribute('data-industrial-zones') || '';

                        if (cityName.includes(query) || osb.includes(query)) {
                            card.classList.remove('hidden');
                            visibleInRegion++;
                            anyVisible = true;
                        } else {
                            card.classList.add('hidden');
                        }
                    });

                    if (visibleInRegion > 0) {
                        block.classList.remove('hidden');
                    } else {
                        block.classList.add('hidden');
                    }
                });

                if (noResults) {
                    if (!anyVisible) {
                        noResults.classList.remove('hidden');
                    } else {
                        noResults.classList.add('hidden');
                    }
                }
            });
        }
    });
</script>
@endsection
