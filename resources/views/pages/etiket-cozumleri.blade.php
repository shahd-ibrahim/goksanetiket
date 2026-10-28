@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-orange-400">Ana Sayfa</a>
        <span>/</span>
        <span class="text-orange-400 font-medium">Etiket Çözümleri</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4">
        <span class="text-xs font-bold uppercase tracking-widest text-orange-400">MODÜL 01</span>
        <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
            Rulo Etiket & Barkod Etiketleri
        </h1>
        <p class="text-base text-slate-300 leading-relaxed">
            Termal, Kuşe, PP Opak, Silver Mat ve Güvenlik Void etiketleri. Tüm masaüstü ve endüstriyel barkod yazıcılarla (Zebra, TSC, Honeywell, Godex vb.) %100 uyumlu rulo sarımı ve kuka çapları.
        </p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
            <div class="bg-navy-900 border border-navy-800 hover:border-orange-500/50 rounded-3xl overflow-hidden shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between">
                <div>
                    <div class="h-48 bg-navy-950 overflow-hidden relative">
                        @if(!empty($product->images) && count($product->images) > 0)
                            <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-600 text-xs">Göksan Etiket</div>
                        @endif
                        <span class="absolute top-3 left-3 bg-navy-950/80 backdrop-blur-md px-3 py-1 rounded-md text-[11px] font-bold text-orange-400 border border-navy-800">
                            Flekso Rulo Baskı
                        </span>
                    </div>

                    <div class="p-6 space-y-3">
                        <h3 class="text-lg font-bold text-white">{{ $product->title }}</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">{{ $product->short_description }}</p>

                        @if(!empty($product->specs) && is_array($product->specs))
                            <div class="pt-3 border-t border-navy-800 space-y-1 text-[11px] text-slate-300">
                                @foreach(array_slice($product->specs, 0, 3) as $k => $v)
                                    <div class="flex justify-between">
                                        <span class="text-slate-500">{{ $k }}:</span>
                                        <span class="font-medium truncate max-w-[160px]">{{ $v }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <div class="p-6 pt-0">
                    <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => 'gaziantep']) }}" 
                       class="w-full inline-flex items-center justify-center gap-2 py-2.5 rounded-xl bg-navy-850 hover:bg-orange-500 text-white font-bold text-xs border border-navy-700 hover:border-orange-500 transition-colors">
                        Fiyat & Detayları İncele &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- 81-City Link Component -->
    <div class="pt-10 border-t border-navy-850">
        <x-regional-city-grid />
    </div>
</div>
@endsection
