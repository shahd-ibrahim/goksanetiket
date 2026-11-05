@extends('layouts.app')

@section('content')
<div class="bg-slate-50/60 py-12 sm:py-16 lg:py-20 border-b border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Legal Navigation Pills -->
        <div class="flex flex-wrap items-center gap-2 mb-8">
            <a href="{{ route('legal.kvkk') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">KVKK Aydınlatma Metni</a>
            <a href="{{ route('legal.cookies') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Çerez Politikası</a>
            <a href="{{ route('legal.privacy') }}" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-orange-500 hover:text-orange-600 transition">Gizlilik & Güvenlik</a>
            <a href="{{ route('legal.sales') }}" class="px-4 py-2 rounded-xl text-xs font-bold bg-orange-600 text-white shadow-2xs">Mesafeli Satış Sözleşmesi</a>
        </div>

        <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-10 lg:p-12 shadow-2xs space-y-6 text-slate-700 text-sm leading-relaxed">
            <div class="border-b border-slate-100 pb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-orange-600">Sanal POS & B2B Ticari Tahsilat Şartları</span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">Mesafeli Satış, Teslimat ve İade Sözleşmesi</h1>
                <p class="text-xs text-slate-400 mt-2">Son Güncelleme: {{ date('d.m.Y') }}</p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">1. Taraflar</h2>
                <p>
                    İşbu sözleşme, bir tarafta <strong>GÖKSAN Etiket Matbaa Ambalaj San. ve Tic. Ltd. Şti.</strong> (1. OSB 83105 Nolu Cad. No:31 Şehitkamil / Gaziantep) ile diğer tarafta web sitesi üzerinden sipariş veren veya Sanal POS aracılığıyla cari/sipariş ödemesi gerçekleştiren müşteri (“Alıcı”) arasında akdedilmiştir.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">2. Konu ve Kapsam</h2>
                <p>
                    İşbu sözleşmenin konusu, Alıcı’nın Satıcı’ya sipariş ettiği endüstriyel rulo etiket, barkod etiketi, tekstil etiketi veya matbaa/ambalaj ürünlerinin üretimi, sevkiyatı ve Sanal POS üzerinden yapılan tahsilat işlemlerine ilişkin hak ve yükümlülüklerin belirlenmesidir.
                </p>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">3. Üretim, Teslimat ve Sevkiyat Koşulları</h2>
                <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                    <li>Baskılı ürünlerde grafik/klişe onayı alındıktan sonra üretim süreci başlatılır.</li>
                    <li>Standart baskısız rulo etiketler 24-48 saat içerisinde, özel baskılı üretimler ise sipariş teyidinde belirtilen iş günü içerisinde anlaşmalı ambar veya kargo firmasına teslim edilir.</li>
                </ul>
            </div>

            <div class="space-y-4">
                <h2 class="text-base font-bold text-slate-900">4. Özel Üretimlerde İptal ve İade Şartları</h2>
                <p>
                    Müşterinin özel ölçüsü, logosu veya barkod bilgisiyle <strong>özel olarak üretilen (baskılı veya özel kesimli) ürünlerde</strong>, üretim başladıktan sonra cayma hakkı kullanılamaz. Ancak üretim veya baskı hatası bulunan ürünlerde, teslimattan itibaren 7 iş günü içinde bildirim yapılması halinde ürün yenisi ile ücretsiz değiştirilir veya tahsil edilen tutar ödeme yapılan karta iade edilir.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection

