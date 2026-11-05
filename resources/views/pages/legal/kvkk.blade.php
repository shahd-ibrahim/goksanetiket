@extends('layouts.app')

@section('content')
<div class="bg-slate-50/60 py-12 sm:py-16 lg:py-20 border-b border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Legal Navigation Pills -->
        <div class="flex flex-wrap items-center gap-2 mb-8">
            <a href="{{ route('legal.kvkk') }}" class="px-4 py-2 rounded-xl text-xs font-bold bg-orange-600 text-white shadow-2xs">KVKK Aydınlatma Metni</a>
            <a href="{{ route('legal.cookies') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Çerez Politikası</a>
            <a href="{{ route('legal.privacy') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Gizlilik & Güvenlik</a>
            <a href="{{ route('legal.sales') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Mesafeli Satış Sözleşmesi</a>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-10 lg:p-12 shadow-2xs space-y-6 text-slate-700 text-sm leading-relaxed">
            <div class="border-b border-slate-100 pb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-orange-600">6698 Sayılı Kanun Kapsamında</span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">KVKK Kişisel Verilerin Korunması ve Aydınlatma Metni</h1>
                <p class="text-xs text-slate-400 mt-2">Son Güncelleme: {{ date('d.m.Y') }}</p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">1. Veri Sorumlusunun Kimliği</h2>
                <p>
                    6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”) uyarınca, kişisel verileriniz; veri sorumlusu olarak <strong>GÖKSAN Etiket Matbaa Ambalaj San. ve Tic. Ltd. Şti.</strong> (“Şirket”) tarafından aşağıda açıklanan kapsamda hukuka ve dürüstlük kurallarına uygun bir şekilde işlenebilecektir.
                </p>
                <ul class="list-disc pl-5 space-y-1 text-xs text-slate-600">
                    <li><strong>Ünvan:</strong> GÖKSAN Etiket Matbaa Ambalaj San. ve Tic. Ltd. Şti.</li>
                    <li><strong>Adres:</strong> 1. Organize Sanayi Bölgesi 83105 Nolu Cadde No:31 Şehitkamil / GAZİANTEP</li>
                    <li><strong>Telefon:</strong> +90 342 503 46 52</li>
                    <li><strong>E-Posta:</strong> info@goksanetiket.com</li>
                </ul>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">2. Kişisel Verilerin İşlenme Amaçları</h2>
                <p>
                    Toplanan kişisel verileriniz (Ad-Soyad, Firma Ünvanı, Telefon Numarası, E-Posta Adresi, Vergi/Fatura Bilgileri, Sipariş ve Teklif Detayları);
                </p>
                <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                    <li>Endüstriyel etiket, matbaa ve ambalaj ürünlerine ilişkin fiyat teklifi (RFQ) süreçlerinin hazırlanması,</li>
                    <li>Sipariş, üretim, sevkiyat ve lojistik operasyonlarının yürütülmesi,</li>
                    <li>Online ödeme (Sanal POS) ve muhasebe/fatura işlemlerinin güvenli şekilde gerçekleştirilmesi,</li>
                    <li>Resmi kurum ve kuruluşların talep ettiği yasal yükümlülüklerin yerine getirilmesi</li>
                </ul>
                <p>amaçlarıyla KVKK’nın 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları dahilinde işlenmektedir.</p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">3. Kişisel Verilerin Aktarılması</h2>
                <p>
                    Kişisel verileriniz; siparişlerin teslimatı amacıyla anlaşmalı kargo/ambar lojistik firmalarına, online tahsilat işlemleri için BDDK lisanslı ödeme kuruluşları ve bankalara (3D Secure altyapısı), mali yükümlülükler çerçevesinde yetkili kamu kurumlarına KVKK’nın 8. ve 9. maddelerine uygun olarak aktarılabilmektedir.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">4. İlgili Kişinin KVKK Madde 11 Kapsamındaki Hakları</h2>
                <p>
                    Kişisel veri sahipleri olarak KVKK’nın 11. maddesi uyarınca; kişisel verilerinizin işlenip işlenmediğini öğrenme, işlenmişse bilgi talep etme, amacına uygun kullanılıp kullanılmadığını öğrenme, eksik veya yanlış işlenmişse düzeltilmesini isteme ve kanuni şartlar çerçevesinde silinmesini veya yok edilmesini talep etme haklarına sahipsiniz. Taleplerinizi yazılı olarak fabrika adresimize veya <strong>info@goksanetiket.com</strong> e-posta adresimize iletebilirsiniz.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection

