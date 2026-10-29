@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">Tekstil & Dokuma Etiketleri</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            MODÜL 02 • TEKSTİL & HAZIR GİYİM
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            Tekstil, Dokuma & Yıkama Talimatı Etiketleri
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            90°C kaynatmaya dayanıklı Japon akmaz kumaş şeritler, jakarlı tafta ve saten marka armaları ile markanıza değer katan özel kesimli karton sallama etiketleri.
        </p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white border border-slate-200 hover:border-orange-500 rounded-3xl overflow-hidden shadow-xs hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="h-44 bg-slate-50 overflow-hidden relative flex items-center justify-center border-b border-slate-100">
                        @if(!empty($product->images) && count($product->images) > 0)
                            <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        @else
                            <div class="text-center p-4">
                                <span class="text-3xl">🧵</span>
                                <span class="block text-xs font-bold text-slate-400 mt-1">Göksan Tekstil Etiket</span>
                            </div>
                        @endif
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-md px-2.5 py-1 rounded-md text-[10px] font-bold text-sky-600 border border-slate-200 shadow-xs">
                            Tekstil & Dokuma
                        </span>
                    </div>

                    <div class="p-6 space-y-3">
                        <h3 class="text-base font-bold text-slate-900 group-hover:text-orange-600 transition-colors">{{ $product->title }}</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">{{ $product->short_description }}</p>

                        @if(!empty($product->specs) && is_array($product->specs))
                            <div class="pt-3 border-t border-slate-100 space-y-1 text-[11px] text-slate-600">
                                @foreach(array_slice($product->specs, 0, 3) as $k => $v)
                                    <div class="flex justify-between">
                                        <span class="text-slate-400">{{ $k }}:</span>
                                        <span class="font-medium text-slate-800 truncate max-w-[160px]">{{ $v }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <div class="p-6 pt-0">
                    <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => 'gaziantep']) }}" 
                       class="w-full inline-flex items-center justify-center gap-2 py-2.5 rounded-xl bg-slate-50 hover:bg-orange-600 hover:text-white text-slate-800 font-bold text-xs border border-slate-200 hover:border-orange-600 transition-colors">
                        Fiyat & Detayları İncele &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- 81-City Link Component -->
    <div class="pt-10 border-t border-slate-200">
        <x-regional-city-grid />
    </div>
</div>
@endsection
