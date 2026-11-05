@extends('layouts.app')

@section('content')
<div class="bg-slate-50/60 py-12 sm:py-16 lg:py-20 border-b border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Legal Navigation Pills -->
        <div class="flex flex-wrap items-center gap-2 mb-8">
            <a href="{{ route('legal.kvkk') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">KVKK Aydınlatma Metni</a>
            <a href="{{ route('legal.cookies') }}" class="px-4 py-2 rounded-xl text-xs font-bold bg-orange-600 text-white shadow-2xs">Çerez Politikası</a>
            <a href="{{ route('legal.privacy') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Gizlilik & Güvenlik</a>
            <a href="{{ route('legal.sales') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Mesafeli Satış Sözleşmesi</a>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-10 lg:p-12 shadow-2xs space-y-6 text-slate-700 text-sm leading-relaxed">
            <div class="border-b border-slate-100 pb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-orange-600">Çerez (Cookie) Aydınlatma Metni</span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">Çerez (Cookie) Politikası</h1>
                <p class="text-xs text-slate-400 mt-2">Son Güncelleme: {{ date('d.m.Y') }}</p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">1. Çerez (Cookie) Nedir?</h2>
                <p>
                    Çerezler, web sitemizi (<strong>goksanetiket.com</strong>) ziyaret ettiğinizde tarayıcınız aracılığıyla cihazınıza kaydedilen küçük metin dosyalarıdır. Bu dosyalar, sitenin güvenli ve düzgün çalışmasını sağlamak, dil tercihlerinizi (TR/AR) hatırlamak ve kullanıcı deneyiminizi iyileştirmek amacıyla kullanılmaktadır.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">2. Kullanılan Çerez Türleri</h2>
                <ul class="list-disc pl-5 space-y-2 text-slate-600">
                    <li><strong>Zorunlu (Teknik) Çerezler:</strong> Web sitesinin temel fonksiyonlarının (form güvenliği CSRF doğrulaması, oturum ve online ödeme güvenliği) çalışması için zorunlu olan çerezlerdir.</li>
                    <li><strong>İşlevsel Tercih Çerezleri:</strong> Seçtiğiniz site dilini (Türkçe / Arapça) ve çerez onayı tercihinizi hatırlayarak her sayfada tekrar seçim yapmanızı önleyen çerezlerdir.</li>
                    <li><strong>Performans ve Analitik Çerezleri:</strong> Ziyaretçilerin sitemizi nasıl kullandığını anonim olarak analiz ederek sayfa hızını ve içerik kalitesini artırmamıza yardımcı olan çerezlerdir.</li>
                </ul>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">3. Çerez Tercihlerinin Yönetimi</h2>
                <p>
                    Tarayıcınızın ayarlarını değiştirerek çerezlere ilişkin tercihlerinizi her zaman kişiselleştirebilir, mevcut çerezleri silebilir veya tüm çerezleri engelleyebilirsiniz. Ancak zorunlu çerezlerin devre dışı bırakılması durumunda teklif formu veya online ödeme gibi bazı güvenlik özelliklerinin çalışmayabileceğini hatırlatırız.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection

