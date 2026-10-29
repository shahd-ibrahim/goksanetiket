@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500 dark:text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-orange-600 dark:hover:text-orange-400">{{ __('Ana Sayfa') }}</a>
        <span>/</span>
        <span class="text-slate-900 dark:text-slate-100 font-bold">{{ __('Matbaa & Kutu Ambalaj') }}</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-100 dark:bg-amber-950/60 text-amber-700 dark:text-amber-400 border border-amber-200 dark:border-amber-800/60">
            MODÜL 03 • MATBAA & KUTU AMBALAJ
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-tight">
            {{ __('Matbaa, Kutu Ambalaj & Lüks Baskı') }}
        </h1>
        <p class="text-base text-slate-600 dark:text-slate-300 leading-relaxed">
            {{ __('Ofset baskılı dip kilitli karton kutular, lamine ambalaj, özel bıçak kesimli endüstriyel etiketler ve sıcak varak yaldız gofre kabartma uygulamaları.') }}
        </p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:border-orange-500 dark:hover:border-orange-500 rounded-3xl overflow-hidden shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="h-44 bg-slate-50 dark:bg-slate-800/50 overflow-hidden relative flex items-center justify-center border-b border-slate-100 dark:border-slate-800">
                        @if(!empty($product->images) && count($product->images) > 0)
                            <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        @else
                            <div class="text-center p-4">
                                <span class="text-3xl">📦</span>
                                <span class="block text-xs font-bold text-slate-400 dark:text-slate-500 mt-1">Göksan Kutu Ambalaj</span>
                            </div>
                        @endif
                        <span class="absolute top-3 left-3 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md px-2.5 py-1 rounded-md text-[10px] font-bold text-amber-600 dark:text-amber-400 border border-slate-200 dark:border-slate-700 shadow-xs">
                            Matbaa & Kutu
                        </span>
                    </div>

                    <div class="p-6 space-y-3">
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

                <div class="p-6 pt-0">
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
