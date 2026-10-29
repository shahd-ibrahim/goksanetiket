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
        <span class="text-slate-900 font-bold">{{ __('nav_machinery') }}</span>
    </nav>

    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            {{ __('machinery_badge') }}
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            {{ __('machinery_title') }}
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            {{ __('machinery_desc') }}
        </p>
    </div>

    <!-- Machinery Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Machine 1: 8 Renk UV Flexo -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-orange-600 uppercase">{{ __('machinery_m1_badge') }}</span>
                <span class="text-xs bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded font-bold">{{ __('machinery_m1_tag') }}</span>
            </div>
            <div class="text-3xl">🖨️</div>
            <h3 class="text-xl font-bold text-slate-900">{{ __('machinery_m1_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('machinery_m1_desc') }}
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m1_b1') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m1_b2') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m1_b3') }}</li>
            </ul>
        </div>

        <!-- Machine 2: Dijital Sonlandırma & Kesim -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-blue-600 uppercase">{{ __('machinery_m2_badge') }}</span>
                <span class="text-xs bg-blue-100 text-blue-800 px-2.5 py-0.5 rounded font-bold">{{ __('machinery_m2_tag') }}</span>
            </div>
            <div class="text-3xl">✂️</div>
            <h3 class="text-xl font-bold text-slate-900">{{ __('machinery_m2_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('machinery_m2_desc') }}
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m2_b1') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m2_b2') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m2_b3') }}</li>
            </ul>
        </div>

        <!-- Machine 3: Sıcak / Soğuk Varak Yaldız & Serigrafi -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-amber-600 uppercase">{{ __('machinery_m3_badge') }}</span>
                <span class="text-xs bg-amber-100 text-amber-800 px-2.5 py-0.5 rounded font-bold">{{ __('machinery_m3_tag') }}</span>
            </div>
            <div class="text-3xl">✨</div>
            <h3 class="text-xl font-bold text-slate-900">{{ __('machinery_m3_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('machinery_m3_desc') }}
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m3_b1') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m3_b2') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m3_b3') }}</li>
            </ul>
        </div>

        <!-- Machine 4: Otomatik Dilimleme & Kuka Sarım -->
        <div class="bg-white border border-slate-200 rounded-3xl p-8 shadow-xs hover:shadow-md transition-all space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <span class="text-xs font-mono font-bold text-purple-600 uppercase">{{ __('machinery_m4_badge') }}</span>
                <span class="text-xs bg-purple-100 text-purple-800 px-2.5 py-0.5 rounded font-bold">{{ __('machinery_m4_tag') }}</span>
            </div>
            <div class="text-3xl">🔄</div>
            <h3 class="text-xl font-bold text-slate-900">{{ __('machinery_m4_title') }}</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                {{ __('machinery_m4_desc') }}
            </p>
            <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m4_b1') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m4_b2') }}</li>
                <li class="flex items-center gap-2"><span class="text-emerald-600 font-bold">✓</span> {{ __('machinery_m4_b3') }}</li>
            </ul>
        </div>
    </div>

    <!-- Call to Action Banner -->
    <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-3xl p-8 md:p-12 text-white flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2 text-{{ $isRtl ? 'right' : 'left' }}">
            <h3 class="text-2xl font-black">{{ __('machinery_cta_title') }}</h3>
            <p class="text-xs sm:text-sm text-slate-300">{{ __('machinery_cta_desc') }}</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('corporate.rfq') }}" class="px-6 py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 font-bold text-xs text-white shadow-md">
                {{ __('btn_quote') }}
            </a>
            <a href="https://wa.me/905330246338" target="_blank" class="px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 font-bold text-xs text-white shadow-md">
                {{ __('btn_whatsapp') }}
            </a>
        </div>
    </div>
</div>
@endsection
