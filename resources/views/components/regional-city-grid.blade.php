@props(['currentCitySlug' => null, 'groupedCities' => null])

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');

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

<div class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 md:p-8 shadow-xs text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-200 dark:border-slate-800 pb-4 mb-6">
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-100 dark:bg-orange-950/60 text-orange-800 dark:text-orange-300 text-xs font-bold mb-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                {{ __('factory_loc') }}
            </div>
            <h3 class="text-xl md:text-2xl font-black text-slate-900 dark:text-white tracking-tight">
                {{ __('regional_network_title') }}
            </h3>
        </div>
        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-400 max-w-md {{ $isRtl ? 'md:text-left' : 'md:text-right' }}">
            {{ __('regional_teaser_subtitle') }}
        </p>
    </div>

    <div class="space-y-6">
        @foreach($groupedCities as $regionName => $citiesList)
            @if($citiesList->isNotEmpty())
                @php
                    $regionKey = match($regionName) {
                        'Marmara' => 'region_marmara',
                        'Ege' => 'region_ege',
                        'İç Anadolu' => 'region_ic_anadolu',
                        'Akdeniz' => 'region_akdeniz',
                        'Karadeniz' => 'region_karadeniz',
                        'Güneydoğu Anadolu' => 'region_guneydogu',
                        'Doğu Anadolu' => 'region_dogu',
                        default => null,
                    };
                    $displayRegionName = $regionKey ? __($regionKey) : $regionName;
                @endphp
                <div>
                    <div class="flex items-center gap-2 mb-3">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-800 dark:text-slate-200">
                            {{ $displayRegionName }}
                        </h4>
                        <span class="text-[10px] text-slate-500 dark:text-slate-400 font-bold bg-white dark:bg-slate-800 px-2.5 py-0.5 rounded-full border border-slate-200 dark:border-slate-700">
                            {{ $citiesList->count() }} {{ $isRtl ? 'ولاية' : 'İl' }}
                        </span>
                        <div class="flex-1 h-px bg-slate-200 dark:bg-slate-800"></div>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2">
                        @foreach($citiesList as $c)
                            @php
                                $isCurrent = ($currentCitySlug === $c->slug);
                            @endphp
                            <a href="{{ route('regional.city', ['citySlug' => $c->slug]) }}"
                               class="group flex items-center justify-between px-3 py-2 rounded-xl text-xs transition-all {{ $isCurrent ? 'bg-orange-600 text-white font-bold shadow-xs' : 'bg-white dark:bg-slate-800/80 hover:bg-orange-50 dark:hover:bg-slate-700 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:text-orange-700 dark:hover:text-orange-400 hover:border-orange-300 dark:hover:border-slate-600' }}">
                                <span class="truncate">{{ $c->name }}</span>
                                <span class="text-[10px] {{ $isCurrent ? 'text-orange-100' : 'text-slate-400 dark:text-slate-500 group-hover:text-orange-600 dark:group-hover:text-orange-400' }} font-mono font-bold ml-1">
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
