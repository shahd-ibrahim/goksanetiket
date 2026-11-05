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
        <span class="text-slate-900 font-bold">{{ __('nav_about') }}</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-50 border border-orange-200 text-orange-700">
            {{ __('about_badge') }}
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
            {{ __('about_title') }}
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            {{ __('about_subtitle') }}
        </p>
    </div>

    <!-- Factory & Machine Park Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-2xs space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-lg font-bold">
                01
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('about_card1_title') }}</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                {{ __('about_card1_desc') }}
            </p>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-2xs space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-lg font-bold">
                02
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('about_card2_title') }}</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                {{ __('about_card2_desc') }}
            </p>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-2xs space-y-3 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="w-12 h-12 rounded-xl bg-orange-50 border border-orange-100 text-orange-600 flex items-center justify-center text-lg font-bold">
                03
            </div>
            <h3 class="text-lg font-bold text-slate-900">{{ __('about_card3_title') }}</h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                {{ __('about_card3_desc') }}
            </p>
        </div>
    </div>

    <!-- Management / Founders Section (Yönetim Kadromuz) -->
    <div class="bg-slate-50 border border-slate-200/80 rounded-3xl p-6 sm:p-10 lg:p-12 space-y-8">
        <div class="max-w-2xl space-y-2 text-{{ $isRtl ? 'right' : 'left' }}">
            <span class="text-xs font-bold uppercase tracking-widest text-orange-600">
                {{ $isRtl ? 'القيادة والمؤسسون' : 'Yönetim Kadromuz & Kurucularımız' }}
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                {{ $isRtl ? 'إدارة عائلية بخبرة صناعية راسخة' : 'Üretim Gücümüzün Arkasındaki Yönetim' }}
            </h2>
            <p class="text-sm text-slate-600">
                {{ $isRtl
                    ? 'نجمع بين الخبرة الصناعية المتوارثة والتكنولوجيا الحديثة لتقديم أعلى معايير الجودة لعملائنا.'
                    : 'Göksan Etiket; aile değerlerini kurumsal mühendislik disipliniyle birleştirerek, müşterileriyle uzun vadeli ve şeffaf iş ortaklıkları kurar.' }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <!-- Profile Card 1 -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-7 flex flex-col sm:flex-row gap-6 items-center sm:items-start">
                <div class="w-28 h-36 sm:w-32 sm:h-40 rounded-xl bg-slate-100 border border-slate-200 shrink-0 flex flex-col items-center justify-center text-slate-400">
                    <svg class="w-12 h-12 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.33 0-10 1.67-10 5v3h20v-3c0-3.33-6.67-5-10-5z"/>
                    </svg>
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 mt-1">Kurucu</span>
                </div>
                <div class="space-y-2.5 text-center sm:text-{{ $isRtl ? 'right' : 'left' }}">
                    <span class="inline-block px-3 py-1 rounded-full bg-orange-50 text-orange-700 border border-orange-200/70 text-[11px] font-bold uppercase tracking-wider">
                        {{ $isRtl ? 'صاحب الشركة • رئيس مجلس الإدارة' : 'Firma Sahibi & Yönetim Kurulu Başkanı' }}
                    </span>
                    <h3 class="text-lg font-extrabold text-slate-900">
                        {{ $isRtl ? 'مؤسس وإدارة غوكسان للملصقات' : 'Kurucu Yönetici' }}
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        {{ $isRtl
                            ? '"هدفنا منذ اليوم الأول هو تزويد المصانع التركية بملصقات وتغليف يضاهي المعايير الأوروبية من حيث ثبات الألوان ودقة القص وسرعة التوريد."'
                            : '“Kurulduğumuz günden bu yana temel vizyonumuz; sanayicimize Avrupa standartlarında baskı kalitesi, sıfır hata toleransı ve zamanında sevkiyat güvencesi sunmaktır.”' }}
                    </p>
                </div>
            </div>

            <!-- Profile Card 2 -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-7 flex flex-col sm:flex-row gap-6 items-center sm:items-start">
                <div class="w-28 h-36 sm:w-32 sm:h-40 rounded-xl bg-slate-100 border border-slate-200 shrink-0 flex flex-col items-center justify-center text-slate-400">
                    <svg class="w-12 h-12 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.33 0-10 1.67-10 5v3h20v-3c0-3.33-6.67-5-10-5z"/>
                    </svg>
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400 mt-1">Kurucu Ortak</span>
                </div>
                <div class="space-y-2.5 text-center sm:text-{{ $isRtl ? 'right' : 'left' }}">
                    <span class="inline-block px-3 py-1 rounded-full bg-orange-50 text-orange-700 border border-orange-200/70 text-[11px] font-bold uppercase tracking-wider">
                        {{ $isRtl ? 'شريك مؤسس • مدير الإنتاج والعمليات' : 'Kurucu Ortak & Üretim Direktörü' }}
                    </span>
                    <h3 class="text-lg font-extrabold text-slate-900">
                        {{ $isRtl ? 'الشريك المؤسس وإدارة العمليات' : 'Kurucu Ortak' }}
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        {{ $isRtl
                            ? '"نستثمر باستمرار في أحدث خطوط الفليكسو UV وتقنيات الفحص الرقمي لضمان حصول كل عميل على أفضل سعر مصنع وأعلى دقة تصنيع."'
                            : '“Gaziantep 1. OSB’deki makine parkurumuzu sürekli güncelleyerek, yüksek tirajlı endüstriyel siparişlerde hız, esneklik ve doğrudan üretici fiyat avantajı sağlıyoruz.”' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision & Quality -->
    <div class="bg-white border border-slate-200 rounded-3xl p-8 md:p-12 space-y-6 text-{{ $isRtl ? 'right' : 'left' }}">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">{{ __('about_policy_title') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-sm text-slate-600 leading-relaxed">
            <div>
                <strong class="block text-slate-900 font-bold mb-1">{{ __('about_policy_1_title') }}</strong>
                {{ __('about_policy_1_desc') }}
            </div>
            <div>
                <strong class="block text-slate-900 font-bold mb-1">{{ __('about_policy_2_title') }}</strong>
                {{ __('about_policy_2_desc') }}
            </div>
        </div>
    </div>
</div>
@endsection
