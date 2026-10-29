@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-orange-600">{{ __('nav_home') }}</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">{{ __('nav_sectors') }}</span>
    </nav>

    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            {{ __('sectors_badge') }}
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            {{ __('sectors_title') }}
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            {{ __('sectors_subtitle') }}
        </p>
    </div>

    <!-- Sectors 6-Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- 1. Gıda & İçecek -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl">
                🍲
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('sec_food_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('sec_food_desc') }}
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>{{ $isRtl ? 'المنتجات المقترحة:' : 'Önerilen:' }}</strong> {{ __('sec_food_rec') }}
            </div>
        </div>

        <!-- 2. Kozmetik & Kişisel Bakım -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-2xl bg-pink-50 text-pink-600 flex items-center justify-center text-2xl">
                💄
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('sec_cosm_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('sec_cosm_desc') }}
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>{{ $isRtl ? 'المنتجات المقترحة:' : 'Önerilen:' }}</strong> {{ __('sec_cosm_rec') }}
            </div>
        </div>

        <!-- 3. Tekstil & Konfeksiyon -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-2xl">
                🧵
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('sec_tex_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('sec_tex_desc') }}
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>{{ $isRtl ? 'المنتجات المقترحة:' : 'Önerilen:' }}</strong> {{ __('sec_tex_rec') }}
            </div>
        </div>

        <!-- 4. Lojistik & Kargo Depolama -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl">
                🚚
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('sec_log_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('sec_log_desc') }}
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>{{ $isRtl ? 'المنتجات المقترحة:' : 'Önerilen:' }}</strong> {{ __('sec_log_rec') }}
            </div>
        </div>

        <!-- 5. Kimya & Madeni Yağ Sanayi -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl">
                🧪
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('sec_chem_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('sec_chem_desc') }}
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>{{ $isRtl ? 'المنتجات المقترحة:' : 'Önerilen:' }}</strong> {{ __('sec_chem_rec') }}
            </div>
        </div>

        <!-- 6. Otomotiv & Elektronik Sanayi -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-700 flex items-center justify-center text-2xl">
                🚗
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('sec_auto_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('sec_auto_desc') }}
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>{{ $isRtl ? 'المنتجات المقترحة:' : 'Önerilen:' }}</strong> {{ __('sec_auto_rec') }}
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="text-center pt-4">
        <a href="{{ route('corporate.rfq') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md">
            <span>{{ __('sec_cta_btn') }}</span>
            <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>
</div>
@endsection
