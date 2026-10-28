@props(['currentCitySlug' => null, 'groupedCities' => null])

@php
    if (!$groupedCities) {
        $groupedCities = \Illuminate\Support\Facades\Cache::remember('all_cities_by_region', now()->addDay(), function () {
            $cities = \App\Models\City::orderBy('plate_code', 'asc')->get();
            $grouped = $cities->groupBy('region');
            
            $regionOrder = [
                'Marmara',
                'Ege',
                'İç Anadolu',
                'Akdeniz',
                'Karadeniz',
                'Güneydoğu Anadolu',
                'Doğu Anadolu',
            ];

            return collect($regionOrder)->mapWithKeys(function ($reg) use ($grouped) {
                return [$reg => $grouped->get($reg, collect())];
            });
        });
    }
@endphp

<div class="w-full bg-slate-900/90 border border-slate-800/80 rounded-2xl p-6 md:p-8 backdrop-blur-xl shadow-2xl">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-800 pb-6 mb-8">
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-500/10 border border-sky-500/20 text-sky-400 text-xs font-semibold mb-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Türkiye Geneli 81 İl Üretim & Dağıtım Ağı
            </div>
            <h3 class="text-xl md:text-2xl font-bold text-white tracking-tight">
                Tüm İllerimizde Endüstriyel Etiket Fabrikası
            </h3>
        </div>
        <p class="text-sm text-slate-400 max-width-md md:text-right">
            81 ilin tüm organize sanayi bölgelerine (OSB) <span class="text-amber-400 font-semibold">24-48 saat</span> içerisinde doğrudan sevkiyat.
        </p>
    </div>

    <div class="space-y-8">
        @foreach($groupedCities as $regionName => $citiesList)
            @if($citiesList->isNotEmpty())
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-2.5 h-2.5 rounded-full bg-sky-400 shadow-[0_0_10px_rgba(56,189,248,0.5)]"></span>
                        <h4 class="text-sm md:text-base font-bold uppercase tracking-wider text-slate-200">
                            {{ $regionName }} Bölgesi
                        </h4>
                        <span class="text-xs text-slate-500 font-medium bg-slate-800/80 px-2 py-0.5 rounded-full">
                            {{ $citiesList->count() }} İl
                        </span>
                        <div class="flex-1 h-px bg-slate-800"></div>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2.5">
                        @foreach($citiesList as $c)
                            @php
                                $isCurrent = ($currentCitySlug === $c->slug);
                            @endphp
                            <a href="{{ route('regional.city', ['citySlug' => $c->slug]) }}"
                               class="group flex items-center justify-between p-2.5 rounded-lg border text-xs transition-all duration-200 {{ $isCurrent ? 'bg-sky-500/20 border-sky-400/50 text-sky-200 shadow-lg shadow-sky-500/10' : 'bg-slate-950/50 border-slate-800/80 text-slate-300 hover:bg-slate-800/80 hover:border-slate-700 hover:text-white' }}">
                                <span class="font-medium truncate group-hover:translate-x-0.5 transition-transform">
                                    {{ $c->name }}
                                </span>
                                <span class="ml-1.5 font-mono text-[10px] px-1.5 py-0.5 rounded {{ $isCurrent ? 'bg-sky-400 text-slate-950 font-bold' : 'bg-slate-800 text-slate-400 group-hover:bg-slate-700 group-hover:text-slate-200' }}">
                                    {{ $c->formatted_plate }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
