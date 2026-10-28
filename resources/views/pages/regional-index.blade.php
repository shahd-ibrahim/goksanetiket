@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Manufacturer",
  "name": "GÖKSAN Etiket • Matbaa • Ambalaj",
  "url": "https://www.goksanetiket.com",
  "logo": "https://www.goksanetiket.com/assets/images/logo.png",
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
    "name": "Bölgesel Hizmetler (81 İl)",
    "item": "{{ route('regional.index') }}"
  }]
}
</script>
@endpush

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Hero Section -->
    <section class="text-center max-w-4xl mx-auto space-y-6">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-orange-500/10 border border-orange-500/30 text-orange-400">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            Türkiye Geneli 81 İl ve Tüm Organize Sanayi Bölgeleri (OSB)
        </div>

        <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
            Türkiye'nin Endüstriyel Rulo Etiket & Ambalaj Üretim Merkezi
        </h1>

        <p class="text-base text-slate-300 leading-relaxed max-w-2xl mx-auto">
            Gaziantep 1. OSB fabrikamızdan Türkiye'nin her noktasına doğrudan toptan rulo baskı! İlinizi seçerek size özel teslimat sürelerini ve organize sanayi sevkiyat avantajlarını hemen inceleyin.
        </p>

        <!-- Live Search Bar -->
        <div class="max-w-xl mx-auto relative pt-2">
            <input type="text" id="citySearch" placeholder="İl veya OSB adı yazın (Örn: Bursa, İkitelli, Başpınar, Denizli, OSTİM)..." 
                   class="w-full px-6 py-4 rounded-2xl bg-navy-900 border border-navy-750 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-orange-500 shadow-2xl">
            <svg class="w-5 h-5 text-slate-500 absolute right-5 top-7 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
    </section>

    <!-- Key Metrics Stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-navy-900 border border-navy-800 rounded-2xl p-6 text-center">
            <div class="text-3xl font-black text-white font-mono">81 İl</div>
            <div class="text-xs text-slate-400 mt-1">Tam Kapsama & Kapıya Teslim</div>
        </div>
        <div class="bg-navy-900 border border-navy-800 rounded-2xl p-6 text-center">
            <div class="text-3xl font-black text-orange-400 font-mono">350+</div>
            <div class="text-xs text-slate-400 mt-1">Organize Sanayi Bölgesi (OSB)</div>
        </div>
        <div class="bg-navy-900 border border-navy-800 rounded-2xl p-6 text-center">
            <div class="text-3xl font-black text-emerald-400 font-mono">24-48 Saat</div>
            <div class="text-xs text-slate-400 mt-1">Hızlı Ambar & Express Sevk</div>
        </div>
        <div class="bg-navy-900 border border-navy-800 rounded-2xl p-6 text-center">
            <div class="text-3xl font-black text-white font-mono">8 Renk UV</div>
            <div class="text-xs text-slate-400 mt-1">Flekso Rulo Baskı Parkuru</div>
        </div>
    </div>

    <!-- Grouped Cities by Region -->
    <div id="regionsSection" class="space-y-12">
        <div class="border-b border-navy-850 pb-4 flex items-center justify-between">
            <h2 class="text-2xl font-extrabold text-white flex items-center gap-2">
                <span>📍</span> Coğrafi Bölgelere Göre Fabrika Dağıtım Ağı
            </h2>
            <span class="text-xs text-slate-400">81 İl İndeksi</span>
        </div>

        @foreach($groupedCities as $regionName => $citiesList)
            <div class="region-block space-y-4">
                <div class="flex items-center justify-between border-b border-navy-850 pb-2">
                    <h3 class="text-base font-bold text-slate-200 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        {{ $regionName }} Bölgesi
                    </h3>
                    <span class="text-xs text-slate-500 font-bold bg-navy-950 px-2 py-0.5 rounded-full border border-navy-800">
                        {{ $citiesList->count() }} İl
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 city-grid">
                    @foreach($citiesList as $city)
                        <div class="city-card bg-navy-900 border border-navy-800 hover:border-orange-500/50 rounded-2xl p-5 transition-all duration-200 hover:-translate-y-0.5 shadow-lg flex flex-col justify-between"
                             data-name="{{ mb_strtolower($city->name, 'UTF-8') }}" 
                             data-zones="{{ mb_strtolower($city->industrial_zones, 'UTF-8') }}">
                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2.5">
                                        <span class="w-8 h-8 rounded-lg bg-navy-950 border border-navy-750 font-mono font-bold text-xs text-orange-400 flex items-center justify-center">
                                            {{ $city->formatted_plate }}
                                        </span>
                                        <h4 class="text-base font-bold text-white">
                                            <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" class="hover:text-orange-400 transition-colors">
                                                {{ $city->name }}
                                            </a>
                                        </h4>
                                    </div>
                                    <span class="text-[11px] font-semibold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-full">
                                        ⚡ {{ $city->delivery_time }}
                                    </span>
                                </div>

                                <p class="text-xs text-slate-400 leading-relaxed mb-4 line-clamp-2">
                                    <strong class="text-slate-300">OSB:</strong> {{ $city->industrial_zones }}
                                </p>
                            </div>

                            <div class="pt-3 border-t border-navy-800 flex items-center justify-between">
                                <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" class="text-xs font-semibold text-orange-400 hover:text-orange-300 flex items-center gap-1">
                                    <span>{{ $city->name }} Etiket Fabrikası</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('citySearch');
        const cards = document.querySelectorAll('.city-card');
        const regionBlocks = document.querySelectorAll('.region-block');

        searchInput.addEventListener('input', function (e) {
            const query = e.target.value.trim().toLowerCase();

            cards.forEach(card => {
                const name = card.getAttribute('data-name');
                const zones = card.getAttribute('data-zones');

                if (name.includes(query) || zones.includes(query)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            regionBlocks.forEach(block => {
                const visibleCards = block.querySelectorAll('.city-card[style*="display: flex"], .city-card:not([style*="display"])');
                const anyVisible = Array.from(visibleCards).some(c => c.style.display !== 'none');
                block.style.display = anyVisible ? 'block' : 'none';
            });
        });
    });
</script>
@endpush
@endsection
