@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div class="overflow-x-hidden">

    <!-- 1. MINIMALIST EUROPEAN HERO SECTION + FACTORY PRODUCTION VIDEO CONTAINER -->
    <section class="py-12 sm:py-16 lg:py-24 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                <!-- Left Column: Clean Industrial Headline & CTAs -->
                <div class="lg:col-span-6 space-y-6 text-{{ $isRtl ? 'right' : 'left' }}">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-orange-50 border border-orange-200/80 text-orange-700">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        <span>{{ $isRtl ? 'مصنع ملصقات الرول المطبوعة وغير المطبوعة' : 'Baskılı & Baskısız Endüstriyel Rulo Etiket Üreticisi' }}</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 leading-[1.15]">
                        @if($isRtl)
                            التميز الأوروبي في تصنيع <span class="text-orange-600">ملصقات الرول</span> والتغليف الصناعي
                        @else
                            Endüstriyel <span class="text-orange-600">Rulo Etiket</span> ve Ambalaj Üretiminde Güvenilir Çözüm Ortağınız
                        @endif
                    </h1>

                    <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl font-normal">
                        {{ $isRtl
                            ? 'من منشآتنا الحديثة في غازي عنتاب، نقدم حلول طباعة فليكسو UV حتى 8 ألوان، ملصقات الباركود، ملصقات النسيج وعلب التغليف بمعايير جودة عالمية.'
                            : 'Gaziantep 1. OSB’deki modern üretim tesislerimizde; 8 renk UV Flexo baskılı rulo etiket, barkod etiketleri, tekstil etiketleri ve kutu ambalaj üretimini doğrudan fabrika güvencesiyle sunuyoruz.' }}
                    </p>

                    <!-- Clean Action Buttons -->
                    <div class="flex flex-wrap items-center gap-3.5 pt-2">
                        <a href="#rfq-wizard"
                           class="inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-sm shadow-sm shadow-orange-600/20 transition-all">
                            <span>{{ $isRtl ? 'اطلب عرض سعر الآن' : 'Hemen Teklif Al' }}</span>
                            <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="{{ route('machinery') }}"
                           class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 border border-slate-200 font-bold text-sm transition-all">
                            <span>{{ $isRtl ? 'خطوط الإنتاج والتكنولوجيا' : 'Üretim & Teknoloji' }}</span>
                        </a>
                    </div>

                    <!-- Minimalist Key Metrics Row -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-100">
                        <div>
                            <div class="text-xl sm:text-2xl font-extrabold text-slate-900">8 Renk</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ $isRtl ? 'طباعة فليكسو UV' : 'UV Flexo Baskı' }}</div>
                        </div>
                        <div>
                            <div class="text-xl sm:text-2xl font-extrabold text-orange-600">24-48 Saat</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ $isRtl ? 'شحن سريع لـ 81 محافظة' : '81 İle Hızlı Sevkiyat' }}</div>
                        </div>
                        <div>
                            <div class="text-xl sm:text-2xl font-extrabold text-slate-900">ISO 9001</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ $isRtl ? 'معايير الجودة الصناعية' : 'Kalite Standartları' }}</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Factory Production Video Container -->
                <div class="lg:col-span-6">
                    <div class="relative rounded-2xl overflow-hidden bg-slate-900 border border-slate-200 shadow-xl aspect-video group">
                        <!-- HTML5 Video Element (Ready for /videos/factory-production.mp4 or YouTube/Vimeo embed) -->
                        <video id="factoryHeroVideo"
                               class="w-full h-full object-cover opacity-90 group-hover:opacity-95 transition-opacity"
                               playsinline
                               muted
                               loop
                               preload="metadata"
                               poster="{{ asset('images/darklogo.png') }}">
                            <source src="{{ asset('videos/factory-production.mp4') }}" type="video/mp4">
                        </video>

                        <!-- Architectural Industrial Video Overlay Placeholder -->
                        <div id="videoOverlay" class="absolute inset-0 bg-gradient-to-tr from-slate-950/90 via-slate-900/75 to-slate-900/50 flex flex-col justify-between p-6 sm:p-8">
                            <!-- Top Video Status Bar -->
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-white text-xs font-semibold border border-white/15">
                                    <span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
                                    <span>{{ $isRtl ? 'جولة في خطوط الإنتاج • غازي عنتاب' : 'Üretim Tesisi & Makine Parkuru' }}</span>
                                </span>
                                <span class="text-xs font-mono font-bold text-orange-400 bg-orange-500/10 border border-orange-500/30 px-2.5 py-1 rounded-lg">
                                    HD 1080p
                                </span>
                            </div>

                            <!-- Center Play Trigger Button -->
                            <div class="my-auto flex flex-col items-center text-center">
                                <button type="button"
                                        onclick="toggleFactoryVideo()"
                                        aria-label="Üretim Videosunu Oynat"
                                        class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-orange-600 hover:bg-orange-500 text-white flex items-center justify-center shadow-2xl shadow-orange-600/40 hover:scale-105 transition-all cursor-pointer">
                                    <svg class="w-7 h-7 sm:w-8 sm:h-8 translate-x-0.5 fill-current" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </button>
                                <span class="mt-3 text-xs sm:text-sm font-bold text-white tracking-wide">
                                    {{ $isRtl ? 'شاهد فيديو خطوط إنتاج الملصقات' : 'Fabrika Üretim Videosunu İzleyin' }}
                                </span>
                                <span class="text-[11px] text-slate-300 mt-0.5">
                                    {{ $isRtl ? 'طباعة فليكسو • فحص بصري • تقطيع أوتوماتيكي' : '8 Renk UV Flexo • Kalite Kontrol • Otomatik Dilimleme' }}
                                </span>
                            </div>

                            <!-- Bottom Technical Caption -->
                            <div class="flex items-center justify-between text-xs text-slate-300 border-t border-white/10 pt-3">
                                <span>GÖKSAN Etiket • Gaziantep 1. OSB</span>
                                <span class="font-mono text-orange-400">25mm / 40mm / 76mm Rulo</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. CLEAN PRODUCT SOLUTIONS SECTION (LIGHT NEUTRAL SLATE-50 BACKGROUND) -->
    <section class="py-14 sm:py-20 bg-slate-50 border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 sm:mb-14 gap-4">
                <div class="max-w-2xl space-y-2">
                    <span class="text-xs font-bold uppercase tracking-widest text-orange-600">
                        {{ __('sec_portfolio_badge') }}
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
                        {{ __('sec_portfolio_title') }}
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600">
                        {{ __('sec_portfolio_subtitle') }}
                    </p>
                </div>
                <a href="{{ route('rfq') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-orange-600 hover:text-orange-700 shrink-0">
                    <span>{{ $isRtl ? 'طلب تسعير خاص للمصانع' : 'Özel Ölçü & Toptan Fiyat İste' }}</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Card 1: Rulo & Termal Etiketler -->
                <div class="bg-white border border-slate-200/90 hover:border-orange-500 rounded-2xl p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                                01
                            </span>
                            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">UV Flexo & Termal</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2.5">{{ __('cat_rulo') }}</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            {{ __('cat_rulo_desc') }}
                        </p>
                        <ul class="space-y-2 text-xs font-medium text-slate-600 border-t border-slate-100 pt-4 mb-6">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_rulo_b1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_rulo_b2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_rulo_b3') }}</li>
                        </ul>
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                            {{ __('btn_details') }}
                        </a>
                        <a href="#rfq-wizard" onclick="selectRfqType('Rulo Kuşe')" class="px-4 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                            {{ __('btn_get_price') }}
                        </a>
                    </div>
                </div>

                <!-- Card 2: Plastik & PP Opak Etiketler -->
                <div class="bg-white border border-slate-200/90 hover:border-orange-500 rounded-2xl p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                                02
                            </span>
                            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">PP Opak • Şeffaf • PE</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2.5">{{ __('cat_plastik') }}</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            {{ __('cat_plastik_desc') }}
                        </p>
                        <ul class="space-y-2 text-xs font-medium text-slate-600 border-t border-slate-100 pt-4 mb-6">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_plastik_b1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_plastik_b2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_plastik_b3') }}</li>
                        </ul>
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                            {{ __('btn_details') }}
                        </a>
                        <a href="#rfq-wizard" onclick="selectRfqType('PP Opak')" class="px-4 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                            {{ __('btn_get_price') }}
                        </a>
                    </div>
                </div>

                <!-- Card 3: Tekstil & Dokuma Etiketler -->
                <div class="bg-white border border-slate-200/90 hover:border-orange-500 rounded-2xl p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                                03
                            </span>
                            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Dokuma & Japon Akmaz</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2.5">{{ __('cat_tekstil') }}</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            {{ __('cat_tekstil_desc') }}
                        </p>
                        <ul class="space-y-2 text-xs font-medium text-slate-600 border-t border-slate-100 pt-4 mb-6">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_tekstil_b1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_tekstil_b2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_tekstil_b3') }}</li>
                        </ul>
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="{{ route('corporate.tekstil') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                            {{ __('btn_details') }}
                        </a>
                        <a href="#rfq-wizard" onclick="selectRfqType('Japon Akmaz')" class="px-4 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                            {{ __('btn_get_price') }}
                        </a>
                    </div>
                </div>

                <!-- Card 4: Güvenlik & Demirbaş Etiketleri -->
                <div class="bg-white border border-slate-200/90 hover:border-orange-500 rounded-2xl p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                                04
                            </span>
                            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Silver Mat & VOID</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2.5">{{ __('cat_guvenlik') }}</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            {{ __('cat_guvenlik_desc') }}
                        </p>
                        <ul class="space-y-2 text-xs font-medium text-slate-600 border-t border-slate-100 pt-4 mb-6">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_guvenlik_b1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_guvenlik_b2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_guvenlik_b3') }}</li>
                        </ul>
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                            {{ __('btn_details') }}
                        </a>
                        <a href="#rfq-wizard" onclick="selectRfqType('Güvenlik VOID')" class="px-4 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                            {{ __('btn_get_price') }}
                        </a>
                    </div>
                </div>

                <!-- Card 5: Matbaa & Kutu Ambalaj -->
                <div class="bg-white border border-slate-200/90 hover:border-orange-500 rounded-2xl p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                                05
                            </span>
                            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Ofset & Kutu Ambalaj</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2.5">{{ __('cat_ozel') }}</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            {{ __('cat_ozel_desc') }}
                        </p>
                        <ul class="space-y-2 text-xs font-medium text-slate-600 border-t border-slate-100 pt-4 mb-6">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_ozel_b1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_ozel_b2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_ozel_b3') }}</li>
                        </ul>
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="{{ route('corporate.ambalaj') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                            {{ __('btn_details') }}
                        </a>
                        <a href="#rfq-wizard" onclick="selectRfqType('Karton Kutu')" class="px-4 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                            {{ __('btn_get_price') }}
                        </a>
                    </div>
                </div>

                <!-- Card 6: Özel Bıçak & Kalıp Üretimi -->
                <div class="bg-white border border-slate-200/90 hover:border-orange-500 rounded-2xl p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                                06
                            </span>
                            <span class="text-xs font-semibold text-orange-600 uppercase tracking-wider">{{ __('cat_custom_dies_badge') }}</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-slate-900 mb-2.5">{{ __('cat_custom_dies_title') }}</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            {{ __('cat_custom_dies_desc') }}
                        </p>
                        <ul class="space-y-2 text-xs font-medium text-slate-600 border-t border-slate-100 pt-4 mb-6">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_custom_dies_b1') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_custom_dies_b2') }}</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> {{ __('cat_custom_dies_b3') }}</li>
                        </ul>
                    </div>
                    <div class="pt-2">
                        <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill')) }}" target="_blank"
                           class="block w-full py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs text-center transition-colors">
                            {{ __('btn_consult_engineer') }} &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PRODUCTION & TECHNOLOGY SECTION (WHITE BACKGROUND) -->
    <section class="py-14 sm:py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                <div class="lg:col-span-5 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-widest text-orange-600">
                        {{ $isRtl ? 'الإنتاج والتكنولوجيا' : 'Üretim & Teknoloji' }}
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        {{ __('machinery_title') }}
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        {{ __('machinery_subtitle') }}
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('corporate.machinery') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-slate-100 hover:bg-orange-50 text-slate-900 hover:text-orange-600 text-xs font-bold transition-colors">
                            <span>{{ __('btn_view_machinery') }}</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200/80">
                        <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-orange-600 font-bold text-sm flex items-center justify-center mb-4">01</div>
                        <h4 class="text-base font-bold text-slate-900 mb-1.5">{{ __('machinery_m1_title') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">{{ __('machinery_m1_desc') }}</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200/80">
                        <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-orange-600 font-bold text-sm flex items-center justify-center mb-4">02</div>
                        <h4 class="text-base font-bold text-slate-900 mb-1.5">{{ __('machinery_m2_title') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">{{ __('machinery_m2_desc') }}</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200/80">
                        <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-orange-600 font-bold text-sm flex items-center justify-center mb-4">03</div>
                        <h4 class="text-base font-bold text-slate-900 mb-1.5">{{ __('machinery_m3_title') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">{{ __('machinery_m3_desc') }}</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200/80">
                        <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-orange-600 font-bold text-sm flex items-center justify-center mb-4">04</div>
                        <h4 class="text-base font-bold text-slate-900 mb-1.5">{{ __('machinery_m4_title') }}</h4>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">{{ __('machinery_m4_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. MANAGEMENT / TEAM SECTION (YÖNETİM KADROMUZ / KURUCULARIMIZ - STIKALABELS.BE INSPIRED) -->
    <section class="py-14 sm:py-20 bg-slate-50 border-b border-slate-200/70">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-2.5">
                <span class="text-xs font-bold uppercase tracking-widest text-orange-600">
                    {{ $isRtl ? 'القيادة والمؤسسون' : 'Yönetim Kadromuz & Kurucularımız' }}
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
                    {{ $isRtl ? 'إدارة عائلية بخبرة صناعية راسخة' : 'Üretim Gücümüzün Arkasındaki Yönetim' }}
                </h2>
                <p class="text-sm sm:text-base text-slate-600">
                    {{ $isRtl
                        ? 'نجمع بين الخبرة الصناعية المتوارثة والتكنولوجيا الحديثة لتقديم أعلى معايير الجودة لعملائنا في جميع أنحاء تركيا.'
                        : 'Göksan Etiket; aile değerlerini kurumsal mühendislik disipliniyle birleştirerek, müşterileriyle uzun vadeli ve şeffaf iş ortaklıkları kurar.' }}
                </p>
            </div>

            <!-- 2-Card Minimalist Profile Layout (Company Owner & Co-Founder Sibling) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">

                <!-- Profile Card 1: Firma Sahibi / Yönetim Kurulu Başkanı -->
                <div class="bg-white rounded-3xl border border-slate-200/90 p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col sm:flex-row gap-6 items-center sm:items-start">
                    <!-- Clean Portrait Placeholder Frame -->
                    <div class="w-32 h-40 sm:w-36 sm:h-44 rounded-2xl bg-slate-100 border border-slate-200 shrink-0 overflow-hidden flex flex-col items-center justify-center text-slate-400 relative">
                        <svg class="w-14 h-14 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.33 0-10 1.67-10 5v3h20v-3c0-3.33-6.67-5-10-5z"/>
                        </svg>
                        <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 mt-1">Kurucu / Fotoğraf</span>
                    </div>

                    <div class="space-y-3 text-center sm:text-{{ $isRtl ? 'right' : 'left' }}">
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full bg-orange-50 text-orange-700 border border-orange-200/70 text-[11px] font-bold uppercase tracking-wider">
                                {{ $isRtl ? 'صاحب الشركة • رئيس مجلس الإدارة' : 'Firma Sahibi & Yönetim Kurulu Başkanı' }}
                            </span>
                            <h3 class="text-xl font-extrabold text-slate-900 mt-2">
                                {{ $isRtl ? 'مؤسس وإدارة غوكسان للملصقات' : 'Kurucu Yönetici' }}
                            </h3>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            {{ $isRtl
                                ? '"هدفنا منذ اليوم الأول هو تزويد المصانع التركية بملصقات وتغليف يضاهي المعايير الأوروبية من حيث ثبات الألوان ودقة القص وسرعة التوريد."'
                                : '“Kurulduğumuz günden bu yana temel vizyonumuz; sanayicimize Avrupa standartlarında baskı kalitesi, sıfır hata toleransı ve zamanında sevkiyat güvencesi sunmaktır.”' }}
                        </p>
                        <div class="pt-2 flex items-center justify-center sm:justify-start gap-4 text-xs font-semibold text-slate-500">
                            <a href="mailto:info@goksanetiket.com" class="hover:text-orange-600 transition-colors">✉ info@goksanetiket.com</a>
                        </div>
                    </div>
                </div>

                <!-- Profile Card 2: Kurucu Ortak / Üretim & Operasyon Direktörü -->
                <div class="bg-white rounded-3xl border border-slate-200/90 p-6 sm:p-8 shadow-2xs hover:shadow-md transition-all flex flex-col sm:flex-row gap-6 items-center sm:items-start">
                    <!-- Clean Portrait Placeholder Frame -->
                    <div class="w-32 h-40 sm:w-36 sm:h-44 rounded-2xl bg-slate-100 border border-slate-200 shrink-0 overflow-hidden flex flex-col items-center justify-center text-slate-400 relative">
                        <svg class="w-14 h-14 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.33 0-10 1.67-10 5v3h20v-3c0-3.33-6.67-5-10-5z"/>
                        </svg>
                        <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 mt-1">Kurucu Ortak / Fotoğraf</span>
                    </div>

                    <div class="space-y-3 text-center sm:text-{{ $isRtl ? 'right' : 'left' }}">
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full bg-orange-50 text-orange-700 border border-orange-200/70 text-[11px] font-bold uppercase tracking-wider">
                                {{ $isRtl ? 'شريك مؤسس • مدير الإنتاج والعمليات' : 'Kurucu Ortak & Üretim Direktörü' }}
                            </span>
                            <h3 class="text-xl font-extrabold text-slate-900 mt-2">
                                {{ $isRtl ? 'الشريك المؤسس وإدارة العمليات' : 'Kurucu Ortak' }}
                            </h3>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            {{ $isRtl
                                ? '"نستثمر باستمرار في أحدث خطوط الفليكسو UV وتقنيات الفحص الرقمي لضمان حصول كل عميل على أفضل سعر مصنع وأعلى دقة تصنيع."'
                                : '“Gaziantep 1. OSB’deki makine parkurumuzu sürekli güncelleyerek, yüksek tirajlı endüstriyel siparişlerde hız, esneklik ve doğrudan üretici fiyat avantajı sağlıyoruz.”' }}
                        </p>
                        <div class="pt-2 flex items-center justify-center sm:justify-start gap-4 text-xs font-semibold text-slate-500">
                            <a href="tel:+903425034652" class="hover:text-orange-600 transition-colors" dir="ltr">📞 +90 342 503 46 52</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. INTERACTIVE RFQ & QUICK QUOTE SECTION (WHITE BACKGROUND) -->
    <section id="rfq-wizard" class="py-14 sm:py-20 bg-white border-b border-slate-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-10 lg:p-12 shadow-xs">
                <div class="max-w-2xl mx-auto text-center mb-8 sm:mb-10 space-y-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-50 border border-orange-200 text-orange-700">
                        {{ __('rfq_title') }}
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        {{ __('rfq_title') }}
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600">
                        {{ __('rfq_subtitle') }}
                    </p>
                </div>

                @if(session('quote_success'))
                    <div class="mb-6 p-4 rounded-2xl bg-orange-50 border border-orange-200 text-slate-900 text-xs sm:text-sm font-semibold text-center">
                        {{ session('quote_success') }}
                    </div>
                @endif

                <form id="quoteForm" action="{{ route('corporate.quote') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Step 1: Label Specs -->
                    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 space-y-4">
                        <div class="flex items-center gap-2.5 border-b border-slate-100 pb-3">
                            <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">1</span>
                            <h3 class="text-sm font-bold text-slate-900">{{ __('rfq_step1') }}</h3>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_label_type') }}</label>
                                <select id="rfq_type" name="product_type" class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-xs font-medium focus:bg-white focus:outline-none focus:border-orange-500">
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

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_dimensions') }}</label>
                                <input type="text" id="rfq_dims" name="dimensions" placeholder="{{ __('rfq_dimensions_ph') }}"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-xs focus:bg-white focus:outline-none focus:border-orange-500">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_quantity') }}</label>
                                <select id="rfq_qty" name="quantity" class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-xs font-medium focus:bg-white focus:outline-none focus:border-orange-500">
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

                    <!-- Step 2: Contact Info -->
                    <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 space-y-4">
                        <div class="flex items-center gap-2.5 border-b border-slate-100 pb-3">
                            <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">2</span>
                            <h3 class="text-sm font-bold text-slate-900">{{ __('rfq_step2') }}</h3>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_company') }}</label>
                                <input type="text" id="rfq_name" name="name" placeholder="{{ __('rfq_company_ph') }}"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-xs focus:bg-white focus:outline-none focus:border-orange-500">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_phone') }} *</label>
                                <input type="tel" id="rfq_phone" name="phone" required placeholder="05XX XXX XX XX"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-xs focus:bg-white focus:outline-none focus:border-orange-500">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_city') }}</label>
                                <input type="text" id="rfq_city" name="city" placeholder="Gaziantep, İstanbul, Bursa..."
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-xs focus:bg-white focus:outline-none focus:border-orange-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_notes') }}</label>
                            <textarea id="rfq_notes" name="note" rows="2" placeholder="{{ __('rfq_notes_ph') }}"
                                      class="w-full min-h-[64px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 text-xs focus:bg-white focus:outline-none focus:border-orange-500"></textarea>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                        <button type="button" onclick="sendViaWhatsApp()"
                                class="w-full sm:w-auto min-h-[48px] inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 border border-slate-200 font-bold text-xs transition-all cursor-pointer">
                            <span>{{ __('btn_whatsapp_quote') }}</span>
                        </button>

                        <button type="submit"
                                class="w-full sm:w-auto min-h-[48px] inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs shadow-sm shadow-orange-600/20 transition-all cursor-pointer">
                            <span>{{ __('btn_submit_quote') }}</span>
                            <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- 6. CLEAN LIGHT REGIONAL LOGISTICS & ONLINE PAYMENT STRIP -->
    <section class="py-12 sm:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">

                <!-- Regional Distribution Card (Light Minimalist) -->
                <div class="lg:col-span-8 bg-slate-50 border border-slate-200/90 rounded-3xl p-6 sm:p-8 flex flex-col justify-between">
                    <div class="space-y-2 mb-6">
                        <span class="text-xs font-bold uppercase tracking-widest text-orange-600">{{ __('regional_teaser_badge') }}</span>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">{{ __('regional_teaser_title') }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 max-w-2xl">{{ __('regional_teaser_subtitle') }}</p>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-2.5 text-center">
                        <a href="{{ route('regional.city', ['citySlug' => 'gaziantep']) }}" class="bg-white hover:border-orange-500 border border-slate-200 p-3 rounded-xl transition-all">
                            <strong class="block text-xs font-bold text-slate-900">Gaziantep</strong>
                            <span class="block text-[10px] text-orange-600 mt-0.5">Merkez OSB</span>
                        </a>
                        <a href="{{ route('regional.city', ['citySlug' => 'istanbul']) }}" class="bg-white hover:border-orange-500 border border-slate-200 p-3 rounded-xl transition-all">
                            <strong class="block text-xs font-bold text-slate-900">İstanbul</strong>
                            <span class="block text-[10px] text-slate-500 mt-0.5">İkitelli OSB</span>
                        </a>
                        <a href="{{ route('regional.city', ['citySlug' => 'bursa']) }}" class="bg-white hover:border-orange-500 border border-slate-200 p-3 rounded-xl transition-all">
                            <strong class="block text-xs font-bold text-slate-900">Bursa</strong>
                            <span class="block text-[10px] text-slate-500 mt-0.5">DOSAB</span>
                        </a>
                        <a href="{{ route('regional.city', ['citySlug' => 'kocaeli']) }}" class="bg-white hover:border-orange-500 border border-slate-200 p-3 rounded-xl transition-all">
                            <strong class="block text-xs font-bold text-slate-900">Kocaeli</strong>
                            <span class="block text-[10px] text-slate-500 mt-0.5">Gebze OSB</span>
                        </a>
                        <a href="{{ route('regional.city', ['citySlug' => 'ankara']) }}" class="bg-white hover:border-orange-500 border border-slate-200 p-3 rounded-xl transition-all">
                            <strong class="block text-xs font-bold text-slate-900">Ankara</strong>
                            <span class="block text-[10px] text-slate-500 mt-0.5">OSTİM</span>
                        </a>
                        <a href="{{ route('regional.index') }}" class="bg-orange-50 hover:bg-orange-100 border border-orange-200 p-3 rounded-xl transition-all flex flex-col justify-center">
                            <strong class="block text-xs font-bold text-orange-700">81 İl &rarr;</strong>
                            <span class="block text-[10px] text-orange-600 mt-0.5">Tüm Bölgeler</span>
                        </a>
                    </div>
                </div>

                <!-- Online Payment / Sanal POS Callout Card -->
                <div class="lg:col-span-4 bg-slate-50 border border-slate-200/90 rounded-3xl p-6 sm:p-8 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-orange-50 border border-orange-200 text-orange-700 text-xs font-bold">
                            💳 3D Secure Sanal POS
                        </span>
                        <h3 class="text-xl font-extrabold text-slate-900">
                            {{ $isRtl ? 'الدفع الإلكتروني للشركات' : 'Online Ödeme & Tahsilat' }}
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            {{ $isRtl
                                ? 'سدد دفعات الطلبات أو الحسابات الجارية بسهولة وأمان عبر نظام الدفع الإلكتروني ثلاثي الأبعاد.'
                                : 'Sipariş ve cari fatura ödemelerinizi tüm ticari kredi kartlarıyla 256-Bit SSL ve 3D Secure güvencesiyle online gerçekleştirin.' }}
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('payment') }}" class="w-full py-3.5 px-5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs inline-flex items-center justify-center gap-2 shadow-xs transition-all">
                            <span>{{ $isRtl ? 'انتقل إلى صفحة الدفع الإلكتروني' : 'Online Ödeme Sayfasına Git' }}</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<!-- JavaScript for Video Container & RFQ WhatsApp Compilation -->
<script>
    function toggleFactoryVideo() {
        var video = document.getElementById('factoryHeroVideo');
        var overlay = document.getElementById('videoOverlay');
        if (!video) return;
        if (video.paused) {
            video.play().then(function() {
                video.setAttribute('controls', 'controls');
                if (overlay) overlay.classList.add('hidden');
            }).catch(function() {
                window.location.href = "{{ route('machinery') }}";
            });
        } else {
            video.pause();
        }
    }

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
