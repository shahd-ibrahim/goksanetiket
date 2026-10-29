@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "{{ $city->name }} {{ $product->title }}",
  "image": [
    @if(!empty($product->images) && count($product->images) > 0)
      "{{ $product->images[0] }}"
    @else
      "{{ asset('images/logo.png') }}"
    @endif
  ],
  "description": "{{ $city->name }} ve {{ $city->industrial_zones }} sanayi bölgeleri için toptan {{ $product->title }} imalatı ve rulo baskı.",
  "brand": {
    "@type": "Brand",
    "name": "Göksan Etiket"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "TRY",
    "price": "0.15",
    "priceValidUntil": "{{ date('Y-12-31') }}",
    "itemCondition": "https://schema.org/NewCondition",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "Göksan Etiket"
    }
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Ana Sayfa",
    "item": "{{ url('/') }}"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "{{ $city->name }} Etiket Fabrikası",
    "item": "{{ route('regional.city', ['citySlug' => $city->slug]) }}"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "{{ $city->name }} {{ $product->title }}",
    "item": "{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $city->slug]) }}"
  }]
}
</script>
@endpush

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-12">
    <!-- Breadcrumb -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ url('/') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <a href="{{ route('regional.index') }}" class="hover:text-orange-600">Hizmet Bölgeleri</a>
        <span>/</span>
        <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" class="hover:text-orange-600">{{ $city->name }} Etiket Fabrikası</a>
        <span>/</span>
        <span class="text-orange-600 font-bold">{{ $product->title }}</span>
    </nav>

    <!-- Product & City Hero -->
    <div class="bg-gradient-to-br from-slate-50 via-white to-orange-50/30 border border-slate-200 rounded-3xl p-8 md:p-12 shadow-xs">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <!-- Left: Hero Content -->
            <div class="lg:col-span-7 space-y-5">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-800">
                        {{ $city->name }} Toptan İmalat
                    </span>
                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                        ⚡ {{ $city->delivery_time ?? '24-48 Saat' }} Teslimat
                    </span>
                </div>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                    {{ $city->name }} {{ $product->title }}
                </h1>

                <p class="text-sm sm:text-base text-slate-600 leading-relaxed max-w-2xl">
                    {{ $product->short_description }} {{ $city->name }} genelindeki tüm fabrikalar ve organize sanayi kuruluşları için toptan üretim avantajı.
                </p>

                <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-xs text-xs text-slate-700">
                    <strong class="text-slate-900 block mb-1">🏭 {{ $city->name }} Hedef Sanayi Alanları:</strong>
                    {{ $city->industrial_zones ?? $city->name . ' Organize Sanayi Bölgesi' }}
                </div>

                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="https://wa.me/905330246338?text={{ urlencode('Merhaba, ' . $city->name . ' fabrikamız için ' . $product->title . ' fiyat teklifi almak istiyoruz.') }}" target="_blank"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs shadow-md transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span>WhatsApp ile {{ $city->name }} Fiyatı Al</span>
                    </a>
                    <a href="tel:+903425034652" class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-white border border-slate-300 hover:bg-slate-50 text-slate-800 font-bold text-xs shadow-xs transition-all">
                        <span>📞 +90 342 503 46 52</span>
                    </a>
                </div>
            </div>

            <!-- Right: Product Card / Specs -->
            <div class="lg:col-span-5">
                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-md space-y-4">
                    <div class="h-48 bg-slate-50 rounded-2xl overflow-hidden flex items-center justify-center border border-slate-100">
                        @if(!empty($product->images) && count($product->images) > 0)
                            <img src="{{ $product->images[0] }}" alt="{{ $city->name }} {{ $product->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="text-center p-4">
                                <span class="text-4xl">🏷️</span>
                                <span class="block text-xs font-bold text-slate-500 mt-2">{{ $product->title }}</span>
                            </div>
                        @endif
                    </div>

                    @if(!empty($product->specs) && is_array($product->specs))
                        <div class="space-y-2 text-xs border-t border-slate-100 pt-3">
                            <span class="font-bold text-slate-900 block">Teknik Özellikler:</span>
                            @foreach($product->specs as $key => $val)
                                <div class="flex justify-between py-1 border-b border-slate-50">
                                    <span class="text-slate-500">{{ $key }}:</span>
                                    <span class="font-semibold text-slate-800">{{ $val }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Other Regional Cities -->
    @if(isset($otherCities) && $otherCities->isNotEmpty())
    <div class="border-t border-slate-200 pt-10">
        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-800 mb-4">
            {{ $city->region }} Bölgesinde {{ $product->title }} İmalatı
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3">
            @foreach($otherCities as $oc)
                <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $oc->slug]) }}" 
                   class="bg-white border border-slate-200 hover:border-orange-500 p-3 rounded-xl text-center shadow-xs hover:shadow-md transition-all group">
                    <span class="block text-xs font-bold text-slate-800 group-hover:text-orange-600">{{ $oc->name }}</span>
                    <span class="block text-[10px] text-slate-400 mt-0.5">{{ $oc->delivery_time }}</span>
                </a>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
