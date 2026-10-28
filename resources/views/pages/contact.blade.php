@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-orange-400">Ana Sayfa</a>
        <span>/</span>
        <span class="text-orange-400 font-medium">İletişim</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4">
        <span class="text-xs font-bold uppercase tracking-widest text-orange-400">GÖKSAN İLETİŞİM & FABRİKA</span>
        <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
            Fabrikamızla İletişime Geçin
        </h1>
        <p class="text-base text-slate-300 leading-relaxed">
            Gaziantep 1. Organize Sanayi Bölgesindeki üretim tesisimizi ziyaret edebilir, telefon, WhatsApp veya teklif formu üzerinden doğrudan satış mühendislerimize ulaşabilirsiniz.
        </p>
    </div>

    <!-- Contact Details & Form Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <!-- Info Column -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-navy-900 border border-navy-800 rounded-3xl p-8 space-y-6 shadow-xl">
                <!-- Address -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-500/10 border border-orange-500/30 text-orange-400 flex items-center justify-center text-xl shrink-0">
                        📍
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white mb-1">Fabrika Adresi</h4>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31 Şehitkamil / GAZİANTEP
                        </p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 border border-sky-500/30 text-sky-400 flex items-center justify-center text-xl shrink-0">
                        📞
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white mb-1">Telefon Santrali</h4>
                        <a href="tel:+903425034652" class="text-base font-bold text-white hover:text-orange-400 transition-colors">
                            +90 342 503 46 52
                        </a>
                        <p class="text-[11px] text-slate-500 mt-0.5">Pazartesi - Cumartesi: 08:30 - 18:30</p>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center justify-center text-xl shrink-0">
                        📱
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white mb-1">Mobil / WhatsApp Sipariş</h4>
                        <a href="https://wa.me/905330246338" target="_blank" class="text-base font-bold text-emerald-400 hover:underline">
                            +90 533 024 63 38
                        </a>
                        <p class="text-[11px] text-slate-500 mt-0.5">Hızlı teknik şartname ve fiyat teklifi hattı</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-400 flex items-center justify-center text-xl shrink-0">
                        ✉️
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white mb-1">Kurumsal E-Posta</h4>
                        <a href="mailto:info@goksanetiket.com" class="text-sm text-slate-300 hover:text-orange-400 transition-colors">
                            info@goksanetiket.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Logistics Note -->
            <div class="bg-navy-950 border border-navy-800 rounded-2xl p-6 text-xs text-slate-400 space-y-2">
                <div class="text-orange-400 font-bold flex items-center gap-2">
                    <span>🚚</span> 81 İl Lojistik & Ambar Desteği
                </div>
                <p>
                    Türkiye'nin neresinde olursanız olun, siparişleriniz anlaşmalı ambar ve kargo şirketlerimizle doğrudan fabrikanızın kapısına teslim edilir.
                </p>
            </div>
        </div>

        <!-- Form Column -->
        <div class="lg:col-span-7 bg-navy-900 border border-navy-800 rounded-3xl p-8 md:p-10 shadow-xl">
            @if(session('quote_success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-semibold">
                    {{ session('quote_success') }}
                </div>
            @endif

            <h3 class="text-xl font-bold text-white mb-2">Hemen Mesaj Gönderin</h3>
            <p class="text-xs text-slate-400 mb-6">Formu doldurarak numune talebinde bulunabilir veya fiyat teklifi isteyebilirsiniz.</p>

            <form action="{{ route('corporate.quote') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Yetkili Adı / Soyadı *</label>
                        <input type="text" name="name" required placeholder="Adınız Soyadınız"
                               class="w-full px-4 py-2.5 rounded-xl bg-navy-950 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Telefon Numaranız *</label>
                        <input type="tel" name="phone" required placeholder="05XX XXX XX XX"
                               class="w-full px-4 py-2.5 rounded-xl bg-navy-950 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">İlgilendiğiniz Ürün Grubu</label>
                        <select name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-navy-750 text-white text-xs focus:outline-none focus:border-orange-500">
                            <option value="Rulo & Barkod Etiketleri">Rulo & Barkod Etiketleri</option>
                            <option value="Tekstil Dokuma Etiket">Tekstil & Dokuma Etiketleri</option>
                            <option value="Japon Akmaz Kumaş">Japon Akmaz Yıkama Talimatı</option>
                            <option value="Karton Sallama Etiketi">Karton Sallama Etiket (Hang Tag)</option>
                            <option value="Karton Kutu Ambalaj">Kutu Ambalaj Çözümleri</option>
                            <option value="Diğer">Diğer / Özel İmalat</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1.5">Bulunduğunuz İl / OSB</label>
                        <input type="text" name="city" placeholder="Örn: Gaziantep, Bursa, İstanbul..."
                               class="w-full px-4 py-2.5 rounded-xl bg-navy-950 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1.5">Mesajınız & Detaylar</label>
                    <textarea name="note" rows="4" placeholder="Ürün ölçüleri, adet bilgisi, yapışkan veya özel talepleriniz..."
                              class="w-full px-4 py-2.5 rounded-xl bg-navy-950 border border-navy-750 text-white text-sm focus:outline-none focus:border-orange-500"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full py-3.5 rounded-xl bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-400 hover:to-orange-500 text-white font-extrabold text-sm shadow-xl shadow-orange-500/25 transition-all">
                        Mesajı ve Teklif Talebini Gönder &rarr;
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
