@extends('admin.layouts.admin')

@section('title', 'Genel Bakış')
@section('header', 'Yönetim Paneli & SEO Kontrol Merkezi')

@section('content')
<div class="space-y-8 max-w-7xl">
    <!-- Stats Row -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <!-- Stat 1: Total Cities -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Kapsanan Şehirler</span>
                <span class="p-2.5 rounded-xl bg-sky-500/10 text-sky-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                </span>
            </div>
            <div class="text-3xl font-extrabold text-white font-mono">{{ $stats['total_cities'] }} İl</div>
            <div class="text-xs text-slate-400 mt-2 flex items-center gap-1.5">
                <span class="text-emerald-400 font-semibold">%100</span> Türkiye geneli kapsama
            </div>
        </div>

        <!-- Stat 2: Custom SEO Overrides -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Özel SEO Tanımları</span>
                <span class="p-2.5 rounded-xl bg-amber-500/10 text-amber-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                </span>
            </div>
            <div class="text-3xl font-extrabold text-amber-400 font-mono">{{ $stats['custom_seo_cities'] }} İl</div>
            <div class="text-xs text-slate-400 mt-2">
                Manuel meta başlık / açıklama override edilmiş
            </div>
        </div>

        <!-- Stat 3: Products -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Etiket Ürünleri</span>
                <span class="p-2.5 rounded-xl bg-indigo-500/10 text-indigo-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </span>
            </div>
            <div class="text-3xl font-extrabold text-white font-mono">{{ $stats['total_products'] }} Çeşit</div>
            <div class="text-xs text-emerald-400 mt-2 flex items-center gap-1.5">
                <span>{{ $stats['active_products'] }} aktif ürün</span> yayında
            </div>
        </div>

        <!-- Stat 4: Dynamic Programmatic Combinations -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Üretilen SEO Sayfası</span>
                <span class="p-2.5 rounded-xl bg-emerald-500/10 text-emerald-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </span>
            </div>
            <div class="text-3xl font-extrabold text-emerald-400 font-mono">
                {{ ($stats['total_cities'] * $stats['active_products']) + $stats['total_cities'] }} +
            </div>
            <div class="text-xs text-slate-400 mt-2">
                Google indeksine hazır programatik URL
            </div>
        </div>
    </div>

    <!-- Quick Actions Banner -->
    <div class="bg-gradient-to-r from-slate-900 to-slate-850 border border-slate-800 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-4">
        <div>
            <h3 class="text-lg font-bold text-white mb-1">Hızlı İşlemler</h3>
            <p class="text-xs text-slate-400">Şehir bazlı sanayi ve SEO metinlerini düzenleyin veya yeni etiket ürünleri ekleyin.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.cities.index') }}" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold border border-slate-700 transition-colors">
                Şehirleri Yönet &rarr;
            </a>
            <a href="{{ route('admin.products.create') }}" class="px-4 py-2 rounded-xl bg-sky-500 hover:bg-sky-400 text-white text-xs font-semibold shadow-lg shadow-sky-500/20 transition-all">
                + Yeni Ürün Ekle
            </a>
        </div>
    </div>

    <!-- Two Column Tables -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Column 1: Recently Overridden Cities -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">
            <div class="flex items-center justify-between mb-4 border-b border-slate-800 pb-3">
                <h3 class="text-sm font-bold text-white">Özel SEO Tanımlı Şehirler</h3>
                <a href="{{ route('admin.cities.index', ['seo_override' => 'yes']) }}" class="text-xs text-sky-400 hover:underline">Tümünü Gör</a>
            </div>

            @if($recentCities->count() > 0)
                <div class="divide-y divide-slate-800/80">
                    @foreach($recentCities as $rc)
                        <div class="py-3 flex items-center justify-between">
                            <div>
                                <div class="text-sm font-semibold text-white flex items-center gap-2">
                                    <span class="font-mono text-xs bg-slate-800 text-sky-400 px-1.5 py-0.5 rounded">{{ $rc->formatted_plate }}</span>
                                    <span>{{ $rc->name }}</span>
                                </div>
                                <div class="text-[11px] text-slate-400 truncate max-w-xs mt-0.5">
                                    {{ $rc->seo_title ?? 'Özel Başlık Yok' }}
                                </div>
                            </div>
                            <a href="{{ route('admin.cities.edit', $rc) }}" class="text-xs font-semibold text-sky-400 hover:text-sky-300 bg-sky-500/10 px-3 py-1 rounded-lg border border-sky-500/20">
                                Düzenle
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="py-8 text-center text-xs text-slate-500">
                    Henüz özel SEO tanımı yapılmış bir şehir yok. Tüm şehirler otomatik kurallar ile generate edilmektedir.
                </div>
            @endif
        </div>

        <!-- Column 2: Recent Products -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">
            <div class="flex items-center justify-between mb-4 border-b border-slate-800 pb-3">
                <h3 class="text-sm font-bold text-white">Etiket Ürünleri</h3>
                <a href="{{ route('admin.products.index') }}" class="text-xs text-sky-400 hover:underline">Tümünü Gör</a>
            </div>

            <div class="divide-y divide-slate-800/80">
                @foreach($recentProducts as $rp)
                    <div class="py-3 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-slate-950 overflow-hidden shrink-0 border border-slate-800">
                                @if(!empty($rp->images) && count($rp->images) > 0)
                                    <img src="{{ $rp->images[0] }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-[10px] text-slate-600">Yok</div>
                                @endif
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-white">{{ $rp->title }}</div>
                                <div class="text-[11px] text-slate-400 font-mono">/{{ $rp->slug }}</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            @if($rp->is_active)
                                <span class="text-[10px] bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded-full font-bold">Aktif</span>
                            @else
                                <span class="text-[10px] bg-slate-800 text-slate-500 px-2 py-0.5 rounded-full">Pasif</span>
                            @endif
                            <a href="{{ route('admin.products.edit', $rp) }}" class="text-xs font-semibold text-slate-300 hover:text-white bg-slate-800 hover:bg-slate-700 px-3 py-1 rounded-lg transition-colors">
                                Düzenle
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
