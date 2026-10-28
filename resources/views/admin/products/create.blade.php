@extends('admin.layouts.admin')

@section('title', 'Yeni Etiket Ürünü Ekle')
@section('header', 'Yeni Etiket Ürünü Ekle')

@section('content')
<div class="max-w-4xl space-y-6">
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.products.index') }}" class="text-xs font-semibold text-slate-400 hover:text-white flex items-center gap-1.5 transition-colors">
            &larr; Ürün Listesine Dön
        </a>
    </div>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Card 1: Title, Slug, Short Description -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl space-y-4">
            <h3 class="text-sm font-bold text-white mb-2 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                Genel Ürün Bilgileri
            </h3>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Ürün Başlığı *</label>
                <input type="text" name="title" id="productTitle" value="{{ old('title') }}" required autofocus
                       placeholder="Örn: Kuşe Etiket (Rulo Baskı)"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
            </div>

            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label class="text-xs font-semibold text-slate-300">URL Slug (Otomatik Üretilebilir)</label>
                    <button type="button" id="generateSlugBtn" class="text-[11px] text-sky-400 hover:underline">Başlıktan Üret</button>
                </div>
                <div class="flex items-center">
                    <span class="px-3 py-2.5 bg-slate-950 border border-r-0 border-slate-700 rounded-l-xl text-slate-500 text-xs font-mono">/</span>
                    <input type="text" name="slug" id="productSlug" value="{{ old('slug') }}"
                           placeholder="kuse-etiket"
                           class="w-full px-4 py-2.5 rounded-r-xl bg-slate-950 border border-slate-700 text-white text-sm font-mono focus:outline-none focus:border-sky-500">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Kısa Açıklama (Spot Metin)</label>
                <textarea name="short_description" rows="2"
                          placeholder="Yüksek baskı kalitesi ve ekonomik maliyet ile gıda, lojistik ve perakende sektörleri için ideal rulo kuşe etiket çözümleri."
                          class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500 leading-relaxed">{{ old('short_description') }}</textarea>
            </div>
        </div>

        <!-- Card 2: Detailed Content -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl space-y-4">
            <h3 class="text-sm font-bold text-white mb-2 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
                Detaylı Tanıtım ve Teknik İçerik
            </h3>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Ürün Makalesi & Detayları</label>
                <textarea name="content" rows="6"
                          placeholder="Flekso baskı teknolojileri, yapışkan türleri (akrilik, hotmelt, non-perm), ribbon uyumu ve kullanım alanları hakkında detaylı bilgi..."
                          class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500 leading-relaxed">{{ old('content') }}</textarea>
            </div>
        </div>

        <!-- Card 3: Images & Media -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl space-y-4">
            <h3 class="text-sm font-bold text-white mb-2 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                Ürün Görseli
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1.5">Görsel Dosyası Yükle</label>
                    <input type="file" name="image_file" accept="image/*"
                           class="w-full px-3.5 py-2 rounded-xl bg-slate-950 border border-slate-700 text-slate-400 text-xs file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-sky-500/20 file:text-sky-300">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1.5">veya Harici Görsel URL'si</label>
                    <input type="url" name="image_url" value="{{ old('image_url') }}"
                           placeholder="https://images.unsplash.com/photo-..."
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
                </div>
            </div>
        </div>

        <!-- Card 4: Technical Specifications & Status -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl space-y-4">
            <h3 class="text-sm font-bold text-white mb-2 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                Teknik Özellikler & Yayın Durumu
            </h3>

            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label class="text-xs font-semibold text-slate-300">Teknik Özellikler (Key: Value veya JSON)</label>
                    <span class="text-[11px] text-slate-500">Her satıra bir özellik (Örn: Kağıt: 80 gr Kuşe)</span>
                </div>
                <textarea name="specs_json" rows="5"
                          placeholder="Kağıt Türü: 80 gr/m² Yarı Parlak Kuşe
Yapışkan: Akrilik veya Hotmelt
Baskı Türü: 8 Renk UV Flekso
Ribbon: Wax ve Wax-Resin"
                          class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm font-mono focus:outline-none focus:border-sky-500 leading-relaxed">{{ old('specs_json') }}</textarea>
            </div>

            <div class="pt-2">
                <label class="inline-flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" checked class="w-4 h-4 rounded bg-slate-950 border-slate-700 text-sky-500 focus:ring-0">
                    <span class="text-sm font-semibold text-white">Bu ürün yayında olsun ve programatik 81 il sayfalarında gösterilsin</span>
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-end gap-3 pt-2">
            <a href="{{ route('admin.products.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-semibold transition-colors">
                İptal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-xs shadow-lg shadow-sky-500/20 transition-all">
                Ürünü Kaydet
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const titleInput = document.getElementById('productTitle');
        const slugInput = document.getElementById('productSlug');
        const generateBtn = document.getElementById('generateSlugBtn');

        function generateSlug(text) {
            const trMap = {'ç':'c','ğ':'g','ı':'i','ö':'o','ş':'s','ü':'u','Ç':'c','Ğ':'g','İ':'i','Ö':'o','Ş':'s','Ü':'u'};
            return text.split('').map(c => trMap[c] || c).join('')
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/[\s-]+/g, '-');
        }

        if (titleInput && slugInput && generateBtn) {
            generateBtn.addEventListener('click', function () {
                slugInput.value = generateSlug(titleInput.value);
            });

            titleInput.addEventListener('input', function () {
                if (!slugInput.value) {
                    slugInput.value = generateSlug(titleInput.value);
                }
            });
        }
    });
</script>
@endpush
@endsection
