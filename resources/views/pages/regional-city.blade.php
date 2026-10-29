@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');

    $regionKey = match($city->region) {
        'Marmara' => 'region_marmara',
        'Ege' => 'region_ege',
        'İç Anadolu' => 'region_ic_anadolu',
        'Akdeniz' => 'region_akdeniz',
        'Karadeniz' => 'region_karadeniz',
        'Güneydoğu Anadolu' => 'region_guneydogu',
        'Doğu Anadolu' => 'region_dogu',
        default => null,
    };
    $displayRegionName = $regionKey ? __($regionKey) : $city->region;
@endphp

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
    "name": "{{ __('nav_home') }}",
    "item": "{{ url('/') }}"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "{{ __('nav_regions') }}",
    "item": "{{ route('regional.index') }}"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "{{ $city->name }} {{ __('city_card_link') }}",
    "item": "{{ route('regional.city', ['citySlug' => $city->slug]) }}"
  }]
}
</script>
@endpush

@section('content')
<div class="space-y-16 pb-16">
    <!-- Breadcrumbs Navigation -->
    <div class="border-b border-slate-200 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-900/70 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex items-center space-x-2 text-xs text-slate-500 dark:text-slate-400">
                <a href="{{ url('/') }}" class="hover:text-orange-600 dark:hover:text-orange-400">{{ __('nav_home') }}</a>
                <span>/</span>
                <a href="{{ route('regional.index') }}" class="hover:text-orange-600 dark:hover:text-orange-400">{{ __('nav_regions') }}</a>
                <span>/</span>
                <span class="text-orange-600 dark:text-orange-400 font-bold">{{ $city->name }} {{ __('city_card_link') }}</span>
            </nav>
        </div>
    </div>

    <!-- City Hero Section (Crisp Light & Dark Theme) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-slate-50 via-white to-orange-50/30 dark:from-slate-900 dark:via-slate-900 dark:to-orange-950/20 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 sm:p-12 shadow-sm transition-colors">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-5 text-{{ $isRtl ? 'right' : 'left' }}">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-orange-100 dark:bg-orange-950/60 text-orange-800 dark:text-orange-300">
                            #{{ sprintf('%02d', $city->plate_code) }} • {{ $displayRegionName }}
                        </span>
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 dark:bg-emerald-950/60 text-emerald-800 dark:text-emerald-300 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
                            {{ __('city_delivery_time') }} {{ $isRtl ? __('stat_fast_delivery') : ($city->delivery_time ?? '24-48 Saat') }}
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-tight">
                        {{ $city->name }} {{ __('city_card_link') }}
                        <span class="block text-orange-600 dark:text-orange-400 text-2xl sm:text-3xl md:text-4xl font-extrabold mt-1">
                            {{ __('city_factory_h1_sub') }}
                        </span>
                    </h1>

                    <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 leading-relaxed max-w-3xl">
                        {{ $city->name }} {{ __('city_hero_desc') }}
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-wrap items-center gap-4 pt-3">
                        <a href="#cityQuoteForm" 
                           class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/20 transition-all">
                            <span>{{ __('btn_quote') }}</span>
                            <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill') . ' ' . $city->name) }}" target="_blank"
                           class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs shadow-sm transition-all">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                            <span>{{ __('btn_whatsapp') }}</span>
                        </a>

                        <a href="tel:+903425034652" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-white dark:bg-slate-800 border border-slate-300 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-800 dark:text-slate-200 font-bold text-xs shadow-xs transition-all">
                            <span dir="ltr">📞 +90 342 503 46 52</span>
                        </a>
                    </div>
                </div>

                <!-- Right Visual OSB Badge Card -->
                <div class="lg:col-span-4">
                    <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6 shadow-md space-y-4 transition-colors">
                        <div class="flex items-center justify-between border-b border-slate-100 dark:border-slate-800 pb-3">
                            <span class="text-xs font-mono font-bold text-orange-600 dark:text-orange-400 uppercase">{{ __('city_shipping_plan') }}</span>
                            <span class="text-[11px] bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 px-2.5 py-0.5 rounded font-bold">● {{ __('city_active_line') }}</span>
                        </div>

                        <div class="space-y-3 text-xs text-slate-700 dark:text-slate-300">
                            <div class="flex justify-between items-center py-1 border-b border-slate-100 dark:border-slate-800">
                                <span class="text-slate-500 dark:text-slate-400">{{ __('city_target_city') }}</span>
                                <strong class="text-slate-900 dark:text-white">{{ $city->name }}</strong>
                            </div>
                            <div class="flex justify-between items-center py-1 border-b border-slate-100 dark:border-slate-800">
                                <span class="text-slate-500 dark:text-slate-400">{{ __('city_delivery_time') }}</span>
                                <strong class="text-emerald-600 dark:text-emerald-400">{{ $isRtl ? __('stat_fast_delivery') : ($city->delivery_time ?? '24-48 Saat') }}</strong>
                            </div>
                            <div class="flex justify-between items-center py-1 border-b border-slate-100 dark:border-slate-800">
                                <span class="text-slate-500 dark:text-slate-400">{{ __('city_hub_point') }}</span>
                                <strong class="text-slate-900 dark:text-white">{{ __('city_hub_val') }}</strong>
                            </div>
                            <div class="flex justify-between items-center py-1">
                                <span class="text-slate-500 dark:text-slate-400">{{ __('city_sample_kit') }}</span>
                                <strong class="text-orange-600 dark:text-orange-400">{{ __('city_sample_kit_val') }}</strong>
                            </div>
                        </div>

                        <div class="p-3 bg-slate-50 dark:bg-slate-800/80 rounded-xl border border-slate-200 dark:border-slate-700 text-[11px] text-slate-600 dark:text-slate-300">
                            <strong class="text-slate-900 dark:text-white">{{ __('city_priority_zones') }}</strong><br>
                            {{ $city->industrial_zones ?? ($city->name . ' OSB') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 Local Advantage Cards -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6 shadow-xs space-y-2 text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
                <div class="w-10 h-10 rounded-xl bg-orange-100 dark:bg-orange-950/60 text-orange-600 dark:text-orange-400 flex items-center justify-center text-xl mb-3">
                    🚚
                </div>
                <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $city->name }} {{ __('city_adv_logistics_title') }}</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                    {{ __('city_adv_logistics_desc') }}
                </p>
            </div>

            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6 shadow-xs space-y-2 text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
                <div class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 flex items-center justify-center text-xl mb-3">
                    📦
                </div>
                <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $city->name }} {{ __('city_adv_sample_title') }}</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                    {{ __('city_adv_sample_desc') }}
                </p>
            </div>

            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6 shadow-xs space-y-2 text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl mb-3">
                    💰
                </div>
                <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ __('city_adv_price_title') }}</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                    {{ __('city_adv_price_desc') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Available Product Solutions for City -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10 space-y-2">
            <span class="text-xs font-bold uppercase tracking-widest text-orange-600 dark:text-orange-400">{{ __('city_prod_badge') }} {{ $city->name }}</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                {{ $city->name }} {{ __('city_prod_title') }}
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400">
                {{ __('city_prod_subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs space-y-3 transition-colors">
                <span class="text-2xl">🏷️</span>
                <h4 class="text-sm font-bold text-slate-900 dark:text-white">{{ __('cat_rulo') }}</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400">{{ __('cat_rulo_desc') }}</p>
                <div class="text-[11px] font-semibold text-orange-600 dark:text-orange-400">{{ __('cat_rulo_b1') }}</div>
            </div>

            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs space-y-3 transition-colors">
                <span class="text-2xl">🛡️</span>
                <h4 class="text-sm font-bold text-slate-900 dark:text-white">{{ __('cat_plastik') }}</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400">{{ __('cat_plastik_desc') }}</p>
                <div class="text-[11px] font-semibold text-orange-600 dark:text-orange-400">{{ __('cat_plastik_b1') }}</div>
            </div>

            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs space-y-3 transition-colors">
                <span class="text-2xl">🧵</span>
                <h4 class="text-sm font-bold text-slate-900 dark:text-white">{{ __('cat_tekstil') }}</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400">{{ __('cat_tekstil_desc') }}</p>
                <div class="text-[11px] font-semibold text-orange-600 dark:text-orange-400">{{ __('cat_tekstil_b1') }}</div>
            </div>

            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs space-y-3 transition-colors">
                <span class="text-2xl">📦</span>
                <h4 class="text-sm font-bold text-slate-900 dark:text-white">{{ __('cat_ozel') }}</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400">{{ __('cat_ozel_desc') }}</p>
                <div class="text-[11px] font-semibold text-orange-600 dark:text-orange-400">{{ __('cat_ozel_b1') }}</div>
            </div>
        </div>
    </section>

    <!-- Fast Quote Capture for City -->
    <section id="cityQuoteForm" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-slate-900 border-2 border-orange-500/20 dark:border-orange-500/30 rounded-3xl p-6 sm:p-10 shadow-lg transition-colors">
            <div class="text-center mb-6 space-y-2">
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-orange-100 dark:bg-orange-950/60 text-orange-800 dark:text-orange-300">
                    {{ $city->name }} {{ __('city_quote_badge') }}
                </span>
                <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 dark:text-white">
                    {{ $city->name }} {{ __('city_quote_title') }}
                </h3>
                <p class="text-xs text-slate-600 dark:text-slate-400">
                    {{ __('city_quote_desc') }}
                </p>
            </div>

            <form action="{{ route('corporate.quote') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="city" value="{{ $city->name }}">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">{{ __('rfq_company') }}</label>
                        <input type="text" name="name" placeholder="{{ $city->name }}"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-100 focus:outline-none focus:border-orange-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">{{ __('rfq_phone') }} *</label>
                        <input type="tel" name="phone" required placeholder="05XX XXX XX XX"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-100 focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">{{ __('rfq_label_type') }}</label>
                        <select name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-100 focus:outline-none focus:border-orange-500">
                            <option value="{{ __('opt_rulo_kuse') }}">{{ __('opt_rulo_kuse') }}</option>
                            <option value="{{ __('opt_eko_termal') }}">{{ __('opt_eko_termal') }}</option>
                            <option value="{{ __('opt_lamine_termal') }}">{{ __('opt_lamine_termal') }}</option>
                            <option value="{{ __('opt_pp_opak') }}">{{ __('opt_pp_opak') }}</option>
                            <option value="{{ __('opt_japon_akmaz') }}">{{ __('opt_japon_akmaz') }}</option>
                            <option value="{{ __('opt_jakarli_dokuma') }}">{{ __('opt_jakarli_dokuma') }}</option>
                            <option value="{{ __('opt_kutu_ambalaj') }}">{{ __('opt_kutu_ambalaj') }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">{{ __('rfq_dimensions') }}</label>
                        <input type="text" name="dimensions" placeholder="{{ __('rfq_dimensions_ph') }}"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-100 focus:outline-none focus:border-orange-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">{{ __('rfq_quantity') }}</label>
                        <input type="text" name="quantity" placeholder="{{ __('opt_qty_10k') }}"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-100 focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">{{ __('rfq_notes') }}</label>
                    <textarea name="note" rows="2" placeholder="{{ __('rfq_notes_ph') }}"
                              class="w-full px-3.5 py-2 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-xs text-slate-800 dark:text-slate-100 focus:outline-none focus:border-orange-500"></textarea>
                </div>

                <div class="pt-2 flex flex-col sm:flex-row gap-3">
                    <button type="submit" 
                            class="flex-1 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md transition-all">
                        {{ __('btn_submit_quote') }} &rarr;
                    </button>
                    <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill') . ' ' . $city->name) }}" target="_blank"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-md transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span>{{ __('btn_ask_whatsapp') }}</span>
                    </a>
                </div>
            </form>
        </div>
    </section>

    <!-- Internal Linking: Neighboring / Regional Cities Grid -->
    @if(isset($regionalCities) && $regionalCities->isNotEmpty())
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border-t border-slate-200 dark:border-slate-800 pt-10">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-base font-bold text-slate-900 dark:text-white">
                        {{ $displayRegionName }} {{ __('city_other_hubs_title') }}
                    </h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400">{{ __('city_other_hubs_desc') }}</p>
                </div>
                <a href="{{ route('regional.index') }}" class="text-xs font-bold text-orange-600 dark:text-orange-400 hover:text-orange-700 dark:hover:text-orange-300">
                    {{ __('btn_view_all_provinces') }} &rarr;
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3">
                @foreach($regionalCities as $otherCity)
                    <a href="{{ route('regional.city', ['citySlug' => $otherCity->slug]) }}" 
                       class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:border-orange-500 dark:hover:border-orange-500 p-3 rounded-xl text-center shadow-xs hover:shadow-md transition-all group">
                        <span class="block text-xs font-bold text-slate-800 dark:text-slate-200 group-hover:text-orange-600 dark:group-hover:text-orange-400">{{ $otherCity->name }}</span>
                        <span class="block text-[10px] text-slate-400 dark:text-slate-500 mt-0.5">#{{ sprintf('%02d', $otherCity->plate_code) }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
@endsection
