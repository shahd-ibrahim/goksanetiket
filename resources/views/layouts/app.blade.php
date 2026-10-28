<!DOCTYPE html>
<html lang="tr" class="dark">
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
    <meta property="og:image" content="{{ asset('assets/images/og-goksan.jpg') }}">
    <meta name="theme-color" content="#162c42">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS with Göksan Brand Colors -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        navy: {
                            950: '#070e16',
                            900: '#0b1622',
                            850: '#102133',
                            800: '#162c42', // Primary Dark Navy
                            700: '#1e3c5a',
                            600: '#2a537c',
                        },
                        orange: {
                            400: '#ff7728',
                            500: '#ea6110', // Vibrant Accent Orange
                            600: '#d45307',
                            700: '#ad4003',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        :root {
            --brand-navy: #162c42;
            --brand-orange: #ea6110;
            --brand-light: #f8fafc;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #0b1622;
            color: #f8fafc;
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Ambient Glow */
        .ambient-navy-glow {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 1200px;
            height: 480px;
            background: radial-gradient(circle, rgba(22, 44, 66, 0.45) 0%, rgba(234, 97, 16, 0.08) 40%, rgba(11, 22, 34, 0) 70%);
            pointer-events: none;
            z-index: 0;
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
      "logo": "https://www.goksanetiket.com/assets/images/logo.png",
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
    <div class="ambient-navy-glow"></div>

    <!-- Top Info Bar -->
    <div class="bg-navy-950 border-b border-navy-850 text-xs text-slate-400 relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-col sm:flex-row items-center justify-between gap-2">
            <div class="flex items-center gap-4 text-[11px] sm:text-xs">
                <span class="flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <strong class="text-slate-300">Merkez Fabrika:</strong> 1. OSB 83105 Nolu Cad. No:31 Şehitkamil / GAZİANTEP
                </span>
                <span class="hidden md:inline text-slate-600">|</span>
                <span class="hidden md:inline">81 İle 24-48 Saatte Ambar & Kargo Sevkiyatı</span>
            </div>

            <div class="flex items-center gap-4 text-xs">
                <a href="mailto:info@goksanetiket.com" class="hover:text-orange-400 transition-colors hidden sm:flex items-center gap-1">
                    <span>✉ info@goksanetiket.com</span>
                </a>
                <a href="tel:+903425034652" class="hover:text-white font-semibold flex items-center gap-1">
                    <span>📞 0342 503 46 52</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-40 bg-navy-900/90 backdrop-blur-xl border-b border-navy-850">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white font-black text-lg px-3 py-1.5 rounded-xl font-mono shadow-lg shadow-orange-500/25 group-hover:scale-105 transition-transform">
                        GÖKSAN
                    </div>
                    <div>
                        <span class="block font-black text-sm md:text-base tracking-tight text-white group-hover:text-orange-400 transition-colors">
                            ETİKET • MATBAA • AMBALAJ
                        </span>
                        <span class="block text-[10px] text-slate-400 tracking-wider uppercase font-semibold">
                            Gaziantep 1. OSB Üretim Tesisi
                        </span>
                    </div>
                </a>

                <!-- Nav Links -->
                <nav class="hidden lg:flex items-center space-x-7 text-sm font-semibold text-slate-300">
                    <a href="{{ route('home') }}" class="hover:text-orange-400 transition-colors {{ request()->routeIs('home') ? 'text-orange-400' : '' }}">
                        Ana Sayfa
                    </a>
                    <a href="{{ route('corporate.about') }}" class="hover:text-orange-400 transition-colors {{ request()->routeIs('corporate.about') ? 'text-orange-400' : '' }}">
                        Kurumsal
                    </a>
                    <a href="{{ route('corporate.etiket') }}" class="hover:text-orange-400 transition-colors {{ request()->routeIs('corporate.etiket') ? 'text-orange-400' : '' }}">
                        Etiket Çözümleri
                    </a>
                    <a href="{{ route('corporate.tekstil') }}" class="hover:text-orange-400 transition-colors {{ request()->routeIs('corporate.tekstil') ? 'text-orange-400' : '' }}">
                        Tekstil & Dokuma
                    </a>
                    <a href="{{ route('corporate.ambalaj') }}" class="hover:text-orange-400 transition-colors {{ request()->routeIs('corporate.ambalaj') ? 'text-orange-400' : '' }}">
                        Matbaa & Ambalaj
                    </a>
                    <a href="{{ route('regional.index') }}" class="hover:text-orange-400 transition-colors {{ request()->routeIs('regional.*') ? 'text-orange-400' : '' }}">
                        Bölgesel Hizmetler (81 İl)
                    </a>
                    <a href="{{ route('corporate.contact') }}" class="hover:text-orange-400 transition-colors {{ request()->routeIs('corporate.contact') ? 'text-orange-400' : '' }}">
                        İletişim
                    </a>
                </nav>

                <!-- Quick CTAs -->
                <div class="flex items-center gap-3">
                    <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba, Göksan Etiket fiyat teklifi almak istiyorum.') }}" target="_blank"
                       class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold text-xs shadow-lg shadow-emerald-500/20 hover:-translate-y-0.5 transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span class="hidden sm:inline">WhatsApp</span> Teklif
                    </a>

                    <a href="tel:+903425034652" 
                       class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-navy-800 hover:bg-orange-500 text-white font-bold text-xs border border-navy-700 hover:border-orange-500 shadow-md transition-all">
                        <svg class="w-3.5 h-3.5 text-orange-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        0342 503 46 52
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Body -->
    <main class="flex-1 relative z-10">
        @yield('content')
    </main>

    <!-- Floating Action WhatsApp CTA -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3">
        <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba, toptan etiket ve ambalaj fiyat teklifi almak istiyorum.') }}" target="_blank"
           class="inline-flex items-center gap-2.5 px-5 py-3.5 rounded-full bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-sm shadow-2xl shadow-emerald-500/40 hover:-translate-y-1 hover:scale-105 transition-all">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
            <span>WhatsApp Hızlı Fiyat</span>
        </a>
    </div>

    <!-- Corporate Footer -->
    <footer class="bg-navy-950 border-t border-navy-850 pt-16 pb-8 text-slate-400 relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-navy-850">
                <!-- Col 1: Brand & Identity -->
                <div class="lg:col-span-4 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="bg-orange-500 text-white font-black text-base px-3 py-1 rounded-lg font-mono">
                            GÖKSAN
                        </span>
                        <span class="font-extrabold text-white text-base">ETİKET • MATBAA • AMBALAJ</span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Gaziantep 1. Organize Sanayi Bölgesinde kurulu modern entegre tesislerimizde, endüstriyel rulo etiket, dokuma arma, karton sallama etiket ve ofset kutu ambalaj imalatı gerçekleştiriyoruz. 81 ilin tüm sanayi bölgelerine doğrudan sevkiyat.
                    </p>
                    <div class="pt-2 text-xs text-slate-300 space-y-1">
                        <div>🏭 <strong>Vergi Dairesi:</strong> Şehitkamil V.D.</div>
                        <div>🌐 <strong>Web:</strong> https://www.goksanetiket.com</div>
                    </div>
                </div>

                <!-- Col 2: Core Modules -->
                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider border-l-2 border-orange-500 pl-2">
                        Üretim Alanlarımız
                    </h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-400 transition-colors">Termal & Kuşe Rulo Etiket</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-400 transition-colors">PP Opak & Şeffaf Plastik Etiket</a></li>
                        <li><a href="{{ route('corporate.etiket') }}" class="hover:text-orange-400 transition-colors">Silver Mat Demirbaş Etiketi</a></li>
                        <li><a href="{{ route('corporate.tekstil') }}" class="hover:text-orange-400 transition-colors">Dokuma & Yaka Ense Etiketi</a></li>
                        <li><a href="{{ route('corporate.tekstil') }}" class="hover:text-orange-400 transition-colors">Karton Sallama Etiketi (Hang Tag)</a></li>
                        <li><a href="{{ route('corporate.ambalaj') }}" class="hover:text-orange-400 transition-colors">Karton Kutu & Özel Ambalaj</a></li>
                    </ul>
                </div>

                <!-- Col 3: Regional Hubs -->
                <div class="lg:col-span-2 space-y-3">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider border-l-2 border-orange-500 pl-2">
                        Bölgesel Ağımız
                    </h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('regional.city', ['citySlug' => 'gaziantep']) }}" class="hover:text-orange-400 transition-colors">Gaziantep Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'istanbul']) }}" class="hover:text-orange-400 transition-colors">İstanbul Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'bursa']) }}" class="hover:text-orange-400 transition-colors">Bursa Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'izmir']) }}" class="hover:text-orange-400 transition-colors">İzmir Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'ankara']) }}" class="hover:text-orange-400 transition-colors">Ankara Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.index') }}" class="text-orange-400 font-semibold hover:underline">Tüm 81 İli İncele &rarr;</a></li>
                    </ul>
                </div>

                <!-- Col 4: Corporate Contact -->
                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider border-l-2 border-orange-500 pl-2">
                        Fabrika & İletişim
                    </h4>
                    <div class="space-y-2.5 text-xs">
                        <p class="leading-relaxed">
                            📍 <strong>Fabrika:</strong> 1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31 Şehitkamil / GAZİANTEP
                        </p>
                        <p>
                            📞 <strong>Santral:</strong> <a href="tel:+903425034652" class="text-white hover:text-orange-400 font-bold">+90 342 503 46 52</a>
                        </p>
                        <p>
                            📱 <strong>WhatsApp / Mobil:</strong> <a href="https://wa.me/905330246338" target="_blank" class="text-emerald-400 hover:underline font-bold">+90 533 024 63 38</a>
                        </p>
                        <p>
                            ✉ <strong>E-Posta:</strong> <a href="mailto:info@goksanetiket.com" class="text-slate-300 hover:text-orange-400">info@goksanetiket.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Sitemap -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
                <p>&copy; {{ date('Y') }} GÖKSAN Etiket • Matbaa • Ambalaj San. ve Tic. Ltd. Şti. Tüm Hakları Saklıdır.</p>
                <div class="flex items-center gap-4">
                    <a href="{{ route('sitemap') }}" class="hover:text-orange-400 transition-colors">XML Sitemap</a>
                    <span>•</span>
                    <a href="{{ route('admin.login') }}" class="hover:text-orange-400 transition-colors">Yönetici Girişi</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
