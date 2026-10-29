@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div class="space-y-20 pb-16">

    <!-- 1. SPLIT HERO SECTION (PREMIUM LIGHT THEME) -->
    <section class="relative pt-10 pb-16 md:pt-16 md:pb-24 bg-gradient-to-b from-slate-50 via-white to-slate-50/50 border-b border-slate-200/80 overflow-hidden">
        <!-- Soft decorative background glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[400px] bg-gradient-to-tr from-amber-100/40 via-orange-100/30 to-blue-100/30 blur-3xl pointer-events-none -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                <!-- Left Hero Content -->
                <div class="lg:col-span-7 space-y-6 text-{{ $isRtl ? 'right' : 'left' }}">
                    <!-- Live Production Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-orange-50 border border-orange-200 text-orange-700 shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>{{ __('hero_badge') }}</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-3xl sm:text-5xl lg:text-5xl xl:text-6xl font-black tracking-tight text-slate-900 leading-[1.15]">
                        {{ __('hero_title') }}
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl font-normal">
                        {{ __('hero_subtitle') }}
                    </p>

                    <!-- 3 Value Propositions Checkmarks -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2 text-xs font-semibold text-slate-700">
                        <div class="flex items-center gap-2 bg-white px-3 py-2 rounded-xl border border-slate-200 shadow-xs">
                            <span class="text-emerald-600 font-bold text-sm">✓</span>
                            <span>{{ __('val_prop_factory_price') }}</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white px-3 py-2 rounded-xl border border-slate-200 shadow-xs">
                            <span class="text-emerald-600 font-bold text-sm">✓</span>
                            <span>{{ __('val_prop_flexo') }}</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white px-3 py-2 rounded-xl border border-slate-200 shadow-xs">
                            <span class="text-emerald-600 font-bold text-sm">✓</span>
                            <span>{{ __('val_prop_shipping') }}</span>
                        </div>
                    </div>

                    <!-- Double CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-4 pt-4">
                        <a href="#rfq-wizard" 
                           class="inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-sm shadow-lg shadow-orange-600/25 hover:-translate-y-0.5 transition-all">
                            <span>{{ __('btn_quote') }}</span>
                            <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill')) }}" target="_blank"
                           class="inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-sm shadow-md hover:-translate-y-0.5 transition-all">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                            <span>{{ __('btn_whatsapp') }}</span>
                        </a>

                        <a href="tel:+903425034652" class="hidden sm:inline-flex items-center gap-2 px-5 py-4 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-slate-800 text-sm font-bold shadow-xs transition-all">
                            <span dir="ltr">📞 +90 342 503 46 52</span>
                        </a>
                    </div>
                </div>

                <!-- Right Hero Visual Showcase Card -->
                <div class="lg:col-span-5">
                    <div class="relative bg-white border border-slate-200/90 rounded-3xl p-6 md:p-8 shadow-xl shadow-slate-200/60 overflow-hidden">
                        <!-- Top status bar -->
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-6">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-emerald-500 animate-ping"></span>
                                <span class="text-xs font-mono font-bold text-slate-800 tracking-wider">{{ __('factory_automation') }}</span>
                            </div>
                            <span class="text-[11px] bg-slate-100 text-slate-700 px-3 py-1 rounded-full font-semibold">{{ __('factory_osb_short') }}</span>
                        </div>

                        <!-- Graphical Roll Label Illustration with Specifications -->
                        <div class="relative bg-gradient-to-br from-slate-900 to-slate-800 rounded-2xl p-6 text-white overflow-hidden shadow-inner mb-6">
                            <div class="absolute -right-8 -bottom-8 w-40 h-40 bg-orange-500/20 rounded-full blur-2xl"></div>
                            
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-mono text-orange-400 font-bold uppercase tracking-wider">{{ __('industrial_roll_label') }}</span>
                                <span class="text-xs bg-orange-500 text-white px-2 py-0.5 rounded font-mono font-bold">UV FLEXO</span>
                            </div>

                            <!-- Central Spec Visualization -->
                            <div class="py-4 space-y-3">
                                <div class="flex justify-between items-center text-xs border-b border-slate-700/60 pb-2">
                                    <span class="text-slate-400">{{ __('spec_print_type') }}</span>
                                    <span class="font-bold text-white">{{ __('spec_print_type_val') }}</span>
                                </div>
                                <div class="flex justify-between items-center text-xs border-b border-slate-700/60 pb-2">
                                    <span class="text-slate-400">{{ __('spec_core_diameter') }}</span>
                                    <span class="font-bold text-orange-300" dir="ltr">25mm / 40mm / 76mm</span>
                                </div>
                                <div class="flex justify-between items-center text-xs border-b border-slate-700/60 pb-2">
                                    <span class="text-slate-400">{{ __('spec_raw_material') }}</span>
                                    <span class="font-bold text-white">{{ __('spec_raw_material_val') }}</span>
                                </div>
                                <div class="flex justify-between items-center text-xs">
                                    <span class="text-slate-400">{{ __('spec_tolerance') }}</span>
                                    <span class="font-bold text-emerald-400">{{ __('spec_tolerance_val') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3 Floating Quality Guarantee Badges -->
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-slate-800">
                                <span class="text-lg">🏆</span>
                                <div>
                                    <strong class="block text-slate-900">{{ __('badge_iso') }}</strong>
                                    <span class="text-[11px] text-slate-500">{{ __('badge_iso_sub') }}</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-slate-800">
                                <span class="text-lg">🍃</span>
                                <div>
                                    <strong class="block text-slate-900">{{ __('badge_food_grade') }}</strong>
                                    <span class="text-[11px] text-slate-500">{{ __('badge_food_grade_sub') }}</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-slate-800">
                                <span class="text-lg">📐</span>
                                <div>
                                    <strong class="block text-slate-900">{{ __('badge_dies') }}</strong>
                                    <span class="text-[11px] text-slate-500">{{ __('badge_dies_sub') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. TRUST & TECHNICAL STATS BAR -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center">
                <div class="text-2xl sm:text-3xl font-black text-slate-900 font-mono">{{ __('metric_flexo') }}</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ __('stat_res_sub') }}</div>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center">
                <div class="text-2xl sm:text-3xl font-black text-orange-600 font-mono">{{ __('metric_capacity') }}</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ __('stat_cap_sub') }}</div>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center">
                <div class="text-2xl sm:text-3xl font-black text-emerald-600 font-mono">{{ __('metric_delivery') }}</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ __('stat_deliv_sub') }}</div>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center">
                <div class="text-2xl sm:text-3xl font-black text-slate-900 font-mono">%100</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">{{ __('stat_price_sub') }}</div>
            </div>
        </div>
    </section>

    <!-- 3. PRODUCTS SECTION (MODERN TABBED / GRID INDUSTRIAL CATEGORIES) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <span class="text-xs font-bold uppercase tracking-widest text-orange-600">{{ __('sec_portfolio_badge') }}</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('sec_portfolio_title') }}
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                {{ __('sec_portfolio_subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Rulo & Termal Etiketler -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🏷️
                    </div>
                    <span class="text-[11px] font-mono font-bold text-orange-600 uppercase">#01</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_rulo') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        {{ __('cat_rulo_desc') }}
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_rulo_b1') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_rulo_b2') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_rulo_b3') }}</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Rulo Kuşe')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        {{ __('btn_get_price') }}
                    </a>
                </div>
            </div>

            <!-- Card 2: Plastik & PP Opak Etiketler -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🛡️
                    </div>
                    <span class="text-[11px] font-mono font-bold text-blue-600 uppercase">#02</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_plastik') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        {{ __('cat_plastik_desc') }}
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_plastik_b1') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_plastik_b2') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_plastik_b3') }}</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('PP Opak')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        {{ __('btn_get_price') }}
                    </a>
                </div>
            </div>

            <!-- Card 3: Tekstil & Dokuma Etiketler -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🧵
                    </div>
                    <span class="text-[11px] font-mono font-bold text-amber-600 uppercase">#03</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_tekstil') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        {{ __('cat_tekstil_desc') }}
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_tekstil_b1') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_tekstil_b2') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_tekstil_b3') }}</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.tekstil') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Japon Akmaz')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        {{ __('btn_get_price') }}
                    </a>
                </div>
            </div>

            <!-- Card 4: Güvenlik & Barkod Etiketleri -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🔒
                    </div>
                    <span class="text-[11px] font-mono font-bold text-red-600 uppercase">#04</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_guvenlik') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        {{ __('cat_guvenlik_desc') }}
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_guvenlik_b1') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_guvenlik_b2') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_guvenlik_b3') }}</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Güvenlik VOID')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        {{ __('btn_get_price') }}
                    </a>
                </div>
            </div>

            <!-- Card 5: Matbaa & Kutu Ambalaj -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        📦
                    </div>
                    <span class="text-[11px] font-mono font-bold text-purple-600 uppercase">#05</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_ozel') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        {{ __('cat_ozel_desc') }}
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_ozel_b1') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_ozel_b2') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> {{ __('cat_ozel_b3') }}</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.ambalaj') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Karton Kutu')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        {{ __('btn_get_price') }}
                    </a>
                </div>
            </div>

            <!-- Card 6: Özel Kalıp & Bıçak Çözümleri -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white rounded-3xl p-6 shadow-md flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-white/10 text-orange-400 flex items-center justify-center text-2xl mb-4">
                        ⚙️
                    </div>
                    <span class="text-[11px] font-mono font-bold text-orange-400 uppercase">{{ __('cat_custom_dies_badge') }}</span>
                    <h3 class="text-lg font-bold text-white mt-1 mb-2">{{ __('cat_custom_dies_title') }}</h3>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        {{ __('cat_custom_dies_desc') }}
                    </p>

                    <div class="space-y-1.5 text-xs text-slate-300 border-t border-slate-700/80 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-400">✓</span> {{ __('cat_custom_dies_b1') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-400">✓</span> {{ __('cat_custom_dies_b2') }}</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-400">✓</span> {{ __('cat_custom_dies_b3') }}</div>
                    </div>
                </div>

                <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill')) }}" target="_blank"
                   class="w-full py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs text-center transition-colors">
                    {{ __('btn_consult_engineer') }} &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- 4. MODERN MACHINERY & PRODUCTION CAPABILITIES -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 md:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-widest text-orange-600">{{ __('nav_machinery') }}</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        {{ __('machinery_title') }}
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        {{ __('machinery_subtitle') }}
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('corporate.machinery') }}" class="inline-flex items-center gap-2 text-xs font-bold text-orange-600 hover:text-orange-700">
                            {{ __('btn_view_machinery') }} &rarr;
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">🖨️</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">{{ __('machinery_m1_title') }}</h4>
                        <p class="text-xs text-slate-500">{{ __('machinery_m1_desc') }}</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">✂️</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">{{ __('machinery_m2_title') }}</h4>
                        <p class="text-xs text-slate-500">{{ __('machinery_m2_desc') }}</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">✨</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">{{ __('machinery_m3_title') }}</h4>
                        <p class="text-xs text-slate-500">{{ __('machinery_m3_desc') }}</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">🔄</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">{{ __('machinery_m4_title') }}</h4>
                        <p class="text-xs text-slate-500">{{ __('machinery_m4_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. INTERACTIVE RFQ & WHATSAPP ENGINE -->
    <section id="rfq-wizard" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border-2 border-orange-500/20 rounded-3xl p-6 sm:p-10 shadow-xl">
            <div class="max-w-3xl mx-auto text-center mb-10 space-y-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
                    ⚡ {{ __('rfq_title') }}
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    {{ __('rfq_title') }}
                </h2>
                <p class="text-xs sm:text-sm text-slate-600">
                    {{ __('rfq_subtitle') }}
                </p>
            </div>

            <!-- RFQ Wizard Form -->
            <form id="quoteForm" action="{{ route('corporate.quote') }}" method="POST" class="max-w-4xl mx-auto space-y-8">
                @csrf

                <!-- Step 1: Label Specs -->
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 space-y-4">
                    <div class="flex items-center gap-2 border-b border-slate-200 pb-3">
                        <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">1</span>
                        <h3 class="text-sm font-bold text-slate-900">{{ __('rfq_step1') }}</h3>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- Label Type -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_label_type') }}</label>
                            <select id="rfq_type" name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-medium focus:outline-none focus:border-orange-500">
                                <option value="{{ __('opt_rulo_kuse') }}">{{ __('opt_rulo_kuse') }}</option>
                                <option value="{{ __('opt_eko_termal') }}">{{ __('opt_eko_termal') }}</option>
                                <option value="{{ __('opt_lamine_termal') }}">{{ __('opt_lamine_termal') }}</option>
                                <option value="{{ __('opt_pp_opak') }}">{{ __('opt_pp_opak') }}</option>
                                <option value="{{ __('opt_seffaf_pp') }}">{{ __('opt_seffaf_pp') }}</option>
                                <option value="{{ __('opt_silver_mat') }}">{{ __('opt_silver_mat') }}</option>
                                <option value="{{ __('opt_japon_akmaz') }}">{{ __('opt_japon_akmaz') }}</option>
                                <option value="{{ __('opt_jakarli_dokuma') }}">{{ __('opt_jakarli_dokuma') }}</option>
                                <option value="{{ __('opt_guvenlik_void') }}">{{ __('opt_guvenlik_void') }}</option>
                                <option value="{{ __('opt_kutu_ambalaj') }}">{{ __('opt_kutu_ambalaj') }}</option>
                            </select>
                        </div>

                        <!-- Dimensions -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_dimensions') }}</label>
                            <input type="text" id="rfq_dims" name="dimensions" placeholder="{{ __('rfq_dimensions_ph') }}"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>

                        <!-- Quantity -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_quantity') }}</label>
                            <select id="rfq_qty" name="quantity" class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-medium focus:outline-none focus:border-orange-500">
                                <option value="{{ __('opt_qty_1k') }}">{{ __('opt_qty_1k') }}</option>
                                <option value="{{ __('opt_qty_5k') }}">{{ __('opt_qty_5k') }}</option>
                                <option value="{{ __('opt_qty_10k') }}" selected>{{ __('opt_qty_10k') }}</option>
                                <option value="{{ __('opt_qty_25k') }}">{{ __('opt_qty_25k') }}</option>
                                <option value="{{ __('opt_qty_50k') }}">{{ __('opt_qty_50k') }}</option>
                                <option value="{{ __('opt_qty_100k') }}">{{ __('opt_qty_100k') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Contact & Target City -->
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 space-y-4">
                    <div class="flex items-center gap-2 border-b border-slate-200 pb-3">
                        <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">2</span>
                        <h3 class="text-sm font-bold text-slate-900">{{ __('rfq_step2') }}</h3>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_company') }}</label>
                            <input type="text" id="rfq_name" name="name" placeholder="{{ __('rfq_company_ph') }}"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_phone') }} *</label>
                            <input type="tel" id="rfq_phone" name="phone" required placeholder="05XX XXX XX XX"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_city') }}</label>
                            <input type="text" id="rfq_city" name="city" placeholder="Gaziantep OSB, Bursa, Kocaeli..."
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_notes') }}</label>
                        <textarea id="rfq_notes" name="note" rows="2" placeholder="{{ __('rfq_notes_ph') }}"
                                  class="w-full px-3.5 py-2 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500"></textarea>
                    </div>
                </div>

                <!-- Submit Action Buttons: Dual Mode (WhatsApp or Email Form) -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                    <!-- WhatsApp Direct Quote Trigger -->
                    <button type="button" onclick="sendViaWhatsApp()" 
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs shadow-md glow-wa transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span>{{ __('btn_whatsapp_quote') }}</span>
                    </button>

                    <!-- Standard Database Lead Submission -->
                    <button type="submit" 
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/20 transition-all">
                        <span>{{ __('btn_submit_quote') }}</span>
                        <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- 6. HOMEPAGE REGIONAL TEASER (BAKPDKS.COM.TR SUCCESS MODEL - NO 81-CITY WALL ON HOMEPAGE) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white rounded-3xl p-8 md:p-12 shadow-xl">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-slate-700/80 pb-8 mb-8">
                <div class="space-y-2">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-500/20 border border-orange-500/40 text-orange-400 text-xs font-bold">
                        <span>📍</span> {{ __('regional_teaser_badge') }}
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                        {{ __('regional_teaser_title') }}
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-300 max-w-2xl">
                        {{ __('regional_teaser_subtitle') }}
                    </p>
                </div>

                <div>
                    <a href="{{ route('regional.index') }}" 
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/30 transition-all whitespace-nowrap">
                        <span>{{ __('btn_view_all_provinces') }}</span>
                        <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Key Industrial Hub Cards (Compact Highlighting) -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 text-center">
                <a href="{{ route('regional.city', ['citySlug' => 'gaziantep']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🏭</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Gaziantep OSB</strong>
                    <span class="block text-[10px] text-emerald-400 mt-0.5">{{ __('factory_osb_short') }}</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'istanbul']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🏙️</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">İstanbul İkitelli</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">{{ __('stat_fast_delivery') }}</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'bursa']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🚗</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Bursa Demirtaş</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">DOSAB</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'kocaeli']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">⚙️</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Kocaeli Gebze</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">GOSB</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'ankara']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🏛️</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Ankara OSTİM</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">İvedik OSB</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'izmir']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🚢</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">İzmir Kemalpaşa</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">İAOSB</span>
                </a>
            </div>
        </div>
    </section>

</div>

<!-- JavaScript for Interactive RFQ Wizard and WhatsApp Compilation -->
<script>
    function selectRfqType(typeName) {
        var sel = document.getElementById('rfq_type');
        if (sel) {
            for (var i = 0; i < sel.options.length; i++) {
                if (sel.options[i].text.includes(typeName) || sel.options[i].value.includes(typeName)) {
                    sel.selectedIndex = i;
                    break;
                }
            }
        }
    }

    function sendViaWhatsApp() {
        var type = document.getElementById('rfq_type')?.value || 'Rulo Etiket';
        var dims = document.getElementById('rfq_dims')?.value || 'Belirtilmedi';
        var qty = document.getElementById('rfq_qty')?.value || '10.000 Adet';
        var name = document.getElementById('rfq_name')?.value || 'Belirtilmedi';
        var phone = document.getElementById('rfq_phone')?.value || '';
        var city = document.getElementById('rfq_city')?.value || 'Belirtilmedi';
        var notes = document.getElementById('rfq_notes')?.value || '';

        var intro = @json(__('whatsapp_msg_intro'));
        var pLabel = @json(__('whatsapp_msg_prod'));
        var dLabel = @json(__('whatsapp_msg_dims'));
        var qLabel = @json(__('whatsapp_msg_qty'));
        var cLabel = @json(__('whatsapp_msg_company'));
        var phLabel = @json(__('whatsapp_msg_phone'));
        var ciLabel = @json(__('whatsapp_msg_city'));
        var nLabel = @json(__('whatsapp_msg_notes'));
        var outro = @json(__('whatsapp_msg_outro'));

        var msg = intro +
                  pLabel + type +
                  dLabel + dims +
                  qLabel + qty +
                  cLabel + name +
                  phLabel + phone +
                  ciLabel + city +
                  (notes ? nLabel + notes : "") +
                  outro;

        var url = "https://wa.me/905330246338?text=" + encodeURIComponent(msg);
        window.open(url, '_blank');
    }
</script>
@endsection
