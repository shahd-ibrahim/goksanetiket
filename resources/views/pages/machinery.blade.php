@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">Üretim Parkuru & Makine Parkı</span>
    </nav>

    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            GAZİANTEP 1. OSB ÜRETİM GÜCÜ
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            Modern Makine Parkuru & Yüksek Hızlı Baskı Hatları
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            Avrupa standartlarında tam servo flekso hatlarımız, mikron hassasiyetli dijital sonlandırma ünitelerimiz ve otomatik dilimleme sistemlerimizle Türkiye sanayisine sıfır hata toleransıyla hizmet veriyoruz.
        </p>
    </div>

    <!-- Machinery Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Machine 1: 8 Renk UV Flexo -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-orange-600 uppercase">HAT 01 • RULO FLEKSO</span>
                <span class="text-xs bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded font-bold">Yüksek Kapasite</span>
            </div>
            <div class="text-3xl">🖨️</div>
            <h3 class="text-xl font-bold text-slate-900">8 Renk UV Flexo Baskı Hattı</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Tam servo motor kontrollü, 150 m/dakika baskı hızına sahip 8 renkli UV kurutmalı flekso hattımız; kuşe, termal, PP opak ve metalize zeminlerde kusursuz raster geçişleri ve canlı renk doygunluğu sağlar.
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> UV Kurutma & UV Lak Koruma Üniteleri</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Ön & Arka Eşzamanlı Çift Taraflı Baskı</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Yapışkan Tarafına Baskı Kabiliyeti (De-lam / Re-lam)</li>
            </ul>
        </div>

        <!-- Machine 2: Dijital Sonlandırma & Kesim -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-blue-600 uppercase">HAT 02 • BİÇAK & KESİM</span>
                <span class="text-xs bg-blue-100 text-blue-800 px-2.5 py-0.5 rounded font-bold">Mikron Hassasiyeti</span>
            </div>
            <div class="text-3xl">✂️</div>
            <h3 class="text-xl font-bold text-slate-900">Dijital Rulo Kesim & Manyetik Bıçak Parkı</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Manyetik silindirler ve 300'ü aşkın hazır bıçak arşivimiz sayesinde, müşterilerimize kalıp bekleme süresi ve ekstra maliyeti olmadan en karmaşık geometrik şekillerde etiket kesimi sunuyoruz.
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> ± 0.1 mm Kesim Pozisyonlama Toleransı</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Yarık (Back Slit) ve Perfore Delik Açma</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Ayıklama (Matrix Stripping) ile Pürüzsüz Kenarlar</li>
            </ul>
        </div>

        <!-- Machine 3: Sıcak / Soğuk Varak Yaldız & Serigrafi -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-amber-600 uppercase">HAT 03 • LÜKS AMBALAJ</span>
                <span class="text-xs bg-amber-100 text-amber-800 px-2.5 py-0.5 rounded font-bold">Premium Efektler</span>
            </div>
            <div class="text-3xl">✨</div>
            <h3 class="text-xl font-bold text-slate-900">Sıcak & Soğuk Varak Yaldız ve Serigrafi</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Kozmetik, zeytinyağı, şarap ve lüks tüketim ambalajları için altın, gümüş, hologram varak folyo uygulaması ve dokunsal kabartma (braille / gofre) lak baskısı.
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Cold Foil ve Hot Stamping Yaldız</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Dokunsal Emboss & Gofre Kabartma</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Çizilmeye Dayanıklı Mat & Parlak Koruyucu Selefon</li>
            </ul>
        </div>

        <!-- Machine 4: Otomatik Dilimleme & Kuka Sarım -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-purple-600 uppercase">HAT 04 • SARIM & DİLİMLEME</span>
                <span class="text-xs bg-purple-100 text-purple-800 px-2.5 py-0.5 rounded font-bold">Yazıcı Standartları</span>
            </div>
            <div class="text-3xl">🔄</div>
            <h3 class="text-xl font-bold text-slate-900">Otomatik Dilimleme & Kuka Sarım Hatları</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Tüm barkod aplikatörleri ve masaüstü yazıcılar için 25mm, 40mm ve 76mm kuka standartlarında, hassas tansiyon ayarıyla metrajlı rulo sarımı gerçekleştirilir.
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Otomatik Metraj ve Adet Sayacı</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> İç & Dış Sarım Yönü Seçenekleri</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> Kamera Kontrollü Hata Ayıklama Sistemi</li>
            </ul>
        </div>
    </div>

    <!-- Call to Action Banner -->
    <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-3xl p-8 md:p-12 text-white flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2">
            <h3 class="text-2xl font-black">Özel Projeniz İçin Teknik Danışmanlık Alın</h3>
            <p class="text-xs sm:text-sm text-slate-300">Üretim mühendislerimiz kalıp, hammadde ve baskı teknolojisi seçiminde ücretsiz destek sağlamaktadır.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('corporate.rfq') }}" class="px-6 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 font-bold text-xs text-white shadow-md">
                Teklif İste
            </a>
            <a href="https://wa.me/905330246338" target="_blank" class="px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 font-bold text-xs text-white shadow-md">
                WhatsApp Danışmanı
            </a>
        </div>
    </div>
</div>
@endsection
