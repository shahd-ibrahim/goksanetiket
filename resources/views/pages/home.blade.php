@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div>

    <!-- 1. HERO SECTION: CLEAN, SPACIOUS SPLIT BANNER INSPIRED BY STIKALABELS.BE -->
    <section class="py-20 lg:py-28 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- Left Column: Short Bold Headline, 1 Short Subtitle, 1 Primary Orange Button -->
                <div class="lg:col-span-6 space-y-6 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        {{ $isRtl ? 'إنتاج ملصقات الرول الصناعية' : 'Endüstriyel Rulo Etiket Üretimi' }}
                    </h1>

                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed font-normal max-w-xl">
                        {{ $isRtl
                            ? 'ننتج ملصقات الرول والباركود والتغليف الصناعي بمواصفات أوروبية دقيقة تلبي متطلبات كبرى خطوط الإنتاج.'
                            : 'Gaziantep OSB tesislerimizde Avrupa standartlarında yüksek hassasiyetli rulo etiket, barkod ve ambalaj çözümleri üretiyoruz.' }}
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('rfq') }}"
                           class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-semibold text-base shadow-sm shadow-orange-600/20 transition-all">
                            <span>{{ $isRtl ? 'اطلب عرض سعر' : 'Teklif Al' }}</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Clean 16:9 Factory Video Container (NO badges, NO stat pills, NO borders) -->
                <div class="lg:col-span-6">
                    <div class="rounded-2xl overflow-hidden aspect-video bg-slate-900 relative shadow-sm group">
                        <video id="factoryHeroVideo"
                               class="w-full h-full object-cover"
                               playsinline
                               controls
                               preload="metadata"
                               poster="{{ asset('images/darklogo.png') }}">
                            <source src="{{ asset('videos/factory-production.mp4') }}" type="video/mp4">
                        </video>
                        <div id="videoPlayOverlay"
                             onclick="startHeroVideo()"
                             class="absolute inset-0 bg-slate-950/40 flex items-center justify-center cursor-pointer transition-opacity group-hover:bg-slate-950/30">
                            <button type="button"
                                    aria-label="Videoyu Başlat"
                                    class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-white/95 text-orange-600 flex items-center justify-center shadow-xl hover:scale-105 transition-transform pointer-events-none">
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 translate-x-0.5 fill-current" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. MINIMALIST PRODUCT SHOWCASE: 3-COLUMN CLEAN GRID (ZERO BADGES, ZERO BULLET LISTS) -->
    <section class="py-20 lg:py-28 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12 lg:mb-16 text-{{ $isRtl ? 'right' : 'left' }}">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    {{ $isRtl ? 'منتجاتنا' : 'Ürünlerimiz' }}
                </h2>
                <p class="text-slate-500 text-base mt-2">
                    {{ $isRtl ? 'حلول متكاملة للملصقات والتغليف الصناعي' : 'Endüstriyel etiketleme ve ambalaj çözümleri' }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Rulo & Barkod Etiketleri -->
                <div class="group text-{{ $isRtl ? 'right' : 'left' }}">
                    <a href="{{ route('products.etiket') }}" class="block">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 relative">
                            <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=900&auto=format&fit=crop"
                                 alt="{{ __('cat_rulo') }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mt-5 mb-2 group-hover:text-orange-600 transition-colors">
                            {{ __('cat_rulo') }}
                        </h3>
                    </a>
                    <a href="{{ route('products.etiket') }}"
                       class="text-sm font-semibold text-orange-600 hover:text-orange-700 inline-flex items-center gap-1.5 transition-colors">
                        <span>{{ $isRtl ? 'عرض التفاصيل' : 'İncele' }}</span>
                        <span class="inline-block transition-transform group-hover:translate-x-1 {{ $isRtl ? 'rotate-180' : '' }}">&rarr;</span>
                    </a>
                </div>

                <!-- Card 2: Tekstil & Dokuma Etiketleri -->
                <div class="group text-{{ $isRtl ? 'right' : 'left' }}">
                    <a href="{{ route('products.tekstil') }}" class="block">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 relative">
                            <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?q=80&w=900&auto=format&fit=crop"
                                 alt="{{ __('cat_tekstil') }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mt-5 mb-2 group-hover:text-orange-600 transition-colors">
                            {{ __('cat_tekstil') }}
                        </h3>
                    </a>
                    <a href="{{ route('products.tekstil') }}"
                       class="text-sm font-semibold text-orange-600 hover:text-orange-700 inline-flex items-center gap-1.5 transition-colors">
                        <span>{{ $isRtl ? 'عرض التفاصيل' : 'İncele' }}</span>
                        <span class="inline-block transition-transform group-hover:translate-x-1 {{ $isRtl ? 'rotate-180' : '' }}">&rarr;</span>
                    </a>
                </div>

                <!-- Card 3: Matbaa & Kutu Ambalaj -->
                <div class="group text-{{ $isRtl ? 'right' : 'left' }}">
                    <a href="{{ route('products.matbaa') }}" class="block">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 relative">
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=900&auto=format&fit=crop"
                                 alt="{{ __('cat_ozel') }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mt-5 mb-2 group-hover:text-orange-600 transition-colors">
                            {{ __('cat_ozel') }}
                        </h3>
                    </a>
                    <a href="{{ route('products.matbaa') }}"
                       class="text-sm font-semibold text-orange-600 hover:text-orange-700 inline-flex items-center gap-1.5 transition-colors">
                        <span>{{ $isRtl ? 'عرض التفاصيل' : 'İncele' }}</span>
                        <span class="inline-block transition-transform group-hover:translate-x-1 {{ $isRtl ? 'rotate-180' : '' }}">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CLEAN ABOUT & MANAGEMENT SECTION (BG-SLATE-50) -->
    <section class="py-20 lg:py-28 bg-slate-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Top Part: Simple 2-Column Split (Short 3-Line Company Intro + Clean Factory Photo) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 space-y-6 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                        {{ $isRtl ? 'من نحن' : 'Hakkımızda' }}
                    </h2>
                    <div class="space-y-4 text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
                        <p>
                            {{ $isRtl
                                ? 'تأسست شركة غوكسان للملصقات والتغليف في المنطقة الصناعية الأولى بغازي عنتاب كأحد أبرز المنشآت المتخصصة في تصنيع ملصقات الرول الصناعية.'
                                : 'Göksan Etiket, Gaziantep 1. Organize Sanayi Bölgesinde endüstriyel rulo etiket, dokuma etiket ve kutu ambalaj üretimi gerçekleştiren modern bir üretim tesisidir.' }}
                        </p>
                        <p>
                            {{ $isRtl
                                ? 'نعتمد أحدث تقنيات طباعة فليكسو UV حتى 8 ألوان والفحص البصري الدقيق لضمان أعلى معايير الجودة الأوروبية لشركائنا.'
                                : 'Gelişmiş 8 renk UV flekso baskı hatlarımız ve yüksek hassasiyetli kontrol sistemlerimizle Avrupa kalite normlarında üretim yapıyoruz.' }}
                        </p>
                        <p>
                            {{ $isRtl
                                ? 'نلبي احتياجات مختلف القطاعات الصناعية من الأغذية والمنسوجات والكيماويات والتجارة مع التزام تام بالدقة والسرعة.'
                                : 'Gıda, kimya, tekstil ve lojistik başta olmak üzere sanayimizin tüm etiketleme ihtiyaçlarına zamanında ve sıfır hata toleransıyla cevap veriyoruz.' }}
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-slate-200 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1200&auto=format&fit=crop"
                             alt="Göksan Etiket Fabrikası"
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Bottom Part: Yönetim Kadromuz (2-Column Centered Portrait Cards) -->
            <div class="mt-20 lg:mt-24">
                <div class="text-center mb-12">
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        {{ $isRtl ? 'إدارة الشركة' : 'Yönetim Kadromuz' }}
                    </h3>
                </div>

                <div class="max-w-3xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-12">
                    <!-- Portrait Card 1 -->
                    <div class="text-center group">
                        <div class="aspect-[4/5] rounded-xl overflow-hidden bg-slate-200 mb-4 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop"
                                 alt="Gökhan Şan"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Gökhan Şan</h4>
                        <p class="text-sm text-slate-500 mt-1">
                            {{ $isRtl ? 'المؤسس ورئيس مجلس الإدارة' : 'Kurucu & Yönetim Kurulu Başkanı' }}
                        </p>
                    </div>

                    <!-- Portrait Card 2 -->
                    <div class="text-center group">
                        <div class="aspect-[4/5] rounded-xl overflow-hidden bg-slate-200 mb-4 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=600&auto=format&fit=crop"
                                 alt="Gökmen Şan"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Gökmen Şan</h4>
                        <p class="text-sm text-slate-500 mt-1">
                            {{ $isRtl ? 'شريك مؤسس ومدير الإنتاج' : 'Kurucu Ortak & Üretim Direktörü' }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. SIMPLE CONTACT / CTA STRIP: 1 HEADLINE + 2 BUTTONS (TEKLİF FORMU & WHATSAPP) -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                {{ $isRtl ? 'احصل على عرض سعر لمشروعك' : 'Projeniz için fiyat teklifi alın' }}
            </h2>

            <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                <a href="{{ route('rfq') }}"
                   class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-semibold text-base shadow-sm shadow-orange-600/20 transition-all">
                    <span>{{ $isRtl ? 'نموذج طلب السعر' : 'Teklif Formu' }}</span>
                </a>

                <a href="https://wa.me/905330246338"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-white hover:bg-slate-50 text-slate-800 border border-slate-200 font-semibold text-base transition-all">
                    <span>{{ $isRtl ? 'واتساب' : 'WhatsApp' }}</span>
                </a>
            </div>
        </div>
    </section>

</div>

<!-- Video Trigger Script -->
<script>
    function startHeroVideo() {
        var video = document.getElementById('factoryHeroVideo');
        var overlay = document.getElementById('videoPlayOverlay');
        if (!video) return;
        video.play().then(function() {
            if (overlay) overlay.classList.add('hidden');
        }).catch(function() {
            if (overlay) overlay.classList.add('hidden');
        });
    }
</script>
@endsection
