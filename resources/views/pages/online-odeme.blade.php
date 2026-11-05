@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div class="bg-slate-50/70 py-10 sm:py-16 lg:py-20 border-b border-slate-200/80">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Page Header -->
        <div class="max-w-3xl mb-10 sm:mb-12">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-50 border border-orange-200 text-orange-700 text-xs font-bold uppercase tracking-wider mb-3">
                <svg class="w-3.5 h-3.5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                <span>{{ $isRtl ? 'نظام الدفع الإلكتروني للشركات (3D Secure)' : 'Kurumsal Sanal POS & Güvenli Tahsilat' }}</span>
            </div>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
                {{ $isRtl ? 'الدفع الإلكتروني الآمن (Online Ödeme)' : 'Online Ödeme (Sanal POS)' }}
            </h1>
            <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
                {{ $isRtl
                    ? 'يمكنكم سداد فواتير ودفعات طلبات الملصقات والتغليف بأمان تام عبر البطاقات الائتمانية والتجارية بتقنية الحماية الثلاثية 256-Bit SSL و 3D Secure.'
                    : 'Sipariş veya cari fatura ödemelerinizi 256-Bit SSL şifreleme ve 3D Secure doğrulama altyapısıyla tüm ticari ve bireysel kredi kartlarınızla güvenle gerçekleştirebilirsiniz.' }}
            </p>
        </div>

        @if(session('payment_status'))
            <div class="mb-8 p-4 sm:p-5 rounded-2xl bg-orange-50 border border-orange-200 text-slate-900 flex items-start gap-3 shadow-xs">
                <span class="w-6 h-6 rounded-full bg-orange-600 text-white text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">✓</span>
                <div class="text-xs sm:text-sm font-medium leading-relaxed">
                    {{ session('payment_status') }}
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">

            <!-- Left Column: B2B Payment Form (7 cols) -->
            <div class="lg:col-span-7 bg-white rounded-3xl border border-slate-200 p-5 sm:p-8 lg:p-10 shadow-sm">
                <form action="{{ route('payment.submit') }}" method="POST" class="space-y-6" id="sanalPosForm">
                    @csrf

                    <!-- Section 1: Firma & Sipariş Bilgileri -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                            <div class="flex items-center gap-2.5">
                                <span class="w-6 h-6 rounded-full bg-orange-600 text-white text-xs font-bold flex items-center justify-center">1</span>
                                <h2 class="text-sm sm:text-base font-bold text-slate-900">
                                    {{ $isRtl ? 'بيانات الشركة والطلب' : 'Firma & Sipariş Bilgileri' }}
                                </h2>
                            </div>
                            <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">B2B Tahsilat</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'رقم الطلب / الفاتورة *' : 'Sipariş / Fatura No *' }}
                                </label>
                                <input type="text" name="order_no" required placeholder="{{ $isRtl ? 'مثال: GKS-2026-104' : 'Örn: GKS-2026-1042' }}"
                                       value="{{ old('order_no') }}"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:border-orange-500 transition">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'اسم الشركة / العميل *' : 'Firma Ünvanı / Ad Soyad *' }}
                                </label>
                                <input type="text" name="customer_name" required placeholder="{{ $isRtl ? 'اسم الشركة أو المسؤول' : 'Firma Adı veya Yetkili Ad Soyad' }}"
                                       value="{{ old('customer_name') }}"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:border-orange-500 transition">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'رقم الهاتف (لإشعار SMS) *' : 'Cep Telefonu (3D SMS Doğrulama) *' }}
                                </label>
                                <input type="tel" name="phone" required placeholder="05XX XXX XX XX" dir="ltr"
                                       value="{{ old('phone') }}"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:border-orange-500 transition">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'البريد الإلكتروني (لإرسال الإيصال)' : 'E-Posta (Dekont Gönderimi)' }}
                                </label>
                                <input type="email" name="email" placeholder="muhasebe@firmaniz.com" dir="ltr"
                                       value="{{ old('email') }}"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:outline-none focus:border-orange-500 transition">
                            </div>
                        </div>

                        <!-- Ödeme Tutarı ve Para Birimi -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-1">
                            <div class="sm:col-span-2">
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'مبلغ الدفع *' : 'Ödenecek Tutar *' }}
                                </label>
                                <input type="number" step="0.01" min="1" name="amount" id="posAmountInput" required placeholder="0.00" dir="ltr"
                                       value="{{ old('amount') }}"
                                       class="w-full min-h-[46px] px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-base font-bold focus:bg-white focus:outline-none focus:border-orange-500 transition">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'العملة' : 'Para Birimi' }}
                                </label>
                                <select name="currency" id="posCurrencyInput" class="w-full min-h-[46px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm font-bold focus:bg-white focus:outline-none focus:border-orange-500 transition">
                                    <option value="TRY">₺ TRY (TL)</option>
                                    <option value="USD">$ USD</option>
                                    <option value="EUR">€ EUR</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Kredi Kartı Bilgileri -->
                    <div class="space-y-4 pt-4">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                            <div class="flex items-center gap-2.5">
                                <span class="w-6 h-6 rounded-full bg-orange-600 text-white text-xs font-bold flex items-center justify-center">2</span>
                                <h2 class="text-sm sm:text-base font-bold text-slate-900">
                                    {{ $isRtl ? 'بيانات البطاقة الائتمانية' : 'Kredi / Banka Kartı Bilgileri' }}
                                </h2>
                            </div>
                            <div class="flex items-center gap-1.5 text-[11px] font-bold text-slate-500">
                                <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-700">VISA</span>
                                <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-700">Mastercard</span>
                                <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-700">TROY</span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                {{ $isRtl ? 'الاسم المدون على البطاقة *' : 'Kart Üzerindeki İsim *' }}
                            </label>
                            <input type="text" name="card_holder" id="cardHolderInput" required placeholder="AD SOYAD / FİRMA KARTI"
                                   class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm uppercase focus:bg-white focus:outline-none focus:border-orange-500 transition">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                {{ $isRtl ? 'رقم البطاقة (16 رقماً) *' : 'Kart Numarası *' }}
                            </label>
                            <input type="text" name="card_number" id="cardNumberInput" required maxlength="19" placeholder="0000 0000 0000 0000" dir="ltr"
                                   class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm font-mono tracking-wider focus:bg-white focus:outline-none focus:border-orange-500 transition">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'تاريخ الانتهاء (شهر/سنة) *' : 'Son Kullanma Tarihi (AA/YY) *' }}
                                </label>
                                <input type="text" name="expiry" id="cardExpiryInput" required maxlength="5" placeholder="AA/YY" dir="ltr"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm font-mono focus:bg-white focus:outline-none focus:border-orange-500 transition">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    {{ $isRtl ? 'رمز الأمان (CVV/CVC) *' : 'Güvenlik Kodu (CVV) *' }}
                                </label>
                                <input type="password" name="cvv" required maxlength="4" placeholder="•••" dir="ltr"
                                       class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm font-mono focus:bg-white focus:outline-none focus:border-orange-500 transition">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                {{ $isRtl ? 'ملاحظات الدفع (اختياري)' : 'Ödeme Notu / Açıklama (Opsiyonel)' }}
                            </label>
                            <input type="text" name="note" placeholder="{{ $isRtl ? 'مثال: دفعة مقدمة لطلب ملصقات كوشيه' : 'Örn: Cari hesap kapama / Rulo etiket siparişi avansı' }}"
                                   class="w-full min-h-[44px] px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-xs focus:bg-white focus:outline-none focus:border-orange-500 transition">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" class="w-full min-h-[52px] inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-sm shadow-lg shadow-orange-600/20 transition-all cursor-pointer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            <span>{{ $isRtl ? 'تأكيد الدفع عبر 3D Secure' : '3D Secure ile Güvenli Ödeme Yap' }}</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Interactive Card Preview & Bank / Security Info (5 cols) -->
            <div class="lg:col-span-5 space-y-6">

                <!-- Interactive Corporate Card Visual -->
                <div class="bg-slate-900 text-white rounded-3xl p-6 sm:p-7 shadow-xl relative overflow-hidden border border-slate-800">
                    <div class="absolute -right-10 -top-10 w-44 h-44 rounded-full bg-orange-500/20 blur-2xl pointer-events-none"></div>
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <span class="text-[10px] uppercase tracking-widest text-orange-400 font-bold block">GÖKSAN ETİKET B2B POS</span>
                            <span class="text-xs text-slate-400">3D Secure Commercial Gateway</span>
                        </div>
                        <div class="w-10 h-7 rounded-md bg-amber-400/90 flex items-center justify-center text-slate-900 font-mono text-[10px] font-bold">
                            CHIP
                        </div>
                    </div>

                    <div id="previewCardNumber" class="text-lg sm:text-xl font-mono tracking-widest text-white mb-6" dir="ltr">
                        •••• •••• •••• ••••
                    </div>

                    <div class="flex items-end justify-between text-xs border-t border-slate-800 pt-4">
                        <div>
                            <span class="text-[10px] text-slate-400 uppercase block">{{ $isRtl ? 'حامل البطاقة' : 'Kart Sahibi' }}</span>
                            <span id="previewCardHolder" class="font-bold text-slate-100 uppercase tracking-wide">FİRMA / YETKİLİ ADI</span>
                        </div>
                        <div class="text-right" dir="ltr">
                            <span class="text-[10px] text-slate-400 uppercase block">SKT</span>
                            <span id="previewCardExpiry" class="font-mono font-bold text-orange-400">AA/YY</span>
                        </div>
                    </div>
                </div>

                <!-- Security & Gateway Integration Card -->
                <div class="bg-white rounded-3xl border border-slate-200 p-6 space-y-4 shadow-xs">
                    <h3 class="text-sm font-bold text-slate-900 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        <span>{{ $isRtl ? 'ضمان الأمان والبنوك المتعاقدة' : 'Güvenlik & Altyapı Bilgisi' }}</span>
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        {{ $isRtl
                            ? 'لا يتم تخزين بيانات بطاقتكم الائتمانية أبداً على خوادمنا. تتم جميع المعاملات مباشرة عبر بوابة الدفع المشفرة (PayTR / İyzico / Banka POS).'
                            : 'Kart bilgileriniz Göksan Etiket sunucularında kesinlikle kayıt altına alınmaz. Tüm işlemler doğrudan BDDK lisanslı ödeme kuruluşları (PayTR / İyzico) ve banka 3D Secure ekranı üzerinden yürütülür.' }}
                    </p>

                    <div class="grid grid-cols-2 gap-3 pt-1 text-xs">
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/80">
                            <strong class="block text-slate-900 font-bold">256-Bit SSL</strong>
                            <span class="text-[11px] text-slate-500">Uçtan uca şifreli bağlantı</span>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/80">
                            <strong class="block text-slate-900 font-bold">3D Secure</strong>
                            <span class="text-[11px] text-slate-500">SMS onaylı güvenli çekim</span>
                        </div>
                    </div>

                    <div class="border-t border-slate-100 pt-4 text-xs text-slate-600 space-y-1.5">
                        <div class="font-bold text-slate-900">{{ $isRtl ? 'دعم قسم المحاسبة والمالية:' : 'Muhasebe & Finans Destek Hattı:' }}</div>
                        <div>📞 <a href="tel:+903425034652" class="font-semibold text-orange-600 hover:underline" dir="ltr">+90 342 503 46 52</a></div>
                        <div>✉ <a href="mailto:info@goksanetiket.com" class="hover:text-orange-600">info@goksanetiket.com</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        const numInput = document.getElementById('cardNumberInput');
        const holderInput = document.getElementById('cardHolderInput');
        const expInput = document.getElementById('cardExpiryInput');
        const prevNum = document.getElementById('previewCardNumber');
        const prevHolder = document.getElementById('previewCardHolder');
        const prevExp = document.getElementById('previewCardExpiry');

        numInput?.addEventListener('input', function(e) {
            let v = e.target.value.replace(/\D/g, '').substring(0, 16);
            let formatted = v.replace(/(.{4})/g, '$1 ').trim();
            e.target.value = formatted;
            if (prevNum) prevNum.textContent = formatted || '•••• •••• •••• ••••';
        });

        holderInput?.addEventListener('input', function(e) {
            if (prevHolder) prevHolder.textContent = e.target.value.toUpperCase() || 'FİRMA / YETKİLİ ADI';
        });

        expInput?.addEventListener('input', function(e) {
            let v = e.target.value.replace(/\D/g, '').substring(0, 4);
            if (v.length >= 3) {
                v = v.substring(0, 2) + '/' + v.substring(2, 4);
            }
            e.target.value = v;
            if (prevExp) prevExp.textContent = v || 'AA/YY';
        });
    })();
</script>
@endsection

