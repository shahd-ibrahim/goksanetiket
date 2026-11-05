@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16 space-y-8 sm:space-y-12 overflow-x-hidden">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500 dark:text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-orange-600 dark:hover:text-orange-400">{{ __('Ana Sayfa') }}</a>
        <span>/</span>
        <span class="text-slate-900 dark:text-slate-100 font-bold">{{ __('Rulo Etiket & Barkod Çözümleri') }}</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-3 sm:space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 dark:bg-orange-950/60 text-orange-700 dark:text-orange-400 border border-orange-200 dark:border-orange-800/60">
            MODÜL 01 • RULO & BOBİN BASKI
        </span>
        <h1 class="text-2xl sm:text-3xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
            {{ __('Rulo Etiket & Barkod Çözümleri') }}
        </h1>
        <p class="text-sm sm:text-base text-slate-600 dark:text-slate-300 leading-relaxed">
            {{ __('Termal, Kuşe, PP Opak, Silver Mat ve Güvenlik Void etiketleri. Tüm masaüstü ve endüstriyel barkod yazıcılarla (Zebra, TSC, Honeywell, Godex vb.) %100 uyumlu rulo sarımı ve kuka çapları.') }}
        </p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        @foreach($products as $product)
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:border-orange-500 dark:hover:border-orange-500 rounded-3xl overflow-hidden shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="h-40 sm:h-44 bg-slate-50 dark:bg-slate-800/50 overflow-hidden relative flex items-center justify-center border-b border-slate-100 dark:border-slate-800">
                        @if(!empty($product->images) && count($product->images) > 0)
                            <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        @else
                            <div class="text-center p-4">
                                <span class="text-3xl">🏷️</span>
                                <span class="block text-xs font-bold text-slate-400 dark:text-slate-500 mt-1">Göksan Etiket Fabrikası</span>
                            </div>
                        @endif
                        <span class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md px-2.5 py-1 rounded-md text-[10px] font-bold text-orange-600 dark:text-orange-400 border border-slate-200 dark:border-slate-700 shadow-xs">
                            UV Flekso Rulo
                        </span>
                    </div>

                    <div class="p-4 sm:p-6 space-y-3">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">{{ $product->title }}</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $product->short_description }}</p>

                        @if(!empty($product->specs) && is_array($product->specs))
                            <div class="pt-3 border-t border-slate-100 dark:border-slate-800 space-y-1 text-[11px] text-slate-600 dark:text-slate-400">
                                @foreach(array_slice($product->specs, 0, 3) as $k => $v)
                                    <div class="flex justify-between">
                                        <span class="text-slate-400 dark:text-slate-500">{{ $k }}:</span>
                                        <span class="font-medium text-slate-800 dark:text-slate-200 truncate max-w-[160px]">{{ $v }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <div class="p-4 sm:p-6 pt-0">
                    <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => 'gaziantep']) }}" 
                       class="w-full inline-flex items-center justify-center gap-2 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 hover:bg-orange-600 hover:text-white dark:hover:bg-orange-600 dark:hover:text-white text-slate-800 dark:text-slate-200 font-bold text-xs border border-slate-200 dark:border-slate-700 hover:border-orange-600 transition-colors">
                        {{ __('Fiyat & Detayları İncele') }} &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- 81-City Link Component -->
    <div class="pt-10 border-t border-slate-200 dark:border-slate-800">
        <x-regional-city-grid />
    </div>
</div>
@endsection
