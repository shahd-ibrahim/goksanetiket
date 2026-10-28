@extends('admin.layouts.admin')

@section('title', 'Ürünler & Etiketler')
@section('header', 'Etiket Çeşitleri Yönetimi')

@section('content')
<div class="space-y-6 max-w-7xl">
    <!-- Top Action Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
        <form method="GET" action="{{ route('admin.products.index') }}" class="flex-1 max-w-md">
            <div class="relative">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Ürün adı veya slug ile ara..."
                       class="w-full pl-10 pr-4 py-2 rounded-xl bg-slate-950 border border-slate-700 text-white text-sm focus:outline-none focus:border-sky-500">
                <svg class="w-4 h-4 text-slate-500 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>
        </form>

        <a href="{{ route('admin.products.create') }}" 
           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-xs shadow-lg shadow-sky-500/20 transition-all shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Yeni Etiket Ürünü Ekle
        </a>
    </div>

    <!-- Products Table -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl shadow-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950/80 text-[11px] uppercase tracking-wider text-slate-400 border-b border-slate-800">
                    <tr>
                        <th class="py-3.5 px-4 font-bold">Görsel</th>
                        <th class="py-3.5 px-4 font-bold">Ürün Adı</th>
                        <th class="py-3.5 px-4 font-bold">Slug (URL)</th>
                        <th class="py-3.5 px-4 font-bold">Özellikler</th>
                        <th class="py-3.5 px-4 font-bold">Durum</th>
                        <th class="py-3.5 px-4 font-bold text-right">İşlemler</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80">
                    @forelse($products as $product)
                        <tr class="hover:bg-slate-850/50 transition-colors">
                            <td class="py-3.5 px-4 w-16">
                                <div class="w-12 h-12 rounded-lg bg-slate-950 border border-slate-800 overflow-hidden shrink-0">
                                    @if(!empty($product->images) && count($product->images) > 0)
                                        <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-[10px] text-slate-600">Yok</div>
                                    @endif
                                </div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="font-bold text-white text-sm">{{ $product->title }}</div>
                                <div class="text-xs text-slate-400 line-clamp-1 max-w-sm mt-0.5">
                                    {{ $product->short_description }}
                                </div>
                            </td>
                            <td class="py-3.5 px-4 font-mono text-xs text-sky-400">
                                /{{ $product->slug }}
                            </td>
                            <td class="py-3.5 px-4 text-xs text-slate-400">
                                <span class="bg-slate-800 px-2 py-0.5 rounded text-[11px]">
                                    {{ is_array($product->specs) ? count($product->specs) : 0 }} parametre
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-xs">
                                @if($product->is_active)
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        Yayında
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-slate-800 text-slate-500 border border-slate-700">
                                        Pasif
                                    </span>
                                @endif
                            </td>
                            <td class="py-3.5 px-4 text-right space-x-2">
                                <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => 'istanbul']) }}" target="_blank"
                                   class="inline-flex p-1.5 text-slate-400 hover:text-sky-300 rounded-lg hover:bg-slate-800 text-xs transition-colors" title="Şehir Sayfasında İncele">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </a>
                                <a href="{{ route('admin.products.edit', $product) }}" 
                                   class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-sky-500 hover:bg-sky-400 text-white font-semibold text-xs transition-colors">
                                    Düzenle
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="return confirm('Bu ürünü silmek istediğinize emin misiniz?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 text-rose-400 hover:text-rose-300 hover:bg-rose-500/10 rounded-lg text-xs transition-colors" title="Sil">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-slate-500 text-xs">
                                Henüz etiket ürünü bulunmuyor.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($products->hasPages())
            <div class="p-4 border-t border-slate-800 bg-slate-950/40">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
