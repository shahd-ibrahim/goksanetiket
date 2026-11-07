@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
    <div>
        <!-- Top Hero: Clean Category Title, 1-Sentence Summary, 1 Large Clean Image -->
        <section class="py-16 lg:py-24 bg-white border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Breadcrumb -->
                <nav class="flex items-center space-x-2 text-xs text-slate-400 mb-8 sm:mb-12">
                    <a href="{{ route('home') }}"
                        class="hover:text-orange-600 transition-colors">{{ $isRtl ? 'الرئيسية' : 'Ana Sayfa' }}</a>
                    <span>/</span>
                    <span
                        class="text-slate-900 font-medium">{{ $isRtl ? 'ملصقات النسيج والملابس' : 'Tekstil & Dokuma Etiketleri' }}</span>
                </nav>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
                    <!-- Hero Left: Title & 1-Sentence Summary -->
                    <div class="lg:col-span-6 space-y-5 text-{{ $isRtl ? 'right' : 'left' }} reveal">
                        <h1
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 leading-[1.15]">
                            {{ $isRtl ? 'ملصقات النسيج والماركات' : 'Tekstil & Dokuma Etiketleri' }}
                        </h1>
                        <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
                            {{ $isRtl
        ? 'أشرطة ساتان وقماش ياباني مقاوم للغسيل الشديد، علامات جاكار منسوجة وبطاقات كرتون تعليق مصممة للألبسة الفاخرة.'
        : 'Yıkamaya dayanıklı Japon akmaz kumaş şeritler, jakarlı tafta ve saten dokuma armalar ile özel kesimli karton sallama etiketleri.' }}
                        </p>
                    </div>

                    <!-- Hero Right: 1 Large Clean Image -->
                    <div class="lg:col-span-6 reveal reveal-delay-200">
                        <div class="aspect-[16/10] rounded-2xl overflow-hidden bg-slate-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1200&q=80"
                                alt="{{ $isRtl ? 'ملصقات النسيج' : 'Tekstil ve Dokuma Etiketleri' }}"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Grid (bg-slate-50/60, generous py-16 lg:py-24 padding) -->
        <section class="py-16 lg:py-24 bg-slate-50/60 border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($products as $index => $product)
                        @php
                            $delayClass = ($index % 3 === 1) ? 'reveal-delay-100' : (($index % 3 === 2) ? 'reveal-delay-200' : '');
                        @endphp
                        <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => 'gaziantep']) }}"
                            class="group block text-{{ $isRtl ? 'right' : 'left' }} reveal {{ $delayClass }}">
                            <!-- ONLY a crisp aspect-[4/3] image -->
                            <div class="aspect-[4/3] rounded-xl overflow-hidden bg-white shadow-xs relative mb-4">
                                @if(!empty($product->images) && count($product->images) > 0)
                                    <img src="{{ $product->images[0] }}" alt="{{ $product->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=800&q=80"
                                        alt="{{ $product->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @endif
                            </div>

                            <!-- Product Title -->
                            <h2
                                class="text-lg sm:text-xl font-bold text-slate-900 group-hover:text-orange-600 transition-colors mb-2">
                                {{ $product->title }}
                            </h2>

                            <!-- 1-line short description -->
                            <p class="text-sm text-slate-600 leading-relaxed line-clamp-2">
                                {{ $product->short_description }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Bottom CTA: Simple Centered Call-to-Action with One Orange Button -->
        <section class="py-16 lg:py-24 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6 reveal">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
                    {{ $isRtl ? 'احصل على عرض سعر لهذه المجموعة من المنتجات' : 'Bu ürün grubu için teklif alın' }}
                </h2>
                <div class="pt-2">
                    <a href="{{ route('rfq') }}"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-semibold text-base shadow-sm shadow-orange-600/20 transition-all">
                        <span>{{ $isRtl ? 'اطلب عرض سعر' : 'Teklif Al' }}</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection