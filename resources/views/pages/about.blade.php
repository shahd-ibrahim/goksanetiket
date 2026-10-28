@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-orange-400">Ana Sayfa</a>
        <span>/</span>
        <span class="text-orange-400 font-medium">Kurumsal</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4">
        <span class="text-xs font-bold uppercase tracking-widest text-orange-400">GÖKSAN ETİKET • MATBAA • AMBALAJ</span>
        <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
            Türkiye Sanayisinin Güvenilir Etiket ve Ambalaj Üretim Merkezi
        </h1>
        <p class="text-base text-slate-300 leading-relaxed">
            Gaziantep 1. Organize Sanayi Bölgesinde kurulu entegre tesislerimizde, 8 renk UV flekso, yüksek hızlı ofset baskı ve jakarlı dokuma tezgahlarımızla sanayicimize doğrudan fabrika çözümleri sunuyoruz.
        </p>
    </div>

    <!-- Factory & Machine Park Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-navy-900 border border-navy-800 rounded-3xl p-8 space-y-4">
            <div class="text-3xl">🏭</div>
            <h3 class="text-xl font-bold text-white">Gaziantep 1. OSB Tesisi</h3>
            <p class="text-xs text-slate-300 leading-relaxed">
                1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31 adresindeki merkez üretim tesisimiz, hammadde ithalatından sevkiyata kadar tam entegre bir yapıda faaliyet göstermektedir.
            </p>
        </div>

        <div class="bg-navy-900 border border-navy-800 rounded-3xl p-8 space-y-4">
            <div class="text-3xl">⚙️</div>
            <h3 class="text-xl font-bold text-white">Son Teknoloji Makine Parkuru</h3>
            <p class="text-xs text-slate-300 leading-relaxed">
                8 renge kadar UV flekso rulo baskı makineleri, yüksek çözünürlüklü dokuma tezgahları, lazer bıçak kesim sistemleri ve ofset kutu ambalaj laminasyon hatları.
            </p>
        </div>

        <div class="bg-navy-900 border border-navy-800 rounded-3xl p-8 space-y-4">
            <div class="text-3xl">🚚</div>
            <h3 class="text-xl font-bold text-white">81 İl Ambar & Sevkiyat Ağı</h3>
            <p class="text-xs text-slate-300 leading-relaxed">
                Marmara, Ege, İç Anadolu, Akdeniz, Karadeniz ve Doğu bölgelerindeki tüm OSB'lere anlaşmalı lojistik ve ambar filomuzla 24-48 saatte doğrudan kapıya teslim.
            </p>
        </div>
    </div>

    <!-- Vision & Quality -->
    <div class="bg-navy-850 border border-navy-750 rounded-3xl p-8 md:p-12 space-y-6">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Kalite Politikamız ve Değerlerimiz</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-sm text-slate-300 leading-relaxed">
            <p>
                <strong class="text-white">Sıfır Hata Toleransı:</strong> Üretim bandından çıkan her rulo etiket, dokuma arma ve ambalaj kutusu; renk tutarlılığı, barkod okunabilirliği ve yapışkan mukavemeti açısından sıkı kalite kontrol testlerinden geçirilir.
            </p>
            <p>
                <strong class="text-white">Aracısız Fabrika Fiyatı:</strong> Toptan hammadde ithalatımız ve yüksek üretim kapasitemiz sayesinde, müşterilerimize piyasa koşullarının altında en avantajlı fabrika doğrudan fiyatlarını sunarız.
            </p>
        </div>
    </div>
</div>
@endsection
