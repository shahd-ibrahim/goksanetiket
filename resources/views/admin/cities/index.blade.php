@extends('admin.layouts.admin')

@section('title', 'Şehirler & SEO Yönetimi')
@section('header', 'Şehirler, Sanayi Bölgeleri & SEO Metinleri')

@section('content')
<div class="space-y-6 max-w-7xl">
    <!-- Header with Filters -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
        <form method="GET" action="{{ route('admin.cities.index') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-4 items-end">
            <!-- Search -->
            <div class="lg:col-span-5">
                <label class="block text-xs font-semibold text-slate-400 mb-1.5">Şehir, Plaka veya OSB Ara</label>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Örn: Bursa, 16 veya Nilüfer..." 
                       class="w-full px-4 py-2 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
            </div>

            <!-- Region -->
            <div class="lg:col-span-3">
                <label class="block text-xs font-semibold text-slate-400 mb-1.5">Coğrafi Bölge</label>
                <select name="region" class="w-full px-3.5 py-2 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
                    <option value="">Tüm Bölgeler</option>
                    @foreach($regions as $reg)
                        <option value="{{ $reg }}" {{ request('region') === $reg ? 'selected' : '' }}>{{ $reg }}</option>
                    @endforeach
                </select>
            </div>

            <!-- SEO Override Filter -->
            <div class="lg:col-span-2">
                <label class="block text-xs font-semibold text-slate-400 mb-1.5">SEO Durumu</label>
                <select name="seo_override" class="w-full px-3.5 py-2 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
                    <option value="">Tümü</option>
                    <option value="yes" {{ request('seo_override') === 'yes' ? 'selected' : '' }}>Özel SEO Var</option>
                    <option value="no" {{ request('seo_override') === 'no' ? 'selected' : '' }}>Varsayılan Şablon</option>
                </select>
            </div>

            <!-- Submit & Reset -->
            <div class="lg:col-span-2 flex items-center gap-2">
                <button type="submit" class="flex-1 py-2 px-4 rounded-xl bg-sky-500 hover:bg-sky-400 text-white font-semibold text-xs transition-colors">
                    Filtrele
                </button>
                @if(request()->hasAny(['search', 'region', 'seo_override']))
                    <a href="{{ route('admin.cities.index') }}" class="p-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-400 hover:text-white text-xs transition-colors" title="Filtreleri Temizle">
                        ✕
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Cities Table -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl shadow-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950/80 text-[11px] uppercase tracking-wider text-slate-400 border-b border-slate-800">
                    <tr>
                        <th class="py-3.5 px-4 font-bold">Plaka</th>
                        <th class="py-3.5 px-4 font-bold">Şehir</th>
                        <th class="py-3.5 px-4 font-bold">Bölge</th>
                        <th class="py-3.5 px-4 font-bold">Teslimat Süresi</th>
                        <th class="py-3.5 px-4 font-bold">Hedef Sanayi & OSB</th>
                        <th class="py-3.5 px-4 font-bold">SEO Durumu</th>
                        <th class="py-3.5 px-4 font-bold text-right">İşlemler</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80">
                    @forelse($cities as $city)
                        <tr class="hover:bg-slate-850/50 transition-colors">
                            <td class="py-3.5 px-4 font-mono font-bold text-sky-400 text-xs">
                                {{ $city->formatted_plate }}
                            </td>
                            <td class="py-3.5 px-4 font-bold text-white">
                                {{ $city->name }}
                            </td>
                            <td class="py-3.5 px-4 text-xs text-slate-400">
                                {{ $city->region }}
                            </td>
                            <td class="py-3.5 px-4 text-xs text-amber-400 font-medium">
                                {{ $city->delivery_time }}
                            </td>
                            <td class="py-3.5 px-4 text-xs text-slate-400 max-w-xs truncate" title="{{ $city->industrial_zones }}">
                                {{ $city->industrial_zones }}
                            </td>
                            <td class="py-3.5 px-4 text-xs">
                                @if(!empty($city->seo_title) || !empty($city->seo_description))
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                        ⚡ Özel SEO
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-slate-800 text-slate-400 border border-slate-700">
                                        Şablon
                                    </span>
                                @endif
                            </td>
                            <td class="py-3.5 px-4 text-right space-x-2">
                                <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" target="_blank"
                                   class="inline-flex p-1.5 text-slate-400 hover:text-sky-300 rounded-lg hover:bg-slate-800 text-xs transition-colors" title="Sayfayı İncele">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </a>
                                <a href="{{ route('admin.cities.edit', $city) }}" 
                                   class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-sky-500 hover:bg-sky-400 text-white font-semibold text-xs shadow-sm transition-colors">
                                    Düzenle
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-12 text-center text-slate-500 text-xs">
                                Aradığınız kriterlere uygun şehir bulunamadı.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($cities->hasPages())
            <div class="p-4 border-t border-slate-800 bg-slate-950/40">
                {{ $cities->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
