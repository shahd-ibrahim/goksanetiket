@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">Kurumsal</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            GÖKSAN ETİKET • MATBAA • AMBALAJ
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            Türkiye Sanayisinin Güvenilir Etiket & Ambalaj Üreticisi
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            Gaziantep 1. Organize Sanayi Bölgesinde kurulu entegre tesislerimizde, 8 renk UV flekso, yüksek hızlı ofset baskı ve jakarlı dokuma tezgahlarımızla sanayicimize doğrudan fabrika çözümleri sunuyoruz.
        </p>
    </div>

    <!-- Factory & Machine Park Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center text-2xl">
                🏭
            </div>
            <h3 class="text-lg font-bold text-slate-900">Gaziantep 1. OSB Tesisi</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31 adresindeki merkez üretim tesisimiz, hammadde ithalatından sevkiyata kadar tam entegre bir yapıda faaliyet göstermektedir.
            </p>
        </div>

        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl">
                ⚙️
            </div>
            <h3 class="text-lg font-bold text-slate-900">Son Teknoloji Parkur</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                8 renge kadar UV flekso rulo baskı makineleri, yüksek çözünürlüklü dokuma tezgahları, lazer bıçak kesim sistemleri ve ofset kutu ambalaj laminasyon hatları.
            </p>
        </div>

        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl">
                🚚
            </div>
            <h3 class="text-lg font-bold text-slate-900">81 İl Ambar Sevkiyatı</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Marmara, Ege, İç Anadolu, Akdeniz, Karadeniz ve Doğu bölgelerindeki tüm OSB'lere anlaşmalı lojistik ve ambar filomuzla 24-48 saatte doğrudan kapıya teslim.
            </p>
        </div>
    </div>

    <!-- Vision & Quality -->
    <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 md:p-12 space-y-6">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Kalite Politikamız ve Değerlerimiz</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-sm text-slate-600 leading-relaxed">
            <div>
                <strong class="block text-slate-900 font-bold mb-1">Sıfır Hata Toleransı:</strong>
                Üretim bandından çıkan her rulo etiket, dokuma arma ve ambalaj kutusu; renk tutarlılığı, barkod okunabilirliği ve yapışkan mukavemeti açısından sıkı optik testlerden geçirilir.
            </div>
            <div>
                <strong class="block text-slate-900 font-bold mb-1">Aracısız Fabrika Fiyatı:</strong>
                Toptan hammadde ithalatımız ve yüksek tirajlı üretim kapasitemiz sayesinde, sanayicimize aracı komisyonları olmadan doğrudan 1. OSB fabrika satış fiyatı sunuyoruz.
            </div>
        </div>
    </div>
</div>
@endsection
