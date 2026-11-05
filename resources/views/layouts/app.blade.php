<!DOCTYPE html>
@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp
<html lang="{{ $locale }}" dir="{{ $isRtl ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? 'GÖKSAN Etiket • Matbaa • Ambalaj | Baskılı & Baskısız Rulo Etiket Üreticisi' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Gaziantep 1. OSB tesislerimizde toptan rulo etiket, dokuma etiket, karton kutu ambalaj ve barkod çözümleri. 81 ilimize 24-48 saatte doğrudan sevkiyat.' }}">
    <link rel="canonical" href="{{ $seo['canonical'] ?? url()->current() }}">

    <!-- Favicon Setup -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $seo['canonical'] ?? url()->current() }}">
    <meta property="og:title" content="{{ $seo['title'] ?? 'GÖKSAN Etiket • Matbaa • Ambalaj' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Ensure Clean Light European Theme Default -->
    <script>
        document.documentElement.classList.remove('dark');
        if (localStorage.getItem('theme') === 'dark') {
            localStorage.setItem('theme', 'light');
        }
    </script>

    <!-- Google Fonts: Plus Jakarta Sans / Inter & Cairo for Arabic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS with Göksan Warm Industrial Orange Brand Palette -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#0f172a',
                            slate: '#1e293b',
                            orange: '#f97316',
                            orangeDark: '#ea580c',
                            orangeHover: '#c2410c'
                        }
                    },
                    spacing: {
                        '18': '4.5rem',
                        '22': '5.5rem'
                    },
                    fontFamily: {
                        sans: {!! $isRtl ? "['Cairo', 'sans-serif']" : "['Plus Jakarta Sans', 'Inter', 'sans-serif']" !!}
                    }
                }
            }
        }
    </script>

    <style>
        html, body {
            font-family: {!! $isRtl ? "'Cairo', sans-serif" : "'Plus Jakarta Sans', 'Inter', sans-serif" !!};
            line-height: 1.6;
            overflow-x: hidden;
            max-width: 100vw;
            -webkit-font-smoothing: antialiased;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f8fafc;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>

    <!-- Schema.org Manufacturer & LocalBusiness JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Manufacturer",
      "name": "GÖKSAN Etiket • Matbaa • Ambalaj",
      "alternateName": "Göksan Etiket",
      "url": "https://www.goksanetiket.com",
      "logo": "{{ asset('images/logo.png') }}",
      "description": "Gaziantep 1. Organize Sanayi Bölgesinde endüstriyel rulo etiket, dokuma etiket, karton kutu ambalaj ve barkod üretimi.",
      "telephone": "+90-342-503-4652",
      "email": "info@goksanetiket.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31",
        "addressLocality": "Şehitkamil",
        "addressRegion": "Gaziantep",
        "postalCode": "27000",
        "addressCountry": "TR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "37.1118",
        "longitude": "37.3482"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "opens": "08:30",
        "closes": "18:30"
      }
    }
    </script>
    @stack('schema')
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden bg-white text-slate-900 selection:bg-orange-500 selection:text-white">

    <!-- MINIMALIST SPACIOUS EUROPEAN WHITE HEADER (NO TOPBAR) -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 md:h-24 flex items-center justify-between gap-4 lg:gap-8">
            <!-- Prominent Company Logo -->
            <a href="{{ route('home') }}" class="shrink-0 flex items-center py-2">
                <img src="{{ asset('images/darklogo.png') }}" alt="Göksan Etiket" class="h-12 sm:h-14 md:h-16 lg:h-20 w-auto object-contain {{ $isRtl ? 'object-right' : 'object-left' }}">
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-7 xl:gap-8 text-[15px] font-semibold text-slate-700">
                <a href="{{ route('home') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('home') ? 'text-orange-600 font-bold' : '' }}">
                    {{ $isRtl ? 'الرئيسية' : 'Ana Sayfa' }}
                </a>

                <!-- Ürünler Dropdown -->
                <div class="relative group">
                    <button type="button" class="flex items-center gap-1.5 hover:text-orange-600 transition-colors py-3 cursor-pointer {{ request()->routeIs('products.*', 'corporate.etiket', 'corporate.tekstil', 'corporate.ambalaj') ? 'text-orange-600 font-bold' : '' }}">
                        <span>{{ $isRtl ? 'المنتجات' : 'Ürünler' }}</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-orange-600 group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-full {{ $isRtl ? 'right-0' : 'left-0' }} hidden group-hover:block w-68 bg-white rounded-2xl shadow-xl border border-slate-200/90 py-2.5 z-50">
                        <a href="{{ route('products.etiket') }}" class="block px-5 py-2.5 hover:bg-orange-50 hover:text-orange-600 text-sm font-medium text-slate-700 transition-colors">
                            {{ __('Rulo & Barkod Etiketleri') }}
                        </a>
                        <a href="{{ route('products.tekstil') }}" class="block px-5 py-2.5 hover:bg-orange-50 hover:text-orange-600 text-sm font-medium text-slate-700 transition-colors">
                            {{ __('Tekstil & Dokuma Etiketleri') }}
                        </a>
                        <a href="{{ route('products.matbaa') }}" class="block px-5 py-2.5 hover:bg-orange-50 hover:text-orange-600 text-sm font-medium text-slate-700 transition-colors">
                            {{ __('Matbaa & Kutu Ambalaj') }}
                        </a>
                        <div class="border-t border-slate-100 my-1.5"></div>
                        <a href="{{ route('sectors') }}" class="block px-5 py-2 hover:bg-orange-50 hover:text-orange-600 text-xs font-semibold text-slate-500 transition-colors">
                            {{ $isRtl ? 'الحلول حسب القطاعات' : 'Sektörel Etiket Çözümleri' }} &rarr;
                        </a>
                    </div>
                </div>

                <a href="{{ route('machinery') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('machinery', 'corporate.machinery') ? 'text-orange-600 font-bold' : '' }}">
                    {{ $isRtl ? 'الإنتاج والتكنولوجيا' : 'Üretim & Teknoloji' }}
                </a>

                <a href="{{ route('about') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('about', 'corporate.about') ? 'text-orange-600 font-bold' : '' }}">
                    {{ $isRtl ? 'من نحن' : 'Hakkımızda' }}
                </a>

                <a href="{{ route('payment') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('payment', 'corporate.payment') ? 'text-orange-600 font-bold' : '' }}">
                    {{ $isRtl ? 'الدفع الإلكتروني' : 'Online Ödeme' }}
                </a>

                <a href="{{ route('contact') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('contact', 'corporate.contact') ? 'text-orange-600 font-bold' : '' }}">
                    {{ $isRtl ? 'اتصل بنا' : 'İletişim' }}
                </a>
            </nav>

            <!-- Desktop Right Side: Language Switch (TR/AR) + Single High-Contrast Orange CTA ("Teklif Al") -->
            <div class="hidden lg:flex items-center gap-4 shrink-0">
                <div class="flex items-center bg-slate-100 p-1 rounded-xl border border-slate-200/80 text-xs font-bold">
                    <a href="{{ url('lang/tr') }}" class="px-2.5 py-1 rounded-lg transition {{ app()->getLocale() == 'tr' ? 'bg-white text-slate-900 shadow-2xs' : 'text-slate-500 hover:text-slate-900' }}">TR</a>
                    <a href="{{ url('lang/ar') }}" class="px-2.5 py-1 rounded-lg transition {{ app()->getLocale() == 'ar' ? 'bg-white text-slate-900 shadow-2xs' : 'text-slate-500 hover:text-slate-900' }}">AR</a>
                </div>

                <a href="{{ route('rfq') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-sm shadow-sm shadow-orange-600/20 transition-all">
                    <span>{{ $isRtl ? 'اطلب عرض سعر' : 'Teklif Al' }}</span>
                    <svg class="w-4 h-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <!-- Mobile Header Right: Super Clean (Hamburger Icon Only) -->
            <div class="flex lg:hidden items-center shrink-0">
                <button id="mobileMenuBtn" type="button" class="inline-flex items-center justify-center p-2.5 rounded-xl text-slate-800 hover:bg-slate-100 border border-slate-200 focus:outline-none transition" aria-label="Menüyü Aç" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Off-Canvas Mobile Slide-Out Drawer -->
    <div id="mobileDrawerContainer" class="fixed inset-0 z-[60] lg:hidden pointer-events-none" aria-hidden="true">
        <!-- Backdrop -->
        <div id="mobileDrawerBackdrop" class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs opacity-0 transition-opacity duration-300"></div>

        <!-- Slide-out Drawer Panel -->
        <aside id="mobileDrawerPanel" class="fixed top-0 {{ $isRtl ? 'left-0 -translate-x-full' : 'right-0 translate-x-full' }} h-full w-[85vw] max-w-sm bg-white shadow-2xl border-{{ $isRtl ? 'r' : 'l' }} border-slate-200 flex flex-col justify-between transition-transform duration-300 ease-in-out overflow-y-auto">
            <div>
                <!-- Drawer Top Header -->
                <div class="flex items-center justify-between px-5 h-20 border-b border-slate-100">
                    <a href="{{ route('home') }}" class="flex items-center shrink-0">
                        <img src="{{ asset('images/darklogo.png') }}" alt="Göksan Etiket" class="h-11 w-auto object-contain">
                    </a>
                    <button id="mobileDrawerCloseBtn" type="button" aria-label="Menüyü Kapat" class="p-2 rounded-xl text-slate-500 hover:text-slate-900 hover:bg-slate-100 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <!-- Language Switcher Inside Drawer -->
                <div class="px-5 py-3 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">{{ $isRtl ? 'اللغة' : 'Dil Seçimi' }}</span>
                    <div class="flex items-center gap-1 bg-white p-1 rounded-xl border border-slate-200">
                        <a href="{{ url('lang/tr') }}" class="px-3 py-1 rounded-lg text-xs font-bold transition {{ app()->getLocale() == 'tr' ? 'bg-orange-600 text-white' : 'text-slate-600 hover:text-slate-900' }}">TR</a>
                        <a href="{{ url('lang/ar') }}" class="px-3 py-1 rounded-lg text-xs font-bold transition {{ app()->getLocale() == 'ar' ? 'bg-orange-600 text-white' : 'text-slate-600 hover:text-slate-900' }}">AR</a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="p-4 space-y-1 text-{{ $isRtl ? 'right' : 'left' }}">
                    <a href="{{ route('home') }}" class="drawer-nav-link flex items-center justify-between px-4 py-3 rounded-xl text-sm font-bold {{ request()->routeIs('home') ? 'bg-orange-50 text-orange-600' : 'text-slate-800 hover:bg-slate-50' }} transition">
                        <span>{{ $isRtl ? 'الرئيسية' : 'Ana Sayfa' }}</span>
                    </a>

                    <!-- Products Accordion -->
                    <div class="rounded-xl overflow-hidden">
                        <button id="mobileProductsToggle" type="button" class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm font-bold text-slate-800 hover:bg-slate-50 transition">
                            <span>{{ $isRtl ? 'المنتجات' : 'Ürünler' }}</span>
                            <svg id="mobileProductsChevron" class="w-4 h-4 text-slate-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div id="mobileProductsMenu" class="hidden pl-4 pr-2 pb-2 space-y-1 border-{{ $isRtl ? 'r' : 'l' }}-2 border-orange-500/30 {{ $isRtl ? 'mr-4' : 'ml-4' }} mt-1">
                            <a href="{{ route('products.etiket') }}" class="drawer-nav-link block px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-orange-50 hover:text-orange-600 transition">
                                • {{ __('Rulo & Barkod Etiketleri') }}
                            </a>
                            <a href="{{ route('products.tekstil') }}" class="drawer-nav-link block px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-orange-50 hover:text-orange-600 transition">
                                • {{ __('Tekstil & Dokuma Etiketleri') }}
                            </a>
                            <a href="{{ route('products.matbaa') }}" class="drawer-nav-link block px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 hover:bg-orange-50 hover:text-orange-600 transition">
                                • {{ __('Matbaa & Kutu Ambalaj') }}
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('machinery') }}" class="drawer-nav-link flex items-center justify-between px-4 py-3 rounded-xl text-sm font-bold text-slate-800 hover:bg-slate-50 transition">
                        <span>{{ $isRtl ? 'الإنتاج والتكنولوجيا' : 'Üretim & Teknoloji' }}</span>
                    </a>
                    <a href="{{ route('about') }}" class="drawer-nav-link flex items-center justify-between px-4 py-3 rounded-xl text-sm font-bold text-slate-800 hover:bg-slate-50 transition">
                        <span>{{ $isRtl ? 'من نحن' : 'Hakkımızda' }}</span>
                    </a>
                    <a href="{{ route('payment') }}" class="drawer-nav-link flex items-center justify-between px-4 py-3 rounded-xl text-sm font-bold text-slate-800 hover:bg-slate-50 transition">
                        <span>{{ $isRtl ? 'الدفع الإلكتروني (Sanal POS)' : 'Online Ödeme (Sanal POS)' }}</span>
                    </a>
                    <a href="{{ route('contact') }}" class="drawer-nav-link flex items-center justify-between px-4 py-3 rounded-xl text-sm font-bold text-slate-800 hover:bg-slate-50 transition">
                        <span>{{ $isRtl ? 'اتصل بنا' : 'İletişim' }}</span>
                    </a>
                </nav>
            </div>

            <!-- Drawer Bottom CTA -->
            <div class="p-5 border-t border-slate-100 bg-slate-50/70 space-y-2.5">
                <a href="{{ route('rfq') }}"
                   class="drawer-nav-link w-full min-h-[46px] inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-sm shadow-sm transition">
                    <span>{{ $isRtl ? 'اطلب عرض سعر' : 'Teklif Al' }}</span>
                    <svg class="w-4 h-4 rtl:rotate-180 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="tel:+903425034652"
                   class="w-full min-h-[44px] inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 font-semibold text-xs hover:bg-slate-100 transition">
                    <span dir="ltr">📞 +90 342 503 46 52</span>
                </a>
            </div>
        </aside>
    </div>

    <!-- MAIN CONTENT INJECTION -->
    <main class="flex-1 overflow-x-hidden bg-white">
        @yield('content')
    </main>

    <!-- CLEAN EUROPEAN B2B FOOTER -->
    <footer class="bg-slate-50 text-slate-600 pt-14 sm:pt-16 pb-10 border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-200/80">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
                    <a href="{{ route('home') }}" class="inline-block">
                        <img src="{{ asset('images/darklogo.png') }}" alt="Göksan Etiket" class="h-14 w-auto object-contain">
                    </a>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        {{ __('footer_desc') }}
                    </p>
                    <div class="text-xs text-slate-600 space-y-1.5 pt-1">
                        <div>📍 {{ __('factory_loc') }}</div>
                        <div>📞 <a href="tel:+903425034652" class="hover:text-orange-600 font-semibold text-slate-800" dir="ltr">+90 342 503 46 52</a></div>
                        <div>📱 <a href="https://wa.me/905330246338" target="_blank" class="hover:text-orange-600 font-semibold text-slate-800" dir="ltr">+90 533 024 63 38 (WhatsApp)</a></div>
                        <div>✉ <a href="mailto:info@goksanetiket.com" class="hover:text-orange-600">info@goksanetiket.com</a></div>
                    </div>
                </div>

                <!-- Col 2: Ürünler & Çözümler -->
                <div class="space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 pb-2 border-b border-slate-200">
                        {{ $isRtl ? 'المنتجات والحلول' : 'Ürünler & Çözümler' }}
                    </h4>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-600 transition-colors">{{ __('cat_rulo') }}</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-600 transition-colors">{{ __('cat_plastik') }}</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-600 transition-colors">{{ __('cat_guvenlik') }}</a></li>
                        <li><a href="{{ route('corporate.tekstil') }}" class="hover:text-orange-600 transition-colors">{{ __('cat_tekstil') }}</a></li>
                        <li><a href="{{ route('corporate.ambalaj') }}" class="hover:text-orange-600 transition-colors">{{ __('cat_ozel') }}</a></li>
                        <li><a href="{{ route('machinery') }}" class="hover:text-orange-600 transition-colors">{{ $isRtl ? 'الإنتاج والتكنولوجيا' : 'Üretim & Teknoloji' }}</a></li>
                    </ul>
                </div>

                <!-- Col 3: Kurumsal & Hızlı Erişim -->
                <div class="space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 pb-2 border-b border-slate-200">
                        {{ $isRtl ? 'روابط سريعة' : 'Kurumsal & Hızlı Erişim' }}
                    </h4>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li><a href="{{ route('about') }}" class="hover:text-orange-600 transition-colors">{{ $isRtl ? 'من نحن وإدارة الشركة' : 'Hakkımızda & Yönetim Kadromuz' }}</a></li>
                        <li><a href="{{ route('payment') }}" class="hover:text-orange-600 font-semibold text-orange-600 transition-colors">{{ $isRtl ? 'الدفع الإلكتروني (Sanal POS)' : 'Online Ödeme (Sanal POS)' }}</a></li>
                        <li><a href="{{ route('rfq') }}" class="hover:text-orange-600 transition-colors">{{ $isRtl ? 'طلب عرض سعر' : 'Online Teklif Al (RFQ)' }}</a></li>
                        <li><a href="{{ route('sectors') }}" class="hover:text-orange-600 transition-colors">{{ $isRtl ? 'القطاعات الصناعية' : 'Hizmet Verilen Sektörler' }}</a></li>
                        <li><a href="{{ route('regional.index') }}" class="hover:text-orange-600 transition-colors">{{ __('Hizmet Bölgelerimiz') }} (81 İl)</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-orange-600 transition-colors">{{ $isRtl ? 'اتصل بنا' : 'İletişim & Fabrika Ulaşım' }}</a></li>
                    </ul>
                </div>

                <!-- Col 4: Online Ödeme & Teklif Kısayolu -->
                <div class="space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 pb-2 border-b border-slate-200">
                        {{ $isRtl ? 'الاعتمادات والدفع' : 'Kalite & Online İşlemler' }}
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        {{ __('footer_trust_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-1.5 pt-1">
                        <span class="px-2.5 py-1 rounded-lg bg-white text-[10px] font-bold text-slate-700 border border-slate-200">ISO 9001:2015</span>
                        <span class="px-2.5 py-1 rounded-lg bg-white text-[10px] font-bold text-slate-700 border border-slate-200">8 Renk UV Flexo</span>
                        <span class="px-2.5 py-1 rounded-lg bg-white text-[10px] font-bold text-slate-700 border border-slate-200">3D Secure POS</span>
                    </div>
                    <div class="pt-3 grid grid-cols-1 gap-2">
                        <a href="{{ route('rfq') }}" class="block w-full py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs text-center transition-colors shadow-xs">
                            {{ $isRtl ? 'اطلب عرض سعر' : 'Teklif Al' }} &rarr;
                        </a>
                        <a href="{{ route('payment') }}" class="block w-full py-2.5 rounded-xl bg-white hover:bg-slate-100 text-slate-800 border border-slate-200 font-bold text-xs text-center transition-colors">
                            💳 {{ $isRtl ? 'الدفع الإلكتروني (Sanal POS)' : 'Online Ödeme (Sanal POS)' }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <div>
                    &copy; {{ date('Y') }} GÖKSAN Etiket • Matbaa • Ambalaj San. Tic. Ltd. Şti. {{ __('footer_copyright') }}
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('payment') }}" class="hover:text-orange-600 font-medium">{{ $isRtl ? 'الدفع الإلكتروني' : 'Sanal POS' }}</a>
                    <span>•</span>
                    <a href="{{ route('sitemap') }}" class="hover:text-slate-800">{{ __('footer_sitemap') }}</a>
                    <span>•</span>
                    <a href="{{ route('corporate.contact') }}" class="hover:text-slate-800">{{ __('nav_contact') }}</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Subtle Floating WhatsApp Quick Button -->
    <div class="fixed {{ $isRtl ? 'left-5' : 'right-5' }} bottom-5 z-40">
        <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill')) }}" target="_blank"
           class="flex items-center gap-2 px-4 py-3 rounded-full bg-slate-900 hover:bg-orange-600 text-white font-bold text-xs shadow-lg transition-all">
            <svg class="w-4 h-4 fill-current text-orange-400" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
            <span class="hidden md:inline">{{ __('btn_whatsapp') }}</span>
        </a>
    </div>

    <!-- Scripts: Off-Canvas Mobile Drawer -->
    <script>
        (function() {
            const isRtl = {{ $isRtl ? 'true' : 'false' }};
            const hiddenTranslateClass = isRtl ? '-translate-x-full' : 'translate-x-full';
            const menuBtn = document.getElementById('mobileMenuBtn');
            const closeBtn = document.getElementById('mobileDrawerCloseBtn');
            const container = document.getElementById('mobileDrawerContainer');
            const backdrop = document.getElementById('mobileDrawerBackdrop');
            const panel = document.getElementById('mobileDrawerPanel');
            const productsToggle = document.getElementById('mobileProductsToggle');
            const productsMenu = document.getElementById('mobileProductsMenu');
            const productsChevron = document.getElementById('mobileProductsChevron');

            function openMobileDrawer() {
                if (!container || !backdrop || !panel) return;
                container.classList.remove('pointer-events-none');
                container.setAttribute('aria-hidden', 'false');
                menuBtn?.setAttribute('aria-expanded', 'true');
                backdrop.classList.remove('opacity-0');
                backdrop.classList.add('opacity-100');
                panel.classList.remove(hiddenTranslateClass);
                panel.classList.add('translate-x-0');
                document.body.classList.add('overflow-hidden');
            }

            function closeMobileDrawer() {
                if (!container || !backdrop || !panel) return;
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0');
                panel.classList.remove('translate-x-0');
                panel.classList.add(hiddenTranslateClass);
                menuBtn?.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('overflow-hidden');
                setTimeout(function() {
                    if (panel.classList.contains(hiddenTranslateClass)) {
                        container.classList.add('pointer-events-none');
                        container.setAttribute('aria-hidden', 'true');
                    }
                }, 300);
            }

            menuBtn?.addEventListener('click', openMobileDrawer);
            closeBtn?.addEventListener('click', closeMobileDrawer);
            backdrop?.addEventListener('click', closeMobileDrawer);

            document.querySelectorAll('.drawer-nav-link').forEach(function(link) {
                link.addEventListener('click', closeMobileDrawer);
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') closeMobileDrawer();
            });

            productsToggle?.addEventListener('click', function() {
                if (!productsMenu) return;
                productsMenu.classList.toggle('hidden');
                productsChevron?.classList.toggle('rotate-180');
            });
        })();
    </script>
</body>
</html>
