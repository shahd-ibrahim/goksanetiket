@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div class="overflow-x-hidden">

    <!-- 1. HERO SECTION: PURE WHITE, SPACIOUS PY-12 LG:PY-20, ROUNDED-FULL PILL CTA + CIRCULAR ACCENT -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- Left Column: Bold Headline, 1 Short Subtitle, 1 Rounded-Full Pill CTA -->
                <div class="lg:col-span-6 space-y-6 text-{{ $isRtl ? 'right' : 'left' }} reveal">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.12]">
                        {{ $isRtl ? 'القوة الإنتاجية المباشرة في الملصقات الصناعية' : 'Endüstriyel Etikette Doğrudan Üretici Gücü' }}
                    </h1>

                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed font-normal max-w-xl">
                        {{ $isRtl
                            ? 'ننتج ملصقات الرول، علامات النسيج والتغليف بمواصفات أوروبية دقيقة من منشآتنا الحديثة في غازي عنتاب.'
                            : 'Gaziantep OSB tesislerimizde Avrupa standartlarında yüksek hassasiyetli rulo etiket, dokuma arma ve ambalaj çözümleri üretiyoruz.' }}
                    </p>

                    <div class="pt-2">
                        <a href="#uygulamalar"
                           class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-orange-600 hover:bg-orange-500 text-white font-semibold text-sm shadow-sm shadow-orange-600/20 transition-all hover:scale-105">
                            <span>{{ $isRtl ? 'استعرض المنتجات' : 'Ürünleri İncele' }}</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Founders Portrait with Subtle Warm-Orange Circular Accent Shape Behind It -->
                <div class="lg:col-span-6 reveal reveal-delay-200">
                    <div class="relative max-w-md lg:max-w-lg mx-auto">
                        <!-- Subtle Warm-Orange Circular Accent Shape -->
                        <div class="absolute -top-6 -right-6 lg:-top-8 lg:-right-8 w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-full bg-gradient-to-tr from-orange-200/50 via-orange-100/40 to-transparent -z-10 pointer-events-none"></div>

                        <!-- Main Clean Leadership / Factory Photo Frame -->
                        <div class="rounded-3xl overflow-hidden aspect-[4/3] bg-slate-100 shadow-xl border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1200&q=80"
                                 alt="Göksan Etiket Fabrikası ve Yönetimi"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. "DOĞRUDAN ÜRETİCİDEN ALIN" SECTION: LARGE CIRCULAR PHOTO + 4 CLEAN MINIMALIST ROWS -->
    <section class="py-20 lg:py-28 bg-slate-50/60 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- Left Side: Large Circular Photo of Colorful Label Rolls -->
                <div class="lg:col-span-6 flex justify-center reveal">
                    <div class="relative">
                        <!-- Curved Decorative Accent Ring -->
                        <div class="absolute -inset-3 rounded-full border border-orange-500/20 pointer-events-none"></div>
                        <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1000&q=80"
                             alt="{{ $isRtl ? 'ملصقات الرول الملونة' : 'Renkli Rulo Etiketler' }}"
                             class="rounded-full w-72 h-72 sm:w-88 sm:h-88 lg:w-[420px] lg:h-[420px] object-cover shadow-2xl relative z-10">
                    </div>
                </div>

                <!-- Right Side: Clean Title, 1 Intro Paragraph, and 4 Clean Rows with Thin Line Icons -->
                <div class="lg:col-span-6 space-y-6 text-{{ $isRtl ? 'right' : 'left' }} reveal reveal-delay-200">
                    <div class="space-y-3">
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                            {{ $isRtl ? 'الشراء المباشر من المصنّع' : 'Doğrudan Üreticiden Alın' }}
                        </h2>
                        <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
                            {{ $isRtl
                                ? 'نوفر لشركائنا أسعار المصنع التنافسية، الاستجابة السريعة، وأعلى معايير الجودة الأوروبية بدون وسطاء.'
                                : 'Aracıları ortadan kaldırarak fabrikadan doğrudan üretim avantajı, kesintisiz mühendislik desteği ve Avrupa kalite standartlarını bir arada sunuyoruz.' }}
                        </p>
                    </div>

                    <!-- 4 Clean Rows with Minimalist Orange Line Icons -->
                    <div class="space-y-5 pt-3">
                        <!-- Row 1: Daha Ekonomik -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-orange-500 stroke-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900">{{ $isRtl ? 'أكثر اقتصاداً' : 'Daha Ekonomik' }}</h3>
                                <p class="text-sm text-slate-600 mt-0.5">{{ $isRtl ? 'أسعار مصنع مباشرة وتوفير ملموس في الكميات الصناعية الكبيرة.' : 'Doğrudan fabrika çıkış fiyatları ve toptan üretim avantajı ile maliyet tasarrufu.' }}</p>
                            </div>
                        </div>

                        <!-- Row 2: Daha Hızlı -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-orange-500 stroke-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900">{{ $isRtl ? 'أسرع في التوريد' : 'Daha Hızlı' }}</h3>
                                <p class="text-sm text-slate-600 mt-0.5">{{ $isRtl ? 'شحن مباشر إلى 81 محافظة خلال 24-48 ساعة مع مواعيد تسليم دقيقة.' : '81 ilimize 24-48 saatte doğrudan ambar sevkiyatı ve esnek üretim planlaması.' }}</p>
                            </div>
                        </div>

                        <!-- Row 3: Daha Sürdürülebilir -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-orange-500 stroke-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900">{{ $isRtl ? 'أكثر استدامة' : 'Daha Sürdürülebilir' }}</h3>
                                <p class="text-sm text-slate-600 mt-0.5">{{ $isRtl ? 'أحبار UV فليكسو صديقة للبيئة وخامات معتمدة تراعي المعايير العالمية.' : 'Çevre dostu UV flekso mürekkepleri ve sertifikalı hammadde kullanımı.' }}</p>
                            </div>
                        </div>

                        <!-- Row 4: Daha Kişisel -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-orange-500 stroke-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900">{{ $isRtl ? 'خدمة مخصصة' : 'Daha Kişisel' }}</h3>
                                <p class="text-sm text-slate-600 mt-0.5">{{ $isRtl ? 'دعم فني واستشارات هندسية تلبي بدقة طبيعة خطوط إنتاجكم.' : 'İhtiyacınıza özel teknik mühendislik, numune ve birebir müşteri danışmanı.' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. "ONLINE KATALOĞUMUZU İNCELEYİN" CENTERED BORDERED CARD -->
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto border border-slate-200 rounded-3xl p-8 sm:p-12 text-center bg-white shadow-xs space-y-5 reveal">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    {{ $isRtl ? 'تصفح كتالوجنا الإلكتروني' : 'Online Kataloğumuzu İnceleyin' }}
                </h2>
                <p class="text-base text-slate-600 max-w-xl mx-auto font-normal">
                    {{ $isRtl
                        ? 'استكشف كافة أنواع ملصقات الرول، شارات النسيج وعلب التغليف مع المواصفات الفنية الكاملة.'
                        : 'Tüm endüstriyel rulo etiket, tekstil dokuma ve kutu ambalaj çeşitlerimizi detaylı inceleyin.' }}
                </p>
                <div class="pt-2">
                    <a href="{{ route('rfq') }}"
                       class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-orange-600 hover:bg-orange-500 text-white font-semibold text-sm shadow-sm shadow-orange-600/20 transition-all hover:scale-105">
                        <span>{{ $isRtl ? 'طلب تسعير / كتالوج' : 'Online Katalog / Teklif Al' }}</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. "HER UYGULAMA İÇİN" SECTION: CENTERED TITLE + ORANGE UNDERLINE + 3 MINIMALIST OUTLINE SVG ICONS -->
    <section id="uygulamalar" class="py-20 lg:py-28 bg-slate-50/60 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <div class="reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    {{ $isRtl ? 'لكل تطبيق صناعي' : 'Her Uygulama İçin' }}
                </h2>
                <!-- Minimalist Orange Underline Bar -->
                <div class="w-12 h-1 bg-orange-500 mx-auto mt-3 mb-14 rounded-full"></div>
            </div>

            <!-- 3-Column Grid of Minimalist Orange Outline SVG Icons -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 lg:gap-14">

                <!-- Application 1: Rulo & Barkod Etiket -->
                <a href="{{ route('products.etiket') }}" class="group block p-6 rounded-2xl transition-all reveal reveal-delay-100">
                    <div class="w-20 h-20 mx-auto rounded-full bg-white shadow-xs flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-orange-500 stroke-orange-500" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-4-8v8m8-8v8M4 6h16a1 1 0 011 1v10a1 1 0 01-1 1H4a1 1 0 01-1-1V7a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                        {{ __('cat_rulo') }}
                    </h3>
                </a>

                <!-- Application 2: Tekstil & Dokuma Etiket -->
                <a href="{{ route('products.tekstil') }}" class="group block p-6 rounded-2xl transition-all reveal reveal-delay-200">
                    <div class="w-20 h-20 mx-auto rounded-full bg-white shadow-xs flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-orange-500 stroke-orange-500" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                        {{ __('cat_tekstil') }}
                    </h3>
                </a>

                <!-- Application 3: Matbaa & Kutu Ambalaj -->
                <a href="{{ route('products.matbaa') }}" class="group block p-6 rounded-2xl transition-all reveal reveal-delay-300">
                    <div class="w-20 h-20 mx-auto rounded-full bg-white shadow-xs flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-orange-500 stroke-orange-500" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                        {{ __('cat_ozel') }}
                    </h3>
                </a>

            </div>
        </div>
    </section>

    <!-- 5. QUOTE + CIRCULAR PHOTO SECTION (SPLIT LAYOUT) -->
    <section class="py-20 lg:py-28 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- Left: Large Orange Quotation Mark + Bold Statement -->
                <div class="lg:col-span-7 space-y-4 text-{{ $isRtl ? 'right' : 'left' }} reveal">
                    <div class="text-7xl font-serif text-orange-500 leading-none select-none">”</div>
                    <blockquote class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-[1.25]">
                        {{ $isRtl
                            ? 'نبتكر ملصقات تضمن ثباتاً فائقاً وقراءة رقمية دقيقة في أشد الظروف الصناعية قسوة.'
                            : 'En zorlu endüstriyel koşullarda bile mükemmel yapışma ve sıfır hata ile net barkod okunabilirliği sağlayan etiket çözümleri üretiyoruz.' }}
                    </blockquote>
                    <p class="text-sm font-semibold uppercase tracking-wider text-orange-600 pt-2">
                        GÖKSAN Etiket • {{ __('factory_loc_short') }}
                    </p>
                </div>

                <!-- Right: Large Circular Photo -->
                <div class="lg:col-span-5 flex justify-center reveal reveal-delay-200">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1616401784845-180882ba9ba8?auto=format&fit=crop&w=800&q=80"
                             alt="Endüstriyel Rulo Etiket Üretim Hassasiyeti"
                             class="rounded-full w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 object-cover shadow-2xl relative z-10">
                        <div class="absolute -bottom-3 -right-3 w-32 h-32 rounded-full border-4 border-orange-500 border-t-transparent border-l-transparent pointer-events-none z-20"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. "HER SEKTÖR İÇİN" SECTION: CIRCULAR PHOTOS WITH BOTTOM-RIGHT ORANGE CRESCENT/ARC ACCENT -->
    <section class="py-20 lg:py-28 bg-slate-50/60 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <div class="reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    {{ $isRtl ? 'لكل قطاع صناعي' : 'Her Sektör İçin' }}
                </h2>
                <!-- Minimalist Orange Underline Bar -->
                <div class="w-12 h-1 bg-orange-500 mx-auto mt-3 mb-14 rounded-full"></div>
            </div>

            <!-- 3-Column Grid of Circular Photos with Curved Crescent/Arc Accent -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-14">

                <!-- Sector 1: Tarım & Bahçecilik -->
                <a href="{{ route('sectors') }}" class="group block reveal reveal-delay-100">
                    <div class="relative w-56 h-56 mx-auto mb-6">
                        <!-- Curved Orange Crescent / Arc Accent at the Bottom-Right Edge -->
                        <div class="absolute -bottom-2.5 -right-2.5 w-56 h-56 rounded-full border-4 border-orange-500 border-t-transparent border-l-transparent pointer-events-none z-20 transition-transform group-hover:scale-105"></div>
                        <img src="https://images.unsplash.com/photo-1592417817098-8f3d6910985b?auto=format&fit=crop&w=600&q=80"
                             alt="{{ $isRtl ? 'الزراعة والكيماويات' : 'Tarım & Bahçecilik' }}"
                             class="w-full h-full rounded-full object-cover shadow-md relative z-10 group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                        {{ $isRtl ? 'الزراعة والكيماويات' : 'Tarım & Bahçecilik' }}
                    </h3>
                </a>

                <!-- Sector 2: Tekstil & Hazır Giyim -->
                <a href="{{ route('sectors') }}" class="group block reveal reveal-delay-200">
                    <div class="relative w-56 h-56 mx-auto mb-6">
                        <!-- Curved Orange Crescent / Arc Accent at the Bottom-Right Edge -->
                        <div class="absolute -bottom-2.5 -right-2.5 w-56 h-56 rounded-full border-4 border-orange-500 border-t-transparent border-l-transparent pointer-events-none z-20 transition-transform group-hover:scale-105"></div>
                        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80"
                             alt="{{ $isRtl ? 'المنسوجات والملابس' : 'Tekstil & Hazır Giyim' }}"
                             class="w-full h-full rounded-full object-cover shadow-md relative z-10 group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                        {{ $isRtl ? 'Tekstil & Hazır Giyim' : 'Tekstil & Hazır Giyim' }}
                    </h3>
                </a>

                <!-- Sector 3: Gıda & Lojistik -->
                <a href="{{ route('sectors') }}" class="group block reveal reveal-delay-300">
                    <div class="relative w-56 h-56 mx-auto mb-6">
                        <!-- Curved Orange Crescent / Arc Accent at the Bottom-Right Edge -->
                        <div class="absolute -bottom-2.5 -right-2.5 w-56 h-56 rounded-full border-4 border-orange-500 border-t-transparent border-l-transparent pointer-events-none z-20 transition-transform group-hover:scale-105"></div>
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=600&q=80"
                             alt="{{ $isRtl ? 'الأغذية والخدمات اللوجستية' : 'Gıda & Lojistik' }}"
                             class="w-full h-full rounded-full object-cover shadow-md relative z-10 group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors">
                        {{ $isRtl ? 'الأغذية والخدمات اللوجستية' : 'Gıda & Lojistik' }}
                    </h3>
                </a>

            </div>
        </div>
    </section>

    <!-- 7. BOTTOM CONTACT / TEAM CARD ("SİZİN İÇİN ETİKET ÜRETELİM!") -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto border border-slate-200/90 rounded-3xl p-8 sm:p-10 shadow-sm bg-white flex flex-col sm:flex-row items-center justify-between gap-6 sm:gap-8 reveal">
                <!-- Circular Portrait on the Left -->
                <div class="flex items-center gap-5 text-center sm:text-{{ $isRtl ? 'right' : 'left' }}">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80"
                         alt="Gökhan Şan"
                         class="w-20 h-20 sm:w-24 sm:h-24 rounded-full object-cover shadow-md shrink-0 border-2 border-orange-500/20">
                    <div class="space-y-1">
                        <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">
                            {{ $isRtl ? 'دعنا نصنع ملصقاتك الصناعية!' : 'Sizin için etiket üretelim!' }}
                        </h3>
                        <p class="text-sm text-slate-600">
                            Gökhan Şan • {{ $isRtl ? 'المؤسس ومستشار العملاء' : 'Kurucu & Müşteri Danışmanı' }}
                        </p>
                    </div>
                </div>

                <!-- One Orange Rounded-Full Pill CTA Button on the Right -->
                <div class="shrink-0">
                    <a href="{{ route('rfq') }}"
                       class="inline-flex items-center justify-center px-7 py-3.5 rounded-full bg-orange-600 hover:bg-orange-500 text-white font-semibold text-sm shadow-sm shadow-orange-600/20 transition-all hover:scale-105">
                        <span>{{ $isRtl ? 'طلب موعد / تسعير' : 'Randevu / Teklif Al' }}</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
