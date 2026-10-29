<!DOCTYPE html>
@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp
<html lang="{{ $locale }}" dir="{{ $isRtl ? 'rtl' : 'ltr' }}" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? 'GÖKSAN Etiket • Matbaa • Ambalaj | Endüstriyel Rulo Baskı Fabrikası' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Gaziantep 1. OSB tesislerimizde toptan rulo etiket, dokuma etiket, karton kutu ambalaj ve barkod çözümleri. 81 ilimize 24-48 saatte doğrudan sevkiyat.' }}">
    <link rel="canonical" href="{{ $seo['canonical'] ?? url()->current() }}">
    
    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $seo['canonical'] ?? url()->current() }}">
    <meta property="og:title" content="{{ $seo['title'] ?? 'GÖKSAN Etiket • Matbaa • Ambalaj' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta name="theme-color" content="#0f172a">

    <!-- Google Fonts: Plus Jakarta Sans / Inter & Cairo for Arabic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS with Göksan Brand Colors -->
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
            background-color: #ffffff;
            color: #0f172a;
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
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
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
<body class="min-h-screen flex flex-col selection:bg-orange-500 selection:text-white">

    <!-- 1. SLIM ELEGANT TOPBAR -->
    <div class="bg-slate-900 text-slate-300 text-xs py-2 border-b border-slate-800 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-2">
            <!-- Left Info Items -->
            <div class="flex items-center gap-4 text-[11px] sm:text-xs">
                <span class="flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <strong class="text-white">{{ __('factory_loc') }}</strong>
                </span>
                <span class="hidden md:inline text-slate-600">|</span>
                <span class="hidden md:flex items-center gap-1 text-slate-400">
                    <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    {{ __('working_hours') }}
                </span>
            </div>

            <!-- Right Info & Language Toggler -->
            <div class="flex items-center gap-4 text-xs">
                <a href="mailto:info@goksanetiket.com" class="hover:text-orange-400 transition-colors hidden sm:flex items-center gap-1 text-slate-300">
                    <span>✉ info@goksanetiket.com</span>
                </a>
                <a href="tel:+903425034652" class="hover:text-white font-semibold flex items-center gap-1 text-slate-200">
                    <span>📞 +90 342 503 46 52</span>
                </a>

                <!-- Language Switcher [TR] / [AR] -->
                <div class="flex items-center rounded-lg bg-slate-800 p-0.5 border border-slate-700 text-[11px]">
                    <a href="{{ route('set-locale', ['locale' => 'tr']) }}" 
                       class="px-2.5 py-0.5 rounded-md font-bold transition-all {{ $locale === 'tr' ? 'bg-orange-500 text-white shadow-xs' : 'text-slate-400 hover:text-white' }}">
                        TR
                    </a>
                    <a href="{{ route('set-locale', ['locale' => 'ar']) }}" 
                       class="px-2.5 py-0.5 rounded-md font-bold transition-all {{ $locale === 'ar' ? 'bg-orange-500 text-white shadow-xs' : 'text-slate-400 hover:text-white' }}">
                        AR
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. MAIN NAVIGATION (CLEAN LIGHT THEME) -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" 
                         alt="GÖKSAN Etiket • Matbaa • Ambalaj" 
                         class="h-10 md:h-12 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="hidden xl:block border-l border-slate-200 pl-3">
                        <span class="block text-xs font-bold text-slate-900 tracking-wide">
                            GÖKSAN ETİKET
                        </span>
                        <span class="block text-[10px] text-slate-500 uppercase tracking-wider">
                            Gaziantep 1. OSB
                        </span>
                    </div>
                </a>

                <!-- Nav Links Desktop -->
                <nav class="hidden lg:flex items-center gap-6 xl:gap-7 text-sm font-semibold text-slate-700">
                    <a href="{{ route('home') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('home') ? 'text-orange-600 font-bold' : '' }}">
                        {{ __('nav_home') }}
                    </a>

                    <!-- Products Dropdown -->
                    <div class="relative group py-2">
                        <button class="flex items-center gap-1 hover:text-orange-600 transition-colors {{ request()->routeIs('corporate.etiket', 'corporate.tekstil', 'corporate.ambalaj') ? 'text-orange-600 font-bold' : '' }}">
                            <span>{{ __('nav_products') }}</span>
                            <svg class="w-4 h-4 text-slate-400 group-hover:text-orange-600 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="absolute {{ $isRtl ? 'right-0' : 'left-0' }} top-full w-64 bg-white border border-slate-200 rounded-2xl shadow-xl py-3 px-2 hidden group-hover:block transition-all z-50">
                            <a href="{{ route('corporate.etiket') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group/item">
                                <span class="text-xl">🏷️</span>
                                <div>
                                    <span class="block text-xs font-bold text-slate-900 group-hover/item:text-orange-600">{{ __('nav_rulo_etiket') }}</span>
                                    <span class="block text-[11px] text-slate-500">Termal, Kuşe, PP Opak, Barkod</span>
                                </div>
                            </a>
                            <a href="{{ route('corporate.tekstil') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group/item">
                                <span class="text-xl">🧵</span>
                                <div>
                                    <span class="block text-xs font-bold text-slate-900 group-hover/item:text-orange-600">{{ __('nav_tekstil_etiket') }}</span>
                                    <span class="block text-[11px] text-slate-500">Japon Akmaz, Jakarlı Dokuma</span>
                                </div>
                            </a>
                            <a href="{{ route('corporate.ambalaj') }}" class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 transition-colors group/item">
                                <span class="text-xl">📦</span>
                                <div>
                                    <span class="block text-xs font-bold text-slate-900 group-hover/item:text-orange-600">{{ __('nav_matbaa_ambalaj') }}</span>
                                    <span class="block text-[11px] text-slate-500">Karton Kutu, Özel Kesim, Varak</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('corporate.machinery') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('corporate.machinery') ? 'text-orange-600 font-bold' : '' }}">
                        {{ __('nav_machinery') }}
                    </a>

                    <a href="{{ route('corporate.sectors') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('corporate.sectors') ? 'text-orange-600 font-bold' : '' }}">
                        {{ __('nav_sectors') }}
                    </a>

                    <a href="{{ route('regional.index') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('regional.*') ? 'text-orange-600 font-bold' : '' }}">
                        {{ __('nav_regions') }}
                    </a>

                    <a href="{{ route('corporate.about') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('corporate.about') ? 'text-orange-600 font-bold' : '' }}">
                        {{ __('nav_about') }}
                    </a>

                    <a href="{{ route('corporate.contact') }}" class="hover:text-orange-600 transition-colors {{ request()->routeIs('corporate.contact') ? 'text-orange-600 font-bold' : '' }}">
                        {{ __('nav_contact') }}
                    </a>
                </nav>

                <!-- Right CTAs -->
                <div class="flex items-center gap-3">
                    <!-- Glowing WhatsApp Quick CTA -->
                    <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill')) }}" target="_blank"
                       class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-md glow-wa transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span class="hidden sm:inline">{{ __('btn_whatsapp') }}</span>
                    </a>

                    <!-- Request Quote Button -->
                    <a href="{{ route('corporate.rfq') }}" 
                       class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/20 hover:-translate-y-0.5 transition-all">
                        <span>{{ __('btn_quote') }}</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>

                    <!-- Mobile Menu Trigger -->
                    <button id="mobileMenuBtn" class="lg:hidden p-2 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none" aria-label="Toggle Navigation">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileDrawer" class="hidden lg:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">{{ __('nav_home') }}</a>
            <div class="px-3 py-1 text-xs font-bold uppercase tracking-wider text-slate-400">{{ __('nav_products') }}</div>
            <a href="{{ route('corporate.etiket') }}" class="block px-5 py-1.5 rounded-lg text-xs font-medium text-slate-700 hover:bg-slate-50">• {{ __('nav_rulo_etiket') }}</a>
            <a href="{{ route('corporate.tekstil') }}" class="block px-5 py-1.5 rounded-lg text-xs font-medium text-slate-700 hover:bg-slate-50">• {{ __('nav_tekstil_etiket') }}</a>
            <a href="{{ route('corporate.ambalaj') }}" class="block px-5 py-1.5 rounded-lg text-xs font-medium text-slate-700 hover:bg-slate-50">• {{ __('nav_matbaa_ambalaj') }}</a>
            <a href="{{ route('corporate.machinery') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">{{ __('nav_machinery') }}</a>
            <a href="{{ route('corporate.sectors') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">{{ __('nav_sectors') }}</a>
            <a href="{{ route('regional.index') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">{{ __('nav_regions') }}</a>
            <a href="{{ route('corporate.about') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">{{ __('nav_about') }}</a>
            <a href="{{ route('corporate.contact') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-800 hover:bg-slate-50">{{ __('nav_contact') }}</a>
            
            <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs text-slate-500">Dil / Language:</span>
                <div class="flex items-center gap-2">
                    <a href="{{ route('set-locale', ['locale' => 'tr']) }}" class="px-3 py-1 rounded text-xs font-bold {{ $locale === 'tr' ? 'bg-orange-500 text-white' : 'bg-slate-100 text-slate-700' }}">Türkçe</a>
                    <a href="{{ route('set-locale', ['locale' => 'ar']) }}" class="px-3 py-1 rounded text-xs font-bold {{ $locale === 'ar' ? 'bg-orange-500 text-white' : 'bg-slate-100 text-slate-700' }}">العربية</a>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT INJECTION -->
    <main class="flex-1 bg-white">
        @yield('content')
    </main>

    <!-- 3. FOOTER (PRESTIGIOUS LIGHT / NAVY HYBRID) -->
    <footer class="bg-slate-900 text-slate-300 pt-16 pb-12 border-t border-slate-800 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logo.png') }}" alt="GÖKSAN" class="h-10 w-auto brightness-0 invert">
                        <div>
                            <span class="block text-sm font-black text-white">GÖKSAN ETİKET</span>
                            <span class="block text-[11px] text-slate-400">Matbaa • Ambalaj Sanayi</span>
                        </div>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Gaziantep 1. OSB modern tesislerimizde 8 renk UV flekso ve dijital sonlandırma ile endüstriyel rulo etiket, dokuma arma ve kutu ambalaj üretimi yapıyoruz.
                    </p>
                    <div class="text-xs text-slate-400 space-y-1">
                        <div>📍 1. OSB 83105 Nolu Cad. No:31 Şehitkamil / GAZİANTEP</div>
                        <div>📞 <a href="tel:+903425034652" class="hover:text-white">+90 342 503 46 52</a></div>
                        <div>📱 <a href="https://wa.me/905330246338" target="_blank" class="text-emerald-400 hover:text-emerald-300 font-bold">+90 533 024 63 38 (WhatsApp)</a></div>
                        <div>✉ <a href="mailto:info@goksanetiket.com" class="hover:text-white">info@goksanetiket.com</a></div>
                    </div>
                </div>

                <!-- Col 2: Ürünlerimiz -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white border-b border-slate-800 pb-2">
                        {{ __('nav_products') }}
                    </h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-400 transition-colors">Termal & Kuşe Rulo Etiket</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-400 transition-colors">PP Opak & Şeffaf Plastik Etiket</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-400 transition-colors">Silver Mat & Demirbaş Barkod</a></li>
                        <li><a href="{{ route('corporate.tekstil') }}" class="hover:text-orange-400 transition-colors">Japon Akmaz Kumaş Şeritler</a></li>
                        <li><a href="{{ route('corporate.tekstil') }}" class="hover:text-orange-400 transition-colors">Jakarlı Tafta / Saten Dokuma Etiket</a></li>
                        <li><a href="{{ route('corporate.ambalaj') }}" class="hover:text-orange-400 transition-colors">Ofset Baskılı Karton Kutu Ambalaj</a></li>
                        <li><a href="{{ route('corporate.ambalaj') }}" class="hover:text-orange-400 transition-colors">Özel Kesim & Varak Yaldızlı Etiket</a></li>
                    </ul>
                </div>

                <!-- Col 3: Bölgesel Dağıtım Hubları -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white border-b border-slate-800 pb-2">
                        Bölgesel Sevkiyat Hubları
                    </h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a href="{{ route('regional.city', ['citySlug' => 'gaziantep']) }}" class="hover:text-orange-400 transition-colors">Gaziantep OSB Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'istanbul']) }}" class="hover:text-orange-400 transition-colors">İstanbul İkitelli & Dudullu OSB</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'bursa']) }}" class="hover:text-orange-400 transition-colors">Bursa Demirtaş & DOSAB Etiket</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'kocaeli']) }}" class="hover:text-orange-400 transition-colors">Kocaeli Gebze & GOSB Etiket</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'ankara']) }}" class="hover:text-orange-400 transition-colors">Ankara OSTİM & İvedik Etiket</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'izmir']) }}" class="hover:text-orange-400 transition-colors">İzmir Kemalpaşa & İAOSB Etiket</a></li>
                        <li class="pt-2"><a href="{{ route('regional.index') }}" class="text-orange-400 hover:text-orange-300 font-bold flex items-center gap-1">{{ __('btn_view_all_provinces') }} &rarr;</a></li>
                    </ul>
                </div>

                <!-- Col 4: Kurumsal & Sertifikalar -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white border-b border-slate-800 pb-2">
                        Kurumsal Güvence
                    </h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Üretim süreçlerimiz ISO 9001 kalite standartlarına ve Tarım/Gıda uyumluluğu sertifikalarına sahiptir.
                    </p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-[10px] font-bold text-slate-300 border border-slate-700">ISO 9001:2015</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-[10px] font-bold text-slate-300 border border-slate-700">Gıda Temas Onaylı</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-[10px] font-bold text-slate-300 border border-slate-700">8 Renk UV Flexo</span>
                        <span class="px-2.5 py-1 rounded bg-slate-800 text-[10px] font-bold text-emerald-400 border border-slate-700">81 İl Ambar Sevki</span>
                    </div>
                    <div class="pt-3">
                        <a href="{{ route('corporate.rfq') }}" class="block w-full py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs text-center transition-colors">
                            {{ __('btn_quote') }} &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Credits -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <div>
                    &copy; {{ date('Y') }} GÖKSAN Etiket • Matbaa • Ambalaj San. Tic. Ltd. Şti. Tüm Hakları Saklıdır.
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('sitemap') }}" class="hover:text-slate-400">Sitemap XML</a>
                    <span>•</span>
                    <a href="{{ route('corporate.about') }}" class="hover:text-slate-400">{{ __('nav_about') }}</a>
                    <span>•</span>
                    <a href="{{ route('corporate.contact') }}" class="hover:text-slate-400">{{ __('nav_contact') }}</a>
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

    <!-- Toggle Mobile Menu Script -->
    <script>
        document.getElementById('mobileMenuBtn')?.addEventListener('click', function() {
            var drawer = document.getElementById('mobileDrawer');
            if (drawer) {
                drawer.classList.toggle('hidden');
            }
        });
    </script>
</body>
</html>
