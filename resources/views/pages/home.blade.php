@extends('layouts.app')

@section('content')
<div class="space-y-24 pb-20">
    <!-- Hero Section -->
    <section class="relative pt-12 pb-24 overflow-hidden border-b border-navy-850">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Hero Text -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-orange-500/10 border border-orange-500/30 text-orange-400">
                        <span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
                        Gaziantep 1. OSB • Doğrudan Üretici Fabrika Fiyatları
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-[1.12]">
                        Endüstriyel Rulo Etiket,
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-orange-500 to-amber-300">
                            Tekstil Dokuma & Kutu Ambalaj
                        </span>
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl">
                        En modern 8 renk UV flekso ve ofset baskı parkurumuzla, gıda, tekstil, kimya, otomotiv ve lojistik sektörlerine toptan etiket ve ambalaj üretiyoruz. <strong class="text-white">81 ilimizin tüm organize sanayi bölgelerine</strong> doğrudan sevkiyat.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="#hizli-teklif" 
                           class="inline-flex items-center gap-2.5 px-8 py-4 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-black text-sm shadow-xl shadow-orange-500/25 hover:-translate-y-0.5 transition-all">
                            <span>Hemen Fiyat Teklifi Al</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>

                        <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba, Göksan Etiket fiyat teklifi almak istiyorum.') }}" target="_blank"
                           class="inline-flex items-center gap-2.5 px-7 py-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-sm shadow-xl shadow-emerald-500/20 hover:-translate-y-0.5 transition-all">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                            <span>WhatsApp ile İletişim</span>
                        </a>

                        <a href="tel:+903425034652" class="inline-flex items-center gap-2 px-5 py-4 rounded-xl border border-navy-700 bg-navy-850 hover:bg-navy-800 text-slate-200 text-sm font-bold transition-all">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>0342 503 46 52</span>
                        </a>
                    </div>
                </div>

                <!-- Right Hero Visual Card -->
                <div class="lg:col-span-5">
                    <div class="relative bg-gradient-to-br from-navy-850 to-navy-900 border border-navy-700/80 rounded-3xl p-8 shadow-2xl overflow-hidden">
                        <div class="absolute -top-12 -right-12 w-48 h-48 bg-orange-500/15 rounded-full blur-3xl pointer-events-none"></div>

                        <div class="space-y-6 relative z-10">
                            <div class="flex items-center justify-between border-b border-navy-750 pb-4">
                                <span class="text-xs font-mono font-bold text-orange-400 uppercase tracking-wider">FABRİKA KAPASİTESİ</span>
                                <span class="text-xs bg-navy-950 px-2.5 py-1 rounded-md text-emerald-400 font-bold">● Üretim Aktif</span>
                            </div>

                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div class="bg-navy-950/80 p-4 rounded-2xl border border-navy-800">
                                    <div class="text-2xl font-black text-white font-mono">8 Renk UV</div>
                                    <div class="text-[11px] text-slate-400 mt-1">Yüksek Hızlı Flekso</div>
                                </div>
                                <div class="bg-navy-950/80 p-4 rounded-2xl border border-navy-800">
                                    <div class="text-2xl font-black text-orange-400 font-mono">24-48 Saat</div>
                                    <div class="text-[11px] text-slate-400 mt-1">81 İl Ambar Sevkiyatı</div>
                                </div>
                                <div class="bg-navy-950/80 p-4 rounded-2xl border border-navy-800">
                                    <div class="text-2xl font-black text-white font-mono">300+ Kalıp</div>
                                    <div class="text-[11px] text-slate-400 mt-1">Hazır Bıçak Çeşitliliği</div>
                                </div>
                                <div class="bg-navy-950/80 p-4 rounded-2xl border border-navy-800">
                                    <div class="text-2xl font-black text-emerald-400 font-mono">%100</div>
                                    <div class="text-[11px] text-slate-400 mt-1">Doğrudan Fabrika Fiyatı</div>
                                </div>
                            </div>

                            <div class="p-3.5 bg-navy-950/60 rounded-xl border border-navy-800 text-xs text-slate-300 flex items-center gap-3">
                                <span class="text-xl">📍</span>
                                <div>
                                    <strong class="text-white">Gaziantep 1. OSB Üretim Merkezi</strong>
                                    <div class="text-[11px] text-slate-400">83105 Nolu Cadde No:31 Şehitkamil</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 Core Modules Showcase -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="text-xs font-bold uppercase tracking-widest text-orange-400">ÜÇ ANA ÜRETİM DİSİPLİNİ</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                GÖKSAN Üretim ve Hizmet Modülleri
            </h2>
            <p class="text-sm sm:text-base text-slate-400">
                Endüstriyel rulo etiketlerden marka kimliği oluşturan dokuma armalara ve yüksek mukavemetli kutu ambalajlara kadar tek çatı altında entegre çözümler.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Module 1: Rulo Etiket & Barkod -->
            <div class="bg-navy-900 border border-navy-800 hover:border-orange-500/60 rounded-3xl p-8 transition-all duration-300 hover:-translate-y-1 shadow-xl flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-orange-500/10 border border-orange-500/30 text-orange-400 flex items-center justify-center text-2xl mb-6">
                        🏷️
                    </div>
                    <span class="text-xs font-mono font-bold text-orange-400 uppercase">MODÜL 01</span>
                    <h3 class="text-xl font-bold text-white mt-1 mb-3">
                        Rulo Etiket & Barkod Etiketleri
                    </h3>
                    <p class="text-xs text-slate-300 leading-relaxed mb-6">
                        Termal (Eko / Lamine), Kuşe, PP Opak plastik, Silver Mat demirbaş ve şeffaf rulo etiketler. Tüm masaüstü ve endüstriyel barkod yazıcılarla %100 uyumlu sarım.
                    </p>

                    <ul class="space-y-2 text-xs text-slate-400 border-t border-navy-800 pt-4 mb-6">
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Termal & Kuşe Rulo Baskı</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> PP Opak & Kimyasala Dayanıklı</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Silver Mat & Garanti Void Etiketleri</li>
                    </ul>
                </div>

                <a href="{{ route('corporate.etiket') }}" class="w-full py-3 rounded-xl bg-navy-850 hover:bg-orange-500 text-white font-bold text-xs text-center border border-navy-700 hover:border-orange-500 transition-colors">
                    Rulo Etiketleri İncele &rarr;
                </a>
            </div>

            <!-- Module 2: Tekstil & Dokuma -->
            <div class="bg-navy-900 border border-navy-800 hover:border-orange-500/60 rounded-3xl p-8 transition-all duration-300 hover:-translate-y-1 shadow-xl flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-500/10 border border-sky-500/30 text-sky-400 flex items-center justify-center text-2xl mb-6">
                        🧵
                    </div>
                    <span class="text-xs font-mono font-bold text-sky-400 uppercase">MODÜL 02</span>
                    <h3 class="text-xl font-bold text-white mt-1 mb-3">
                        Tekstil & Dokuma Etiketleri
                    </h3>
                    <p class="text-xs text-slate-300 leading-relaxed mb-6">
                        Jakar dokuma tezgahlarında yüksek çözünürlüklü marka ve yaka etiketleri, 90°C yıkamaya dayanıklı Japon akmaz kumaş şeritler ve varak yaldızlı karton sallama etiketleri.
                    </p>

                    <ul class="space-y-2 text-xs text-slate-400 border-t border-navy-800 pt-4 mb-6">
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Tafta / Saten Dokuma Arma</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Japon Akmaz Yıkama Talimatı</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Özel İpli Karton Sallama (Hang Tag)</li>
                    </ul>
                </div>

                <a href="{{ route('corporate.tekstil') }}" class="w-full py-3 rounded-xl bg-navy-850 hover:bg-orange-500 text-white font-bold text-xs text-center border border-navy-700 hover:border-orange-500 transition-colors">
                    Tekstil Etiketlerini İncele &rarr;
                </a>
            </div>

            <!-- Module 3: Matbaa & Ambalaj -->
            <div class="bg-navy-900 border border-navy-800 hover:border-orange-500/60 rounded-3xl p-8 transition-all duration-300 hover:-translate-y-1 shadow-xl flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/30 text-amber-400 flex items-center justify-center text-2xl mb-6">
                        📦
                    </div>
                    <span class="text-xs font-mono font-bold text-amber-400 uppercase">MODÜL 03</span>
                    <h3 class="text-xl font-bold text-white mt-1 mb-3">
                        Matbaa & Ambalaj Çözümleri
                    </h3>
                    <p class="text-xs text-slate-300 leading-relaxed mb-6">
                        Gıda, kozmetik ve ihracat sanayisine yönelik özel ofset baskılı karton kutular, lamine ambalaj, özel bıçak kesimli endüstriyel etiketler ve palet ambalaj çözümleri.
                    </p>

                    <ul class="space-y-2 text-xs text-slate-400 border-t border-navy-800 pt-4 mb-6">
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Dip Kilit & Özel Karton Kutular</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Hassas Lazer & Bıçak Kesimli Etiketler</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Endüstriyel Ambalaj & Koli Baskı</li>
                    </ul>
                </div>

                <a href="{{ route('corporate.ambalaj') }}" class="w-full py-3 rounded-xl bg-navy-850 hover:bg-orange-500 text-white font-bold text-xs text-center border border-navy-700 hover:border-orange-500 transition-colors">
                    Ambalaj Çözümlerini İncele &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- Fast Lead Capture Quote Form -->
    <section id="hizli-teklif" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-navy-850 via-navy-900 to-navy-950 border border-navy-750 rounded-3xl p-8 md:p-12 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-5 space-y-5">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-orange-500/10 border border-orange-500/30 text-orange-400">
                        ⚡ ANINDA FİYAT TEKLİFİ
                    </span>
                    <h2 class="text-3xl font-extrabold text-white tracking-tight">
                        Doğrudan Üreticiden Toptan Fiyat Alın
                    </h2>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Etiket veya ambalaj ihtiyacınızı iletin; Gaziantep 1. OSB fabrikamızdaki uzman satış ekibimiz en uygun birim maliyet teklifinizi 15 dakika içinde hazırlasın.
                    </p>

                    <div class="space-y-3 pt-2 text-xs text-slate-300">
                        <div class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">✓</span>
                            <span>Adresinize ücretsiz numune kiti gönderimi</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">✓</span>
                            <span>Türkiye geneli 81 ile 24-48 saat ambar teslimi</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">✓</span>
                            <span>Aracısız, doğrudan 1. OSB fabrika fiyatı</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 bg-navy-950/80 border border-navy-800 rounded-2xl p-6 md:p-8">
                    @if(session('quote_success'))
                        <div class="mb-4 p-4 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-semibold">
                            {{ session('quote_success') }}
                        </div>
                    @endif

                    <form action="{{ route('corporate.quote') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">İsim & Soyisim / Firma</label>
                                <input type="text" name="name" placeholder="Firma veya Yetkili Adı"
                                       class="w-full px-4 py-2.5 rounded-xl bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Telefon Numaranız *</label>
                                <input type="tel" name="phone" required placeholder="05XX XXX XX XX"
                                       class="w-full px-4 py-2.5 rounded-xl bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Ürün Modülü</label>
                                <select name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-900 border border-navy-750 text-white text-xs focus:outline-none focus:border-orange-500">
                                    <option value="Rulo Etiket">Rulo & Barkod Etiketi</option>
                                    <option value="Tekstil Dokuma">Dokuma & Yaka Etiketi</option>
                                    <option value="Japon Akmaz">Japon Akmaz Kumaş</option>
                                    <option value="Kutu Ambalaj">Karton Kutu Ambalaj</option>
                                    <option value="Özel Kesim">Özel Kesim Etiket</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Miktar (Adet/Rulo)</label>
                                <input type="text" name="quantity" placeholder="Örn: 10.000 adet"
                                       class="w-full px-4 py-2.5 rounded-xl bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Teslimat İli</label>
                                <input type="text" name="city" placeholder="Örn: Gaziantep, Bursa..."
                                       class="w-full px-4 py-2.5 rounded-xl bg-navy-900 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1.5">Ölçü veya Özel Notlar (Opsiyonel)</label>
                            <textarea name="note" rows="2" placeholder="En x boy ölçüleri, yapışkan tercihi veya özel talepleriniz..."
                                      class="w-full px-4 py-2 rounded-xl bg-navy-900 border border-navy-750 text-white text-xs focus:outline-none focus:border-orange-500"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" 
                                    class="w-full py-3.5 rounded-xl bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-400 hover:to-orange-500 text-white font-extrabold text-sm shadow-xl shadow-orange-500/25 transition-all">
                                Ücretsiz Fiyat Teklifi Talep Et &rarr;
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Mandatory Feature: Regional SEO Engine 81-City Matrix Component -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10 space-y-2">
            <span class="text-xs font-bold uppercase tracking-widest text-orange-400">TÜRKİYE GENELİ HİZMET AĞIMIZ</span>
            <h2 class="text-3xl font-extrabold text-white tracking-tight">
                81 İlimizin Tamamında Etiket Fabrikası
            </h2>
            <p class="text-xs sm:text-sm text-slate-400">
                Gaziantep merkez fabrikamızdan tüm organize sanayi bölgelerine düzenli ambar ve kargo sevkiyatı gerçekleştiriyoruz.
            </p>
        </div>

        <x-regional-city-grid />
    </section>
</div>
@endsection
