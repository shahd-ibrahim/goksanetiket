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

<div class="w-full bg-slate-50 border border-slate-200 rounded-3xl p-6 md:p-8 shadow-xs">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-200 pb-4 mb-6">
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-100 text-orange-800 text-xs font-bold mb-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Gaziantep 1. OSB'den Türkiye Geneli 81 İl Dağıtım Ağı
            </div>
            <h3 class="text-xl md:text-2xl font-black text-slate-900 tracking-tight">
                81 İlimizin Tamamında Endüstriyel Etiket & Ambalaj Fabrikası
            </h3>
        </div>
        <p class="text-xs md:text-sm text-slate-600 max-w-md md:text-right">
            81 ilin tüm organize sanayi bölgelerine (OSB) <span class="text-orange-600 font-bold">24-48 saat</span> içerisinde doğrudan ambar sevkiyatı.
        </p>
    </div>

    <div class="space-y-6">
        @foreach($groupedCities as $regionName => $citiesList)
            @if($citiesList->isNotEmpty())
                <div>
                    <div class="flex items-center gap-2 mb-3">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-800">
                            {{ $regionName }} Bölgesi
                        </h4>
                        <span class="text-[10px] text-slate-500 font-bold bg-white px-2 py-0.5 rounded-full border border-slate-200">
                            {{ $citiesList->count() }} İl
                        </span>
                        <div class="flex-1 h-px bg-slate-200"></div>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2">
                        @foreach($citiesList as $c)
                            @php
                                $isCurrent = ($currentCitySlug === $c->slug);
                            @endphp
                            <a href="{{ route('regional.city', ['citySlug' => $c->slug]) }}"
                               class="group flex items-center justify-between px-3 py-2 rounded-xl text-xs transition-all {{ $isCurrent ? 'bg-orange-600 text-white font-bold shadow-xs' : 'bg-white hover:bg-orange-50 border border-slate-200 text-slate-700 hover:text-orange-700 hover:border-orange-300' }}">
                                <span class="truncate">{{ $c->name }}</span>
                                <span class="text-[10px] {{ $isCurrent ? 'text-orange-100' : 'text-slate-400 group-hover:text-orange-600' }} font-mono font-bold ml-1">
                                    {{ sprintf('%02d', $c->plate_code) }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
