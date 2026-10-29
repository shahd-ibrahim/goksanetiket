@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500 dark:text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-orange-600 dark:hover:text-orange-400">{{ __('nav_home') }}</a>
        <span>/</span>
        <span class="text-slate-900 dark:text-white font-bold">{{ __('nav_about') }}</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 dark:bg-orange-950/60 text-orange-700 dark:text-orange-300">
            {{ __('about_badge') }}
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-tight">
            {{ __('about_title') }}
        </h1>
        <p class="text-base text-slate-600 dark:text-slate-400 leading-relaxed">
            {{ __('about_subtitle') }}
        </p>
    </div>

    <!-- Factory & Machine Park Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xs space-y-3 text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
            <div class="w-12 h-12 rounded-2xl bg-orange-100 dark:bg-orange-950/60 text-orange-600 dark:text-orange-400 flex items-center justify-center text-2xl">
                🏭
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('about_card1_title') }}</h3>
            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                {{ __('about_card1_desc') }}
            </p>
        </div>

        <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xs space-y-3 text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
            <div class="w-12 h-12 rounded-2xl bg-blue-100 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 flex items-center justify-center text-2xl">
                ⚙️
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('about_card2_title') }}</h3>
            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                {{ __('about_card2_desc') }}
            </p>
        </div>

        <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xs space-y-3 text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
            <div class="w-12 h-12 rounded-2xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-2xl">
                🚚
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">{{ __('about_card3_title') }}</h3>
            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                {{ __('about_card3_desc') }}
            </p>
        </div>
    </div>

    <!-- Vision & Quality -->
    <div class="bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 md:p-12 space-y-6 text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">{{ __('about_policy_title') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
            <div>
                <strong class="block text-slate-900 dark:text-white font-bold mb-1">{{ __('about_policy_1_title') }}</strong>
                {{ __('about_policy_1_desc') }}
            </div>
            <div>
                <strong class="block text-slate-900 dark:text-white font-bold mb-1">{{ __('about_policy_2_title') }}</strong>
                {{ __('about_policy_2_desc') }}
            </div>
        </div>
    </div>
</div>
@endsection
