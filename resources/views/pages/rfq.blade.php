@extends('layouts.app')

@php
    $locale = app()->getLocale();
    $isRtl = ($locale === 'ar');
@endphp

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-12">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500 dark:text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-orange-600 dark:hover:text-orange-400">{{ __('nav_home') }}</a>
        <span>/</span>
        <span class="text-slate-900 dark:text-white font-bold">{{ __('rfq_title') }}</span>
    </nav>

    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-3">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 dark:bg-orange-950/60 text-orange-700 dark:text-orange-300">
            ⚡ {{ __('rfq_title') }}
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white tracking-tight">
            {{ __('rfq_title') }}
        </h1>
        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
            {{ __('rfq_subtitle') }}
        </p>
    </div>

    @if(session('quote_success'))
        <div class="p-4 rounded-2xl bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-200 dark:border-emerald-800 text-emerald-800 dark:text-emerald-300 text-xs font-semibold text-center shadow-xs">
            🎉 {{ session('quote_success') }}
        </div>
    @endif

    <!-- Wizard Box -->
    <div class="bg-white dark:bg-slate-900 border-2 border-orange-500/20 dark:border-orange-500/30 rounded-3xl p-6 sm:p-10 shadow-xl space-y-8 transition-colors">
        <form id="dedicatedRfqForm" action="{{ route('corporate.quote') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Step 1: Specifications -->
            <div class="bg-slate-50 dark:bg-slate-800/60 rounded-2xl p-6 border border-slate-200/80 dark:border-slate-700 space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
                <div class="flex items-center gap-2 border-b border-slate-200 dark:border-slate-700 pb-3">
                    <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">1</span>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">{{ __('rfq_step1') }}</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('rfq_label_type') }}</label>
                        <select id="rfq_type" name="product_type" class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-xs font-medium focus:outline-none focus:border-orange-500">
                            <option value="{{ __('opt_rulo_kuse') }}">{{ __('opt_rulo_kuse') }}</option>
                            <option value="{{ __('opt_eko_termal') }}">{{ __('opt_eko_termal') }}</option>
                            <option value="{{ __('opt_lamine_termal') }}">{{ __('opt_lamine_termal') }}</option>
                            <option value="{{ __('opt_pp_opak') }}">{{ __('opt_pp_opak') }}</option>
                            <option value="{{ __('opt_seffaf_pp') }}">{{ __('opt_seffaf_pp') }}</option>
                            <option value="{{ __('opt_silver_mat') }}">{{ __('opt_silver_mat') }}</option>
                            <option value="{{ __('opt_japon_akmaz') }}">{{ __('opt_japon_akmaz') }}</option>
                            <option value="{{ __('opt_jakarli_dokuma') }}">{{ __('opt_jakarli_dokuma') }}</option>
                            <option value="{{ __('opt_guvenlik_void') }}">{{ __('opt_guvenlik_void') }}</option>
                            <option value="{{ __('opt_kutu_ambalaj') }}">{{ __('opt_kutu_ambalaj') }}</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('rfq_dimensions') }}</label>
                        <input type="text" id="rfq_dims" name="dimensions" placeholder="{{ __('rfq_dimensions_ph') }}"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-xs focus:outline-none focus:border-orange-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('rfq_quantity') }}</label>
                        <select id="rfq_qty" name="quantity" class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-xs font-medium focus:outline-none focus:border-orange-500">
                            <option value="{{ __('opt_qty_1k') }}">{{ __('opt_qty_1k') }}</option>
                            <option value="{{ __('opt_qty_5k') }}">{{ __('opt_qty_5k') }}</option>
                            <option value="{{ __('opt_qty_10k') }}" selected>{{ __('opt_qty_10k') }}</option>
                            <option value="{{ __('opt_qty_25k') }}">{{ __('opt_qty_25k') }}</option>
                            <option value="{{ __('opt_qty_50k') }}">{{ __('opt_qty_50k') }}</option>
                            <option value="{{ __('opt_qty_100k') }}">{{ __('opt_qty_100k') }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Step 2: Contact Information -->
            <div class="bg-slate-50 dark:bg-slate-800/60 rounded-2xl p-6 border border-slate-200/80 dark:border-slate-700 space-y-4 text-{{ $isRtl ? 'right' : 'left' }}">
                <div class="flex items-center gap-2 border-b border-slate-200 dark:border-slate-700 pb-3">
                    <span class="w-6 h-6 rounded-full bg-orange-600 text-white font-bold text-xs flex items-center justify-center">2</span>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">{{ __('rfq_step2') }}</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('rfq_company') }}</label>
                        <input type="text" id="rfq_name" name="name" placeholder="{{ __('rfq_company_ph') }}"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-xs focus:outline-none focus:border-orange-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('rfq_phone') }} *</label>
                        <input type="tel" id="rfq_phone" name="phone" required placeholder="05XX XXX XX XX"
                               class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-xs focus:outline-none focus:border-orange-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('rfq_city') }}</label>
                        <select id="rfq_city" name="city" class="w-full px-3.5 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-xs font-medium focus:outline-none focus:border-orange-500">
                            @foreach($cities as $city)
                                <option value="{{ $city->name }}" {{ $city->slug === 'gaziantep' ? 'selected' : '' }}>
                                    {{ $city->name }} (#{{ sprintf('%02d', $city->plate_code) }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">{{ __('rfq_notes') }}</label>
                    <textarea id="rfq_notes" name="note" rows="3" placeholder="{{ __('rfq_notes_ph') }}"
                              class="w-full px-3.5 py-2 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-xs focus:outline-none focus:border-orange-500"></textarea>
                </div>
            </div>

            <!-- Double Submission Action -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                <button type="button" onclick="sendViaWhatsAppDedicated()" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs shadow-md glow-wa transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                    <span>{{ __('btn_whatsapp_quote') }}</span>
                </button>

                <button type="submit" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md shadow-orange-500/20 transition-all">
                    <span>{{ __('btn_submit_quote') }}</span>
                    <svg class="w-4 h-4 {{ $isRtl ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function sendViaWhatsAppDedicated() {
        var type = document.getElementById('rfq_type')?.value || 'Rulo Etiket';
        var dims = document.getElementById('rfq_dims')?.value || 'Belirtilmedi';
        var qty = document.getElementById('rfq_qty')?.value || '10.000 Adet';
        var name = document.getElementById('rfq_name')?.value || 'Belirtilmedi';
        var phone = document.getElementById('rfq_phone')?.value || '';
        var city = document.getElementById('rfq_city')?.value || 'Gaziantep';
        var notes = document.getElementById('rfq_notes')?.value || '';

        var intro = @json(__('whatsapp_msg_intro'));
        var pLabel = @json(__('whatsapp_msg_prod'));
        var dLabel = @json(__('whatsapp_msg_dims'));
        var qLabel = @json(__('whatsapp_msg_qty'));
        var cLabel = @json(__('whatsapp_msg_company'));
        var phLabel = @json(__('whatsapp_msg_phone'));
        var ciLabel = @json(__('whatsapp_msg_city'));
        var nLabel = @json(__('whatsapp_msg_notes'));
        var outro = @json(__('whatsapp_msg_outro'));

        var msg = intro +
                  pLabel + type +
                  dLabel + dims +
                  qLabel + qty +
                  cLabel + name +
                  phLabel + phone +
                  ciLabel + city +
                  (notes ? nLabel + notes : "") +
                  outro;

        var url = "https://wa.me/905330246338?text=" + encodeURIComponent(msg);
        window.open(url, '_blank');
    }
</script>
@endsection
