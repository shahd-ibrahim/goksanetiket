<!DOCTYPE html>
@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp
<html lang="{{ $locale }}" dir="{{ $isRtl ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? 'GÖKSAN Etiket • Matbaa • Ambalaj | Endüstriyel Rulo Baskı Fabrikası' }}</title>
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
    <meta name="theme-color" content="#0f172a">

    <!-- Anti-FOUC Theme Preload Script -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Google Fonts: Plus Jakarta Sans / Inter & Cairo for Arabic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS with Göksan Brand Colors & Dark Mode Strategy -->
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
                            dark: '#0b132b',
                            amber: '#f59e0b',
                            orange: '#ea580c',
                            orangeHover: '#c2410c',
                            blue: '#1e40af'
                        }
                    },
                    fontFamily: {
                        sans: {!! $isRtl ? "['Cairo', 'sans-serif']" : "['Plus Jakarta Sans', 'Inter', 'sans-serif']" !!}
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: {!! $isRtl ? "'Cairo', sans-serif" : "'Plus Jakarta Sans', 'Inter', sans-serif" !!};
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Subtle clean scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        .dark ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Pulse glow for WhatsApp */
        @keyframes glowing-wa {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.45); }
            70% { box-shadow: 0 0 0 12px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }
        .glow-wa {
            animation: glowing-wa 2s infinite;
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
<body class="min-h-screen flex flex-col bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 transition-colors duration-200 selection:bg-orange-500 selection:text-white">

    <!-- Top Bar -->
    <div class="bg-slate-900 text-slate-300 text-xs border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-10 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>1. OSB 83105 Nolu Cad. No:31 Şehitkamil / GAZİANTEP</span>
                </span>
                <span class="hidden md:flex items-center gap-1 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Pzt - Cmt: 08:30 - 18:30</span>
                </span>
            </div>
            <div class="flex items-center gap-4">
                <a href="mailto:info@goksanetiket.com" class="hidden sm:flex items-center gap-1.5 hover:text-white transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>info@goksanetiket.com</span>
                </a>
                <a href="tel:+903425034652" class="flex items-center gap-1.5 font-semibold text-white hover:text-orange-400 transition">
                    <svg class="w-3.5 h-3.5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span dir="ltr">+90 342 503 46 52</span>
                </a>
                <div class="flex items-center gap-1 border-l border-slate-700 pl-3">
                    <a href="{{ url('lang/tr') }}" class="px-2 py-0.5 rounded text-[11px] font-bold {{ app()->getLocale() == 'tr' ? 'bg-orange-500 text-white' : 'text-slate-400 hover:text-white' }}">TR</a>
                    <a href="{{ url('lang/ar') }}" class="px-2 py-0.5 rounded text-[11px] font-bold {{ app()->getLocale() == 'ar' ? 'bg-orange-500 text-white' : 'text-slate-400 hover:text-white' }}">AR</a>
                </div>
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" type="button" aria-label="Toggle Theme" class="p-1 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition">
                    <svg id="theme-toggle-dark-icon" class="w-4 h-4 block dark:hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="w-4 h-4 hidden dark:block text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Nav -->
    <header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-50 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-6">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center shrink-0">
                <img src="{{ asset('images/darklogo.png') }}" alt="Göksan Etiket" class="h-12 w-auto block dark:hidden object-contain">
                <img src="{{ asset('images/lightlogo.png') }}" alt="Göksan Etiket" class="h-12 w-auto hidden dark:block object-contain">
            </a>

            <!-- Nav Links -->
            <nav class="hidden lg:flex items-center gap-7 text-sm font-semibold text-slate-700 dark:text-slate-200">
                <a href="{{ route('home') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition {{ request()->routeIs('home') ? 'text-orange-600 font-bold' : '' }}">
                    {{ __('Ana Sayfa') }}
                </a>
                <!-- Products Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-orange-600 dark:hover:text-orange-400 transition py-2">
                        <span>{{ __('Ürünlerimiz') }}</span>
                        <svg class="w-4 h-4 text-slate-400 group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="absolute top-full left-0 hidden group-hover:block w-64 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 py-3 z-50">
                        <a href="{{ route('products.etiket') }}" class="block px-4 py-2 hover:bg-orange-50 dark:hover:bg-slate-700 hover:text-orange-600 text-xs font-semibold">{{ __('Rulo & Barkod Etiketleri') }}</a>
                        <a href="{{ route('products.tekstil') }}" class="block px-4 py-2 hover:bg-orange-50 dark:hover:bg-slate-700 hover:text-orange-600 text-xs font-semibold">{{ __('Tekstil & Dokuma Etiketleri') }}</a>
                        <a href="{{ route('products.matbaa') }}" class="block px-4 py-2 hover:bg-orange-50 dark:hover:bg-slate-700 hover:text-orange-600 text-xs font-semibold">{{ __('Matbaa & Kutu Ambalaj') }}</a>
                    </div>
                </div>
                <a href="{{ route('machinery') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition">{{ __('Üretim Parkuru') }}</a>
                <a href="{{ route('sectors') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition">{{ __('Sektörler') }}</a>
                <a href="{{ route('regional.index') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition">{{ __('Hizmet Bölgelerimiz') }}</a>
                <a href="{{ route('about') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition">{{ __('Hakkımızda') }}</a>
                <a href="{{ route('contact') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition">{{ __('İletişim') }}</a>
            </nav>

            <!-- Action CTAs -->
            <div class="flex items-center gap-3 shrink-0">
                <a href="https://wa.me/905330246338" target="_blank" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-sm transition">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    <span>WhatsApp</span>
                </a>
                <a href="{{ route('rfq') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-orange-600 hover:bg-orange-700 text-white font-bold text-xs shadow-sm transition">
                    <span>{{ __('Hemen Fiyat Al') }}</span>
                    <svg class="w-3.5 h-3.5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <!-- Mobile Menu Trigger -->
                <button id="mobileMenuBtn" class="lg:hidden p-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none" aria-label="Toggle Navigation">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileDrawer" class="hidden lg:hidden bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-4 pt-3 pb-6 space-y-3 transition-colors">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800">{{ __('Ana Sayfa') }}</a>
            <div class="px-3 py-1 text-xs font-bold uppercase tracking-wider text-slate-400">{{ __('Ürünlerimiz') }}</div>
            <a href="{{ route('products.etiket') }}" class="block px-5 py-1.5 rounded-lg text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">• {{ __('Rulo & Barkod Etiketleri') }}</a>
            <a href="{{ route('products.tekstil') }}" class="block px-5 py-1.5 rounded-lg text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">• {{ __('Tekstil & Dokuma Etiketleri') }}</a>
            <a href="{{ route('products.matbaa') }}" class="block px-5 py-1.5 rounded-lg text-xs font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">• {{ __('Matbaa & Kutu Ambalaj') }}</a>
            <a href="{{ route('machinery') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800">{{ __('Üretim Parkuru') }}</a>
            <a href="{{ route('sectors') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800">{{ __('Sektörler') }}</a>
            <a href="{{ route('regional.index') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800">{{ __('Hizmet Bölgelerimiz') }}</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800">{{ __('Hakkımızda') }}</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800">{{ __('İletişim') }}</a>
        </div>
    </header>

    <!-- MAIN CONTENT INJECTION -->
    <main class="flex-1 bg-white dark:bg-slate-950 transition-colors duration-200">
        @yield('content')
    </main>

    <!-- 3. FOOTER (PRESTIGIOUS HYBRID THEME) -->
    <footer class="bg-slate-50 dark:bg-slate-950 text-slate-600 dark:text-slate-300 pt-16 pb-12 border-t border-slate-200 dark:border-slate-800 mt-20 transition-colors duration-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-200 dark:border-slate-800">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
                    <div class="flex items-center gap-3">
                        <!-- Dynamic Logo Switching in Footer -->
                        <img src="{{ asset('images/darklogo.png') }}" alt="Göksan Etiket" class="h-10 w-auto object-contain block dark:hidden">
                        <img src="{{ asset('images/lightlogo.png') }}" alt="Göksan Etiket" class="h-10 w-auto object-contain hidden dark:block">
                        <div>
                            <span class="block text-sm font-black text-slate-900 dark:text-white">GÖKSAN ETİKET</span>
                            <span class="block text-[11px] text-slate-500 dark:text-slate-400">{{ __('brand_tagline') }}</span>
                        </div>
                    </div>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('footer_desc') }}
                    </p>
                    <div class="text-xs text-slate-600 dark:text-slate-400 space-y-1">
                        <div>📍 {{ __('factory_loc') }}</div>
                        <div>📞 <a href="tel:+903425034652" class="hover:text-orange-600 dark:hover:text-white" dir="ltr">+90 342 503 46 52</a></div>
                        <div>📱 <a href="https://wa.me/905330246338" target="_blank" class="text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 font-bold" dir="ltr">+90 533 024 63 38 (WhatsApp)</a></div>
                        <div>✉ <a href="mailto:info@goksanetiket.com" class="hover:text-orange-600 dark:hover:text-white">info@goksanetiket.com</a></div>
                    </div>
                </div>

                <!-- Col 2: Ürünlerimiz -->
                <div class="space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white border-b border-slate-200 dark:border-slate-800 pb-2">
                        {{ __('nav_products') }}
                    </h4>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400">
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">{{ __('cat_rulo') }}</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">{{ __('cat_plastik') }}</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">{{ __('cat_guvenlik') }}</a></li>
                        <li><a href="{{ route('corporate.tekstil') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">{{ __('cat_tekstil') }}</a></li>
                        <li><a href="{{ route('corporate.ambalaj') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">{{ __('cat_ozel') }}</a></li>
                        <li><a href="{{ route('corporate.ambalaj') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">{{ __('cat_custom_dies_title') }}</a></li>
                    </ul>
                </div>

                <!-- Col 3: Bölgesel Dağıtım Hubları -->
                <div class="space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white border-b border-slate-200 dark:border-slate-800 pb-2">
                        {{ __('footer_regional_hubs') }}
                    </h4>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400">
                        <li><a href="{{ route('regional.city', ['citySlug' => 'gaziantep']) }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">Gaziantep OSB</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'istanbul']) }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">İstanbul İkitelli & Dudullu OSB</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'bursa']) }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">Bursa Demirtaş (DOSAB)</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'kocaeli']) }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">Kocaeli Gebze (GOSB)</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'ankara']) }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">Ankara OSTİM & İvedik OSB</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'izmir']) }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">İzmir Kemalpaşa (İAOSB)</a></li>
                        <li class="pt-2"><a href="{{ route('regional.index') }}" class="text-orange-600 dark:text-orange-400 hover:underline font-bold flex items-center gap-1">{{ __('btn_view_all_provinces') }} &rarr;</a></li>
                    </ul>
                </div>

                <!-- Col 4: Kurumsal & Sertifikalar -->
                <div class="space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white border-b border-slate-200 dark:border-slate-800 pb-2">
                        {{ __('footer_corporate_trust') }}
                    </h4>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('footer_trust_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="px-2.5 py-1 rounded bg-slate-200/70 dark:bg-slate-800 text-[10px] font-bold text-slate-700 dark:text-slate-300 border border-slate-300 dark:border-slate-700">ISO 9001:2015</span>
                        <span class="px-2.5 py-1 rounded bg-slate-200/70 dark:bg-slate-800 text-[10px] font-bold text-slate-700 dark:text-slate-300 border border-slate-300 dark:border-slate-700">{{ __('badge_food_grade') }}</span>
                        <span class="px-2.5 py-1 rounded bg-slate-200/70 dark:bg-slate-800 text-[10px] font-bold text-slate-700 dark:text-slate-300 border border-slate-300 dark:border-slate-700">{{ __('metric_flexo') }}</span>
                        <span class="px-2.5 py-1 rounded bg-slate-200/70 dark:bg-slate-800 text-[10px] font-bold text-emerald-600 dark:text-emerald-400 border border-slate-300 dark:border-slate-700">{{ __('val_prop_shipping') }}</span>
                    </div>
                    <div class="pt-3">
                        <a href="{{ route('corporate.rfq') }}" class="block w-full py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs text-center transition-colors shadow-xs">
                            {{ __('btn_quote') }} &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Credits -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 dark:text-slate-500">
                <div>
                    &copy; {{ date('Y') }} GÖKSAN Etiket • Matbaa • Ambalaj San. Tic. Ltd. Şti. {{ __('footer_copyright') }}
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('sitemap') }}" class="hover:text-slate-700 dark:hover:text-slate-300">{{ __('footer_sitemap') }}</a>
                    <span>•</span>
                    <a href="{{ route('corporate.about') }}" class="hover:text-slate-700 dark:hover:text-slate-300">{{ __('nav_about') }}</a>
                    <span>•</span>
                    <a href="{{ route('corporate.contact') }}" class="hover:text-slate-700 dark:hover:text-slate-300">{{ __('nav_contact') }}</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Persistent Floating WhatsApp Quick Button -->
    <div class="fixed {{ $isRtl ? 'left-6' : 'right-6' }} bottom-6 z-50">
        <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill')) }}" target="_blank"
           class="flex items-center gap-2.5 px-4 py-3 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-2xl glow-wa hover:scale-105 transition-all">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
            <span class="hidden md:inline">{{ __('btn_whatsapp') }}</span>
        </a>
    </div>

    <!-- Scripts: Mobile Menu & Theme Toggle -->
    <script>
        // Mobile Drawer Toggle
        document.getElementById('mobileMenuBtn')?.addEventListener('click', function() {
            var drawer = document.getElementById('mobileDrawer');
            if (drawer) {
                drawer.classList.toggle('hidden');
            }
        });

        // Theme Switcher Toggle Function
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        document.getElementById('theme-toggle')?.addEventListener('click', toggleTheme);
        document.getElementById('themeToggleBtn')?.addEventListener('click', toggleTheme);
        document.getElementById('mobileThemeToggleBtn')?.addEventListener('click', toggleTheme);
    </script>
</body>
</html>
