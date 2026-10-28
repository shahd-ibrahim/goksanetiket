@extends('admin.layouts.admin')

@section('title', $city->name . ' Şehrini Düzenle')
@section('header', $city->name . ' - Sanayi & SEO Ayarları')

@section('content')
<div class="max-w-4xl space-y-6">
    <!-- Top Bar Navigation -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.cities.index') }}" class="text-xs font-semibold text-slate-400 hover:text-white flex items-center gap-1.5 transition-colors">
            &larr; Şehir Listesine Dön
        </a>

        <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" target="_blank" class="text-xs font-semibold text-sky-400 hover:text-sky-300 flex items-center gap-1">
            <span>Canlı Sayfayı Gör</span>
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
        </a>
    </div>

    <!-- Edit Form Card -->
    <form action="{{ route('admin.cities.update', $city) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Card 1: Basic City Identity (Readonly references) -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <h3 class="text-sm font-bold text-white mb-4 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span>
                Temel Şehir Bilgileri
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-400 mb-1">Şehir Adı</label>
                    <input type="text" value="{{ $city->name }}" disabled 
                           class="w-full px-3.5 py-2 rounded-xl bg-slate-950 border border-slate-800 text-slate-300 text-sm font-bold">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-400 mb-1">Plaka Kodu & Bölge</label>
                    <input type="text" value="{{ $city->formatted_plate }} - {{ $city->region }}" disabled 
                           class="w-full px-3.5 py-2 rounded-xl bg-slate-950 border border-slate-800 text-slate-300 text-sm">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-400 mb-1">URL Kalıcı Bağlantı</label>
                    <input type="text" value="/{{ $city->slug }}-etiket-fabrikasi" disabled 
                           class="w-full px-3.5 py-2 rounded-xl bg-slate-950 border border-slate-800 text-slate-400 text-xs font-mono">
                </div>
            </div>
        </div>

        <!-- Card 2: Industrial & Logistics Settings -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl space-y-4">
            <h3 class="text-sm font-bold text-white mb-2 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                Sanayi Bölgeleri & Lojistik Süreleri
            </h3>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1.5">
                    Teslimat Süresi (Örn: "24 Saat", "24-48 Saat") *
                </label>
                <input type="text" name="delivery_time" value="{{ old('delivery_time', $city->delivery_time) }}" required
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
                <span class="text-[11px] text-slate-500 mt-1 block">Şehir iniş sayfasında rozet ve teslimat avantaj kartında gösterilir.</span>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1.5">
                    Organize Sanayi Bölgeleri ve Sanayi Siteleri (Virgülle ayrılmış) *
                </label>
                <textarea name="industrial_zones" rows="3" required
                          class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500 leading-relaxed">{{ old('industrial_zones', $city->industrial_zones) }}</textarea>
                <span class="text-[11px] text-slate-500 mt-1 block">Sayfa içi SEO anahtar kelime eşleştirmeleri ve OSB başlığında yer alır.</span>
            </div>
        </div>

        <!-- Card 3: SEO Texts & Meta Overrides -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl space-y-5">
            <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                <h3 class="text-sm font-bold text-white flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    SEO Meta Metinlerini Özelleştirme (Override)
                </h3>
                <span class="text-[11px] text-slate-400">Boş bırakılırsa programatik şablon otomatik kullanılır.</span>
            </div>

            <!-- SEO Title -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label class="text-xs font-semibold text-slate-300">Özel Meta Başlık (SEO Title)</label>
                    <span id="titleCounter" class="text-[11px] font-mono text-slate-500">0 / 65 karakter</span>
                </div>
                <input type="text" name="seo_title" id="seoTitleInput" value="{{ old('seo_title', $city->seo_title) }}" 
                       placeholder="{{ $city->name }} Etiket Fabrikası - Toptan Rulo & Baskılı Etiket Üretimi | Göksan Etiket"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
                <span class="text-[11px] text-slate-500 mt-1 block">Tavsiye edilen uzunluk 50 - 60 karakter arasıdır.</span>
            </div>

            <!-- SEO Description -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label class="text-xs font-semibold text-slate-300">Özel Meta Açıklama (Meta Description)</label>
                    <span id="descCounter" class="text-[11px] font-mono text-slate-500">0 / 160 karakter</span>
                </div>
                <textarea name="seo_description" id="seoDescInput" rows="3"
                          placeholder="{{ $city->name }} ve {{ $city->industrial_zones }} için toptan rulo etiket üretimi. {{ $city->delivery_time }} hızlı teslimat garantisi ve fabrika fiyatlarıyla hemen teklif alın."
                          class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500 leading-relaxed">{{ old('seo_description', $city->seo_description) }}</textarea>
                <span class="text-[11px] text-slate-500 mt-1 block">Tavsiye edilen uzunluk 140 - 160 karakter arasıdır.</span>
            </div>

            <!-- Custom Content -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1.5">
                    {{ $city->name }} Özel Makale / İçerik (Opsiyonel)
                </label>
                <textarea name="custom_content" rows="4"
                          placeholder="Bu şehre özel tanıtım metni, yerel referanslar veya teknik şartname bilgileri..."
                          class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">{{ old('custom_content', $city->custom_content) }}</textarea>
            </div>
        </div>

        <!-- Submit Bar -->
        <div class="flex items-center justify-end gap-3 pt-2">
            <a href="{{ route('admin.cities.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-semibold transition-colors">
                İptal
            </a>
            <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-xs shadow-lg shadow-sky-500/20 transition-all">
                Değişiklikleri Kaydet
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const titleInput = document.getElementById('seoTitleInput');
        const titleCounter = document.getElementById('titleCounter');
        const descInput = document.getElementById('seoDescInput');
        const descCounter = document.getElementById('descCounter');

        function updateCounters() {
            if (titleInput && titleCounter) {
                titleCounter.textContent = titleInput.value.length + ' / 65 karakter';
            }
            if (descInput && descCounter) {
                descCounter.textContent = descInput.value.length + ' / 160 karakter';
            }
        }

        if (titleInput) titleInput.addEventListener('input', updateCounters);
        if (descInput) descInput.addEventListener('input', updateCounters);
        updateCounters();
    });
</script>
@endpush
@endsection
