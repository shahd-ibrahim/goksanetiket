@extends('layouts.app')

@section('content')
<div class="bg-slate-50/60 py-12 sm:py-16 lg:py-20 border-b border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Legal Navigation Pills -->
        <div class="flex flex-wrap items-center gap-2 mb-8">
            <a href="{{ route('legal.kvkk') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">KVKK Aydınlatma Metni</a>
            <a href="{{ route('legal.cookies') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Çerez Politikası</a>
            <a href="{{ route('legal.privacy') }}" class="px-4 py-2 rounded-xl text-xs font-bold bg-orange-600 text-white shadow-2xs">Gizlilik & Güvenlik</a>
            <a href="{{ route('legal.sales') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Mesafeli Satış Sözleşmesi</a>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-10 lg:p-12 shadow-2xs space-y-6 text-slate-700 text-sm leading-relaxed">
            <div class="border-b border-slate-100 pb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-orange-600">Kurumsal Bilgi Güvenliği</span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">Gizlilik ve Güvenlik Politikası</h1>
                <p class="text-xs text-slate-400 mt-2">Son Güncelleme: {{ date('d.m.Y') }}</p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">1. Kurumsal Gizlilik Taahhüdü</h2>
                <p>
                    <strong>GÖKSAN Etiket Matbaa Ambalaj San. ve Tic. Ltd. Şti.</strong> olarak, müşterilerimizin bizimle paylaştığı bıçak izleri, grafik tasarımlar, barkod serileri, ticari sırlar ve iletişim bilgilerinin gizliliğini korumayı en temel kurumsal sorumluluğumuz kabul ederiz. Müşterilerimize ait özel etiket tasarımları ve kalıp bilgileri üçüncü şahıslarla kesinlikle paylaşılmaz.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">2. Kredi Kartı ve Sanal POS Güvenliği (256-Bit SSL & 3D Secure)</h2>
                <p>
                    Web sitemiz üzerinden gerçekleştirilen online tahsilat (Sanal POS) işlemlerinde <strong>256-Bit SSL (Secure Sockets Layer)</strong> şifreleme protokolü ve <strong>3D Secure</strong> (SMS doğrulamalı güvenli ödeme) altyapısı kullanılmaktadır.
                </p>
                <p>
                    Kredi kartı numaranız, son kullanma tarihiniz ve CVV güvenlik kodunuz Göksan Etiket sunucularında <strong>kesinlikle kaydedilmez, saklanmaz ve görüntülenemez</strong>. Tüm kart verileri doğrudan ilgili banka veya BDDK lisanslı ödeme kuruluşu (PayTR / İyzico) güvenli ortamına şifreli olarak iletilir.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">3. İletişim ve Veri Güvenliği</h2>
                <p>
                    Teklif formları üzerinden ilettiğiniz bilgiler yalnızca satış mühendislerimiz tarafından size özel fiyat teklifi oluşturmak ve sipariş sürecinizi yönetmek amacıyla kullanılır. İstenmeyen reklam veya spam gönderimi yapılmaz.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection

