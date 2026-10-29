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
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="https://wa.me/905330246338?text={{ urlencode(__('whatsapp_prefill')) }}" target="_blank"
                           class="inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-sm shadow-md hover:-translate-y-0.5 transition-all">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                            <span>{{ __('btn_whatsapp') }}</span>
                        </a>

                        <a href="tel:+903425034652" class="hidden sm:inline-flex items-center gap-2 px-5 py-4 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-slate-800 text-sm font-bold shadow-xs transition-all">
                            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>+90 342 503 46 52</span>
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
                                <span class="text-xs font-mono font-bold text-slate-800 tracking-wider">FABRİKA OTOMASYONU</span>
                            </div>
                            <span class="text-[11px] bg-slate-100 text-slate-700 px-3 py-1 rounded-full font-semibold">Gaziantep 1. OSB</span>
                        </div>

                        <!-- Graphical Roll Label Illustration with Specifications -->
                        <div class="relative bg-gradient-to-br from-slate-900 to-slate-800 rounded-2xl p-6 text-white overflow-hidden shadow-inner mb-6">
                            <div class="absolute -right-8 -bottom-8 w-40 h-40 bg-orange-500/20 rounded-full blur-2xl"></div>
                            
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-mono text-orange-400 font-bold uppercase tracking-wider">ENDÜSTRİYEL RULO ETİKET</span>
                                <span class="text-xs bg-orange-500 text-white px-2 py-0.5 rounded font-mono font-bold">UV FLEXO</span>
                            </div>

                            <!-- Central Spec Visualization -->
                            <div class="py-4 space-y-3">
                                <div class="flex justify-between items-center text-xs border-b border-slate-700/60 pb-2">
                                    <span class="text-slate-400">Baskı Türü:</span>
                                    <span class="font-bold text-white">8 Renk UV Flexo + Lak</span>
                                </div>
                                <div class="flex justify-between items-center text-xs border-b border-slate-700/60 pb-2">
                                    <span class="text-slate-400">Kuka (Core) Çapı:</span>
                                    <span class="font-bold text-orange-300">25mm / 40mm / 76mm</span>
                                </div>
                                <div class="flex justify-between items-center text-xs border-b border-slate-700/60 pb-2">
                                    <span class="text-slate-400">Hammadde:</span>
                                    <span class="font-bold text-white">Fasson / Raflatac 1. Sınıf</span>
                                </div>
                                <div class="flex justify-between items-center text-xs">
                                    <span class="text-slate-400">Üretim Toleransı:</span>
                                    <span class="font-bold text-emerald-400">± 0.1 mm (Sıfır Hata)</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3 Floating Quality Guarantee Badges -->
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-slate-800">
                                <span class="text-lg">🏆</span>
                                <div>
                                    <strong class="block text-slate-900">{{ __('badge_iso') }}</strong>
                                    <span class="text-[11px] text-slate-500">Uluslararası Kalite Yönetim Standardı</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-slate-800">
                                <span class="text-lg">🍃</span>
                                <div>
                                    <strong class="block text-slate-900">{{ __('badge_food_grade') }}</strong>
                                    <span class="text-[11px] text-slate-500">Gıda ile Doğrudan & Dolaylı Temasa Uygun</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 text-xs text-slate-800">
                                <span class="text-lg">📐</span>
                                <div>
                                    <strong class="block text-slate-900">{{ __('badge_dies') }}</strong>
                                    <span class="text-[11px] text-slate-500">Ekstra Bıçak Ücreti Olmadan Hızlı Üretim</span>
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
                <div class="text-xs text-slate-500 mt-1 font-medium">Yüksek Çözünürlüklü Baskı</div>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center">
                <div class="text-2xl sm:text-3xl font-black text-orange-600 font-mono">{{ __('metric_capacity') }}</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">Aylık Rulo Üretim Hacmi</div>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center">
                <div class="text-2xl sm:text-3xl font-black text-emerald-600 font-mono">{{ __('metric_delivery') }}</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">81 İle Ambar & Kargo Sevk</div>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-xs text-center">
                <div class="text-2xl sm:text-3xl font-black text-slate-900 font-mono">%100</div>
                <div class="text-xs text-slate-500 mt-1 font-medium">Doğrudan Fabrika Satış Fiyatı</div>
            </div>
        </div>
    </section>

    <!-- 3. PRODUCTS SECTION (MODERN TABBED / GRID INDUSTRIAL CATEGORIES) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <span class="text-xs font-bold uppercase tracking-widest text-orange-600">ENDÜSTRİYEL PORTFÖYÜMÜZ</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ __('nav_products') }} & Üretim Çözümlerimiz
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                Gaziantep 1. OSB fabrikamızda en son teknolojiyle imal edilen 5 temel endüstriyel ürün grubu.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Rulo & Termal Etiketler -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🏷️
                    </div>
                    <span class="text-[11px] font-mono font-bold text-orange-600 uppercase">KATEGORİ 01</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_rulo') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Eko Termal, Lamine Termal, Kuşe ve Vellum rulo barkod etiketleri. Tüm masaüstü ve endüstriyel barkod yazıcılarla (Zebra, Honeywell, TSC, Godex) %100 uyumlu.
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Kuka: 25mm / 40mm / 76mm</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Akrilik & Hotmelt Yapışkan Seçenekleri</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> 8 Renge Kadar UV Flekso Baskı</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Rulo Kuşe / Termal')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        Fiyat Al
                    </a>
                </div>
            </div>

            <!-- Card 2: Plastik & PP Opak Etiketler -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🛡️
                    </div>
                    <span class="text-[11px] font-mono font-bold text-blue-600 uppercase">KATEGORİ 02</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_plastik') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        PP Opak, Şeffaf Polipropilen, PE ve Silver Mat demirbaş etiketleri. Suya, neme, motor yağına, sürtünmeye ve kimyasal çözücülere maksimum direnç.
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Yırtılmaz & Esnek Plastik Yapı</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Resin Ribon ile Aşınmaz Barkod Baskısı</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Dış Ortam ve Soğuk Hava Deposu Dayanımı</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('PP Opak / Şeffaf')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        Fiyat Al
                    </a>
                </div>
            </div>

            <!-- Card 3: Tekstil & Dokuma Etiketler -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🧵
                    </div>
                    <span class="text-[11px] font-mono font-bold text-amber-600 uppercase">KATEGORİ 03</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_tekstil') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        90°C kaynatmaya ve ağır yıkamaya dayanıklı Japon Akmaz kumaş rulo şeritler, jakarlı tafta/saten yaka dokuma armaları ve özel kesimli karton sallama etiketleri.
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Ağır Kimyasal & Taş Yıkama Dayanımı</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Yüksek İplik Yoğunluklu Dokuma</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Özel İpli Karton Sallama (Hang Tag)</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.tekstil') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Tekstil / Dokuma')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        Fiyat Al
                    </a>
                </div>
            </div>

            <!-- Card 4: Güvenlik & Barkod Etiketleri -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        🔒
                    </div>
                    <span class="text-[11px] font-mono font-bold text-red-600 uppercase">KATEGORİ 04</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_guvenlik') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Söküldüğünde yüzeyde "OPEN VOID" izi bırakan güvenlik bantları, kırılgan (tahrip olan) garanti etiketleri ve seri numaralı metalize demirbaş etiketleri.
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Garanti Takip & Sahtecilik Önleme</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Ardışık Seri No & QR Kod Baskı</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Elektronik & Cihaz Mühürleme</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.etiket') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Güvenlik VOID')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        Fiyat Al
                    </a>
                </div>
            </div>

            <!-- Card 5: Matbaa & Kutu Ambalaj -->
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl p-6 shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform">
                        📦
                    </div>
                    <span class="text-[11px] font-mono font-bold text-purple-600 uppercase">KATEGORİ 05</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-1 mb-2">{{ __('cat_ozel') }}</h3>
                    <p class="text-xs text-slate-600 leading-relaxed mb-4">
                        Karton kutu ambalaj, lamine mukavva kutular, sıcak varak yaldız gofre kabartmalı lüks ürün etiketleri ve ihracata uygun endüstriyel koli çözümleri.
                    </p>
                    
                    <div class="space-y-1.5 text-xs text-slate-600 border-t border-slate-100 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Altın / Gümüş Varak Yaldız & Gofre</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Dip Kilitli & Otomatik Kurulum Kutular</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-600">✓</span> Gıda & Kozmetik Hijyenik Ambalaj</div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('corporate.ambalaj') }}" class="flex-1 py-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-800 font-bold text-xs text-center border border-slate-200 transition-colors">
                        {{ __('btn_details') }}
                    </a>
                    <a href="#rfq-wizard" onclick="selectRfqType('Karton Kutu Ambalaj')" class="px-3.5 py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs transition-colors">
                        Fiyat Al
                    </a>
                </div>
            </div>

            <!-- Card 6: Özel Kalıp & Bıçak Çözümleri -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white rounded-3xl p-6 shadow-md flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-white/10 text-orange-400 flex items-center justify-center text-2xl mb-4">
                        ⚙️
                    </div>
                    <span class="text-[11px] font-mono font-bold text-orange-400 uppercase">ÖZEL ŞARTNAME</span>
                    <h3 class="text-lg font-bold text-white mt-1 mb-2">Özel Bıçak & Teknik Etiketler</h3>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Mevcut ürünleriniz için özel kalıp tasarımı mı gerekiyor? 300'den fazla hazır bıçak arşivimizle kalıp maliyeti olmadan en hızlı teslimatı sağlıyoruz.
                    </p>

                    <div class="space-y-1.5 text-xs text-slate-300 border-t border-slate-700/80 pt-3 mb-6">
                        <div class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Ücretsiz Numune & Baskı Öncesi Prova</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-400">✓</span> CAD/CAM Hassas Lazer Bıçak Üretimi</div>
                        <div class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Özel Şekil, Perfore ve Yarık Kesim</div>
                    </div>
                </div>

                <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba, özel bıçaklı etiket teknik şartnamesi danışmak istiyorum.') }}" target="_blank"
                   class="w-full py-2.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-bold text-xs text-center transition-colors">
                    Mühendisimizle Görüşün &rarr;
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
                        {{ __('machinery_subtitle') }} Gaziantep 1. OSB fabrikamızda en son Avrupa teknolojisi servo tahrikli flekso hatlarımız ve dijital kesim ünitelerimizle hizmetinizdeyiz.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('corporate.machinery') }}" class="inline-flex items-center gap-2 text-xs font-bold text-orange-600 hover:text-orange-700">
                            Parkur Detaylarını İncele &rarr;
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">🖨️</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">8 Renk UV Flexo Baskı</h4>
                        <p class="text-xs text-slate-500">Tam servo kontrollü, UV kurutmalı ve çift taraflı baskı opsiyonlu yüksek hızlı hatlar.</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">✂️</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">Dijital Rulo Kesim & Dilimleme</h4>
                        <p class="text-xs text-slate-500">Masaüstü ve endüstriyel barkod makinelerine özel istenilen kuka ve metrajda hassas sarım.</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">✨</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">Varak Yaldız & Serigrafi</h4>
                        <p class="text-xs text-slate-500">Sıcak & soğuk folyo yaldız, kabartma lak ve serigrafik koruyucu kaplama üniteleri.</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-2xl">🔍</span>
                        <h4 class="text-sm font-bold text-slate-900 mt-2 mb-1">%100 Kamera Kontrol</h4>
                        <p class="text-xs text-slate-500">Üretim esnasında barkod okunabilirlik ve renk tonu doğrulaması yapan optik sensörler.</p>
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
                    ⚡ 2 ADIMDA HIZLI FİYAT HESAPLAMA
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
                                <option value="Rulo Kuşe Etiket">Rulo Kuşe Etiket</option>
                                <option value="Direkt Eko Termal">Direkt Eko Termal Etiket</option>
                                <option value="Lamine Termal (Top Termal)">Lamine Termal (Top Termal)</option>
                                <option value="PP Opak (Plastik)">PP Opak (Plastik Su Geçirmez)</option>
                                <option value="Şeffaf Polipropilen">Şeffaf Polipropilen Etiket</option>
                                <option value="Silver Mat Demirbaş">Silver Mat Demirbaş Barkod</option>
                                <option value="Japon Akmaz Kumaş">Japon Akmaz Kumaş (Yıkama Talimatı)</option>
                                <option value="Jakarlı Dokuma Etiket">Jakarlı Dokuma Yaka Etiketi</option>
                                <option value="Güvenlik VOID Etiket">Güvenlik VOID Etiket</option>
                                <option value="Karton Kutu Ambalaj">Karton Kutu Ambalaj</option>
                            </select>
                        </div>

                        <!-- Dimensions -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_dimensions') }}</label>
                            <input type="text" id="rfq_dims" name="dimensions" placeholder="Örn: 100 x 150 mm"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>

                        <!-- Quantity -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_quantity') }}</label>
                            <select id="rfq_qty" name="quantity" class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-medium focus:outline-none focus:border-orange-500">
                                <option value="1.000 Adet (Numune / Deneme)">1.000 Adet (Deneme Siparişi)</option>
                                <option value="5.000 Adet">5.000 Adet</option>
                                <option value="10.000 Adet" selected>10.000 Adet</option>
                                <option value="25.000 Adet">25.000 Adet</option>
                                <option value="50.000 Adet">50.000 Adet</option>
                                <option value="100.000+ Adet (Yüksek Tiraj)">100.000+ Adet (Toptan Fabrika)</option>
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
                            <input type="text" id="rfq_name" name="name" placeholder="Firma Adı veya Yetkili"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_phone') }} *</label>
                            <input type="tel" id="rfq_phone" name="phone" required placeholder="05XX XXX XX XX"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_city') }}</label>
                            <input type="text" id="rfq_city" name="city" placeholder="Örn: Gaziantep OSB, Bursa, Kocaeli..."
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_notes') }}</label>
                        <textarea id="rfq_notes" name="note" rows="2" placeholder="Özel yapışkan, kuka çapı, renk sayısı veya ambar tercihleriniz..."
                                  class="w-full px-3.5 py-2 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500"></textarea>
                    </div>
                </div>

                <!-- Submit Action Buttons: Dual Mode (WhatsApp or Email Form) -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                    <!-- WhatsApp Direct Quote Trigger -->
                    <button type="button" onclick="sendViaWhatsApp()" 
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs shadow-md glow-wa transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span>WhatsApp ile Anında Teklif İste</span>
                    </button>

                    <!-- Standard Database Lead Submission -->
                    <button type="submit" 
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/20 transition-all">
                        <span>{{ __('btn_submit_quote') }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
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
                        <span>📍</span> 81 İL AMBAR & LOJİSTİK AĞI
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
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Key Industrial Hub Cards (Compact Highlighting) -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 text-center">
                <a href="{{ route('regional.city', ['citySlug' => 'gaziantep']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🏭</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Gaziantep OSB</strong>
                    <span class="block text-[10px] text-emerald-400 mt-0.5">Merkez Fabrika</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'istanbul']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🏙️</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">İstanbul İkitelli</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">24-48 Saat Sevk</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'bursa']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🚗</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Bursa Demirtaş</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">DOSAB Sevkiyatı</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'kocaeli']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">⚙️</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Kocaeli Gebze</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">GOSB & Dilovası</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'ankara']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🏛️</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">Ankara OSTİM</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">İvedik & Sincan OSB</span>
                </a>

                <a href="{{ route('regional.city', ['citySlug' => 'izmir']) }}" class="bg-slate-800/80 hover:bg-slate-700 border border-slate-700 p-4 rounded-2xl transition-all group">
                    <span class="block text-xl mb-1 group-hover:scale-110 transition-transform">🚢</span>
                    <strong class="block text-xs font-bold text-white group-hover:text-orange-400">İzmir Kemalpaşa</strong>
                    <span class="block text-[10px] text-slate-400 mt-0.5">İAOSB & Ege Sevk</span>
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

        var msg = "Merhaba Göksan Etiket Fabrikası,\n" +
                  "Web sitenizden fiyat teklifi almak istiyorum:\n\n" +
                  "📌 Ürün: " + type + "\n" +
                  "📏 Ölçüler: " + dims + "\n" +
                  "📦 Adet: " + qty + "\n" +
                  "🏢 Firma/Yetkili: " + name + "\n" +
                  "📞 Telefon: " + phone + "\n" +
                  "📍 Teslimat İli: " + city + "\n" +
                  (notes ? "📝 Notlar: " + notes + "\n" : "") +
                  "\nToptan fabrika birim fiyat teklifinizi rica ederim.";

        var url = "https://wa.me/905330246338?text=" + encodeURIComponent(msg);
        window.open(url, '_blank');
    }
</script>
@endsection
