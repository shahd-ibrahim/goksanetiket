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
        <span class="text-slate-900 dark:text-white font-bold">{{ __('nav_contact') }}</span>
    </nav>

    <!-- Header -->
    <div class="max-w-3xl space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 dark:bg-orange-950/60 text-orange-700 dark:text-orange-300">
            {{ __('contact_badge') }}
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-tight">
            {{ __('contact_title') }}
        </h1>
        <p class="text-base text-slate-600 dark:text-slate-400 leading-relaxed">
            {{ __('contact_subtitle') }}
        </p>
    </div>

    <!-- Contact Details & Form Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        <!-- Info Column -->
        <div class="lg:col-span-5 space-y-6 text-{{ $isRtl ? 'right' : 'left' }}">
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 space-y-6 shadow-xs transition-colors">
                <!-- Address -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-100 dark:bg-orange-950/60 text-orange-600 dark:text-orange-400 flex items-center justify-center text-xl shrink-0">
                        📍
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-1">{{ __('contact_addr_title') }}</h4>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                            {{ __('contact_addr_desc') }}
                        </p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 flex items-center justify-center text-xl shrink-0">
                        📞
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-1">{{ __('contact_phone_title') }}</h4>
                        <a href="tel:+903425034652" class="text-base font-bold text-slate-900 dark:text-white hover:text-orange-600 dark:hover:text-orange-400 transition-colors" dir="ltr">
                            +90 342 503 46 52
                        </a>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">{{ __('working_hours') }}</p>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl shrink-0">
                        📱
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-1">{{ __('contact_wa_title') }}</h4>
                        <a href="https://wa.me/905330246338" target="_blank" class="text-base font-bold text-emerald-600 dark:text-emerald-400 hover:underline" dir="ltr">
                            +90 533 024 63 38
                        </a>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">{{ __('contact_wa_sub') }}</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-950/60 text-amber-600 dark:text-amber-400 flex items-center justify-center text-xl shrink-0">
                        ✉️
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-1">{{ __('contact_email_title') }}</h4>
                        <a href="mailto:info@goksanetiket.com" class="text-sm text-slate-600 dark:text-slate-300 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                            info@goksanetiket.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Transport & Delivery Info -->
            <div class="bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 text-xs text-slate-600 dark:text-slate-300 space-y-2 transition-colors">
                <strong class="block text-slate-900 dark:text-white font-bold">{{ __('contact_shipping_title') }}</strong>
                <p>{{ __('contact_shipping_desc') }}</p>
            </div>
        </div>

        <!-- Form Column -->
        <div class="lg:col-span-7 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 shadow-xs text-{{ $isRtl ? 'right' : 'left' }} transition-colors">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ __('contact_form_title') }}</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 mb-6">{{ __('contact_form_subtitle') }}</p>

            @if(session('quote_success'))
                <div class="mb-4 p-4 rounded-xl bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-200 dark:border-emerald-800 text-emerald-800 dark:text-emerald-300 text-xs font-semibold">
                    {{ session('quote_success') }}
                </div>
            @endif

            <form action="{{ route('corporate.quote') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('contact_name_label') }}</label>
                        <input type="text" name="name" required placeholder=""
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-orange-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('contact_phone_label') }}</label>
                        <input type="tel" name="phone" required placeholder="05XX XXX XX XX"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('contact_prod_label') }}</label>
                        <select name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-orange-500">
                            <option value="{{ __('opt_rulo_kuse') }}">{{ __('opt_rulo_kuse') }}</option>
                            <option value="{{ __('opt_eko_termal') }}">{{ __('opt_eko_termal') }}</option>
                            <option value="{{ __('opt_pp_opak') }}">{{ __('opt_pp_opak') }}</option>
                            <option value="{{ __('opt_japon_akmaz') }}">{{ __('opt_japon_akmaz') }}</option>
                            <option value="{{ __('opt_jakarli_dokuma') }}">{{ __('opt_jakarli_dokuma') }}</option>
                            <option value="{{ __('opt_kutu_ambalaj') }}">{{ __('opt_kutu_ambalaj') }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('contact_city_label') }}</label>
                        <input type="text" name="city" placeholder=""
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-orange-500">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('contact_msg_label') }}</label>
                    <textarea name="note" rows="4" placeholder="{{ __('contact_msg_ph') }}"
                              class="w-full px-4 py-2 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-orange-500"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full py-3.5 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md transition-all">
                        {{ __('btn_send_message') }} &rarr;
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
