@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-12">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">Online Fiyat Teklifi Sihirbazı (RFQ)</span>
    </nav>

    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-3">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            ⚡ FABRİKADAN DOĞRUDAN TOPTAN FİYAT
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
            {{ __('rfq_title') }}
        </h1>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            {{ __('rfq_subtitle') }}
        </p>
    </div>

    @if(session('quote_success'))
        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold text-center shadow-xs">
            🎉 {{ session('quote_success') }}
        </div>
    @endif

    <!-- Wizard Box -->
    <div class="bg-white border-2 border-orange-500/20 rounded-3xl p-6 sm:p-10 shadow-xl space-y-8">
        <form id="dedicatedRfqForm" action="{{ route('corporate.quote') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Step 1: Specifications -->
            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 space-y-4">
                <div class="flex items-center gap-2 border-b border-slate-200 pb-3">
                    <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">1</span>
                    <h3 class="text-sm font-bold text-slate-900">{{ __('rfq_step1') }}</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_label_type') }}</label>
                        <select id="rfq_type" name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-medium focus:outline-none focus:border-orange-500">
                            @foreach($products as $prod)
                                <option value="{{ $prod->title }}">{{ $prod->title }}</option>
                            @endforeach
                            <option value="Özel Tasarım & Ambalaj">Özel Tasarım & Ambalaj</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_dimensions') }}</label>
                        <input type="text" id="rfq_dims" name="dimensions" placeholder="Örn: 80 x 40 mm, 100 x 150 mm"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_quantity') }}</label>
                        <select id="rfq_qty" name="quantity" class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-medium focus:outline-none focus:border-orange-500">
                            <option value="1.000 Adet (Numune / Deneme)">1.000 Adet (Numune / Deneme)</option>
                            <option value="5.000 Adet">5.000 Adet</option>
                            <option value="10.000 Adet" selected>10.000 Adet</option>
                            <option value="25.000 Adet">25.000 Adet</option>
                            <option value="50.000 Adet">50.000 Adet</option>
                            <option value="100.000+ Adet (Toptan Fabrika)">100.000+ Adet (Toptan Fabrika)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Step 2: Contact Information -->
            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 space-y-4">
                <div class="flex items-center gap-2 border-b border-slate-200 pb-3">
                    <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">2</span>
                    <h3 class="text-sm font-bold text-slate-900">{{ __('rfq_step2') }}</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_company') }}</label>
                        <input type="text" id="rfq_name" name="name" placeholder="Firma Adı veya Yetkili İsim"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_phone') }} *</label>
                        <input type="tel" id="rfq_phone" name="phone" required placeholder="05XX XXX XX XX"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_city') }}</label>
                        <select id="rfq_city" name="city" class="w-full px-3.5 py-2.5 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs font-medium focus:outline-none focus:border-orange-500">
                            @foreach($cities as $city)
                                <option value="{{ $city->name }}" {{ $city->slug === 'gaziantep' ? 'selected' : '' }}>
                                    {{ $city->name }} (#{{ sprintf('%02d', $city->plate_code) }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">{{ __('rfq_notes') }}</label>
                    <textarea id="rfq_notes" name="note" rows="3" placeholder="Kuka çapı (25, 40, 76 mm), yapışkan tercihi (akrilik, hotmelt, nonperm), renk sayısı veya teslimat ambarı..."
                              class="w-full px-3.5 py-2 rounded-xl bg-white border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-orange-500"></textarea>
                </div>
            </div>

            <!-- Double Submission Action -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                <button type="button" onclick="sendViaWhatsAppDedicated()" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs shadow-md glow-wa transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                    <span>WhatsApp ile Anında Teklif İste</span>
                </button>

                <button type="submit" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/20 transition-all">
                    <span>{{ __('btn_submit_quote') }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function sendViaWhatsAppDedicated() {
        var type = document.getElementById('rfq_type')?.value || 'Rulo Etiket';
        var dims = document.getElementById('rfq_dims')?.value || 'Belirtilmedi';
        var qty = document.getElementById('rfq_qty')?.value || '10.000 Adet';
        var name = document.getElementById('rfq_name')?.value || 'Belirtilmedi';
        var phone = document.getElementById('rfq_phone')?.value || '';
        var city = document.getElementById('rfq_city')?.value || 'Gaziantep';
        var notes = document.getElementById('rfq_notes')?.value || '';

        var msg = "Merhaba Göksan Etiket Fabrikası,\n" +
                  "Web sitenizden RFQ teklif talebi oluşturmak istiyorum:\n\n" +
                  "📌 Ürün: " + type + "\n" +
                  "📏 Ölçüler: " + dims + "\n" +
                  "📦 Adet: " + qty + "\n" +
                  "🏢 Firma: " + name + "\n" +
                  "📞 İletişim: " + phone + "\n" +
                  "📍 Teslimat İli: " + city + "\n" +
                  (notes ? "📝 Notlar: " + notes + "\n" : "") +
                  "\nDoğrudan toptan birim fiyat teklifinizi rica ederim.";

        var url = "https://wa.me/905330246338?text=" + encodeURIComponent(msg);
        window.open(url, '_blank');
    }
</script>
@endsection
