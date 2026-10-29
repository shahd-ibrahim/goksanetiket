@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">İletişim & Fabrika Adresi</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            GÖKSAN İLETİŞİM & MERKEZ FABRİKA
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            Fabrikamızla İletişime Geçin
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            Gaziantep 1. Organize Sanayi Bölgesindeki üretim tesisimizi ziyaret edebilir, telefon, WhatsApp veya teklif formu üzerinden doğrudan satış mühendislerimize ulaşabilirsiniz.
        </p>
    </div>

    <!-- Contact Details & Form Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <!-- Info Column -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-white border border-slate-200 rounded-3xl p-8 space-y-6 shadow-xs">
                <!-- Address -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center text-xl shrink-0">
                        📍
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 mb-1">Fabrika Adresi</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31 Şehitkamil / GAZİANTEP
                        </p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl shrink-0">
                        📞
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 mb-1">Telefon Santrali</h4>
                        <a href="tel:+903425034652" class="text-base font-bold text-slate-900 hover:text-orange-600 transition-colors">
                            +90 342 503 46 52
                        </a>
                        <p class="text-[11px] text-slate-500 mt-0.5">Pazartesi - Cumartesi: 08:30 - 18:30</p>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl shrink-0">
                        📱
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 mb-1">Mobil / WhatsApp Sipariş</h4>
                        <a href="https://wa.me/905330246338" target="_blank" class="text-base font-bold text-emerald-600 hover:underline">
                            +90 533 024 63 38
                        </a>
                        <p class="text-[11px] text-slate-500 mt-0.5">Hızlı teknik şartname ve fiyat teklifi hattı</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-xl shrink-0">
                        ✉️
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 mb-1">Kurumsal E-Posta</h4>
                        <a href="mailto:info@goksanetiket.com" class="text-sm text-slate-600 hover:text-orange-600 transition-colors">
                            info@goksanetiket.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Transport & Delivery Info -->
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 text-xs text-slate-600 space-y-2">
                <strong class="block text-slate-900 font-bold">81 İl Sevkiyat & Ambar Çıkışları:</strong>
                <p>Her iş günü saat 17:00'ye kadar üretimi tamamlanan rulo etiket siparişleri, Gaziantep Ambarlar Sitesinden Türkiye geneli 81 ilin tüm organize sanayi bölgelerine sevk edilir.</p>
            </div>
        </div>

        <!-- Form Column -->
        <div class="lg:col-span-7 bg-white border border-slate-200 rounded-3xl p-8 shadow-xs">
            <h3 class="text-xl font-bold text-slate-900 mb-2">Hızlı İletişim Formu</h3>
            <p class="text-xs text-slate-500 mb-6">Formu doldurarak soru, numune veya fiyat teklifi talebinizi anında fabrikamıza iletebilirsiniz.</p>

            @if(session('quote_success'))
                <div class="mb-4 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold">
                    {{ session('quote_success') }}
                </div>
            @endif

            <form action="{{ route('corporate.quote') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">İsim & Soyisim / Firma Adı *</label>
                        <input type="text" name="name" required placeholder="Firma Adı veya Yetkili"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-xs focus:outline-none focus:border-orange-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Telefon Numaranız *</label>
                        <input type="tel" name="phone" required placeholder="05XX XXX XX XX"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-xs focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">İlgilendiğiniz Ürün Grubu</label>
                        <select name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-xs focus:outline-none focus:border-orange-500">
                            <option value="Rulo Etiket">Rulo & Barkod Etiketi</option>
                            <option value="Tekstil Dokuma">Dokuma & Yaka Etiketi</option>
                            <option value="Japon Akmaz">Japon Akmaz Kumaş</option>
                            <option value="Kutu Ambalaj">Karton Kutu Ambalaj</option>
                            <option value="Özel Kesim">Özel Kesim & Varak Yaldız</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Bulunduğunuz Şehir</label>
                        <input type="text" name="city" placeholder="Örn: Gaziantep, Bursa, İstanbul..."
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-xs focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Mesajınız / Teknik İstekleriniz</label>
                    <textarea name="note" rows="4" placeholder="Ürün ölçüleri, hammadde talebiniz veya sormak istedikleriniz..."
                              class="w-full px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-xs focus:outline-none focus:border-orange-500"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md transition-all">
                        Mesajı Gönder &rarr;
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
