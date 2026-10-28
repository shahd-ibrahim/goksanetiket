@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Göksan Etiket",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/logo.png') }}",
  "description": "Türkiye genelinde 81 il ve organize sanayi bölgelerine toptan rulo etiket üretimi ve doğrudan sevkiyat.",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+90-850-000-0000",
    "contactType": "customer service",
    "areaServed": "TR",
    "availableLanguage": "Turkish"
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
    "name": "Hizmet Bölgelerimiz (81 İl)",
    "item": "{{ route('regional.index') }}"
  }]
}
</script>
@endpush

@section('content')
<div class="container">
    <!-- Hero Section -->
    <section class="hero" style="text-align: center; max-width: 900px; margin: 0 auto;">
        <div class="hero-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Türkiye Geneli 81 İl ve Tüm Organize Sanayi Bölgeleri (OSB)
        </div>
        <h1>Türkiye'nin Endüstriyel Rulo Etiket Üretim Merkezi</h1>
        <p>
            Fabrikamızdan Türkiye'nin her noktasına doğrudan toptan rulo baskı! İlinizi seçerek size özel teslimat sürelerini, organize sanayi sevkiyat avantajlarını ve rulo etiket fiyatlarını hemen inceleyin.
        </p>

        <!-- Search bar for 81 cities -->
        <div style="max-width: 580px; margin: 0 auto 36px; position: relative;">
            <input type="text" id="citySearch" placeholder="İl veya OSB adı yazın (Örn: Bursa, İkitelli, Başpınar, Denizli)..." 
                style="width: 100%; padding: 16px 24px; border-radius: 999px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.15); color: #fff; font-size: 1rem; outline: none; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
        </div>
    </section>

    <!-- Key Metrics Stats -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 64px;">
        <div class="card" style="text-align: center; padding: 28px 20px;">
            <div style="font-size: 2.4rem; font-weight: 800; color: var(--primary-light); font-family: 'Space Grotesk', sans-serif;">81 İl</div>
            <div style="color: var(--text-muted); font-size: 0.95rem; margin-top: 6px;">Tam Kapsama & Kapıya Teslim</div>
        </div>
        <div class="card" style="text-align: center; padding: 28px 20px;">
            <div style="font-size: 2.4rem; font-weight: 800; color: var(--accent); font-family: 'Space Grotesk', sans-serif;">350+</div>
            <div style="color: var(--text-muted); font-size: 0.95rem; margin-top: 6px;">Organize Sanayi Bölgesi (OSB)</div>
        </div>
        <div class="card" style="text-align: center; padding: 28px 20px;">
            <div style="font-size: 2.4rem; font-weight: 800; color: var(--success); font-family: 'Space Grotesk', sans-serif;">24-48 Saat</div>
            <div style="color: var(--text-muted); font-size: 0.95rem; margin-top: 6px;">Hızlı Fabrika Çıkışı & Sevkiyat</div>
        </div>
        <div class="card" style="text-align: center; padding: 28px 20px;">
            <div style="font-size: 2.4rem; font-weight: 800; color: #a855f7; font-family: 'Space Grotesk', sans-serif;">8 Renk UV</div>
            <div style="color: var(--text-muted); font-size: 0.95rem; margin-top: 6px;">Yüksek Hızlı Flekso & Dijital Baskı</div>
        </div>
    </div>

    <!-- Cities Grouped By Geographical Region -->
    <div id="regionsSection">
        <h2 style="font-size: 1.85rem; font-weight: 700; margin-bottom: 32px; display: flex; align-items: center; gap: 12px;">
            <span style="color: var(--primary-light);">📍</span> Coğrafi Bölgelere Göre Hizmet Ağımız
        </h2>

        @foreach($groupedCities as $regionName => $citiesList)
            <div class="region-block" style="margin-bottom: 56px;">
                <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-color); padding-bottom: 12px; margin-bottom: 24px;">
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: #fff;">
                        {{ $regionName }} Bölgesi
                    </h3>
                    <span style="background: rgba(255, 255, 255, 0.08); padding: 4px 12px; border-radius: 999px; font-size: 0.85rem; color: var(--text-muted);">
                        {{ $citiesList->count() }} İl
                    </span>
                </div>

                <div class="grid-3 city-grid">
                    @foreach($citiesList as $city)
                        <div class="card city-card" data-name="{{ mb_strtolower($city->name, 'UTF-8') }}" data-zones="{{ mb_strtolower($city->industrial_zones, 'UTF-8') }}" style="display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px;">
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        <span style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 8px; background: rgba(2, 132, 199, 0.15); border: 1px solid rgba(56, 189, 248, 0.3); font-weight: 800; font-family: 'Space Grotesk', sans-serif; color: var(--primary-light); font-size: 0.95rem;">
                                            {{ $city->formatted_plate }}
                                        </span>
                                        <h4 style="font-size: 1.25rem; font-weight: 700;">
                                            <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" style="color: #fff;">
                                                {{ $city->name }}
                                            </a>
                                        </h4>
                                    </div>

                                    <span style="display: inline-flex; align-items: center; gap: 4px; font-size: 0.82rem; color: var(--accent); background: rgba(245, 158, 11, 0.1); padding: 4px 10px; border-radius: 999px; font-weight: 600;">
                                        ⚡ {{ $city->delivery_time }}
                                    </span>
                                </div>

                                <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 16px; line-height: 1.5;">
                                    <strong style="color: #cbd5e1;">Sanayi & OSB:</strong> {{ \Illuminate\Support\Str::limit($city->industrial_zones, 95) }}
                                </p>
                            </div>

                            <div style="border-top: 1px solid var(--border-color); padding-top: 14px; display: flex; align-items: center; justify-content: space-between;">
                                <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}" style="font-size: 0.88rem; font-weight: 600; color: var(--primary-light); display: inline-flex; align-items: center; gap: 6px;">
                                    {{ $city->name }} Etiket Fabrikası
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- Active Products Section -->
    <section id="urunler" style="margin: 80px 0 32px;">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 48px;">
            <div class="hero-badge">Üretim Yelpazemiz</div>
            <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 14px;">Endüstriyel Rulo Etiket Çözümleri</h2>
            <p style="color: var(--text-muted);">En zorlu sanayi şartlarına, soğuk havaya, kimyasallara ve yüksek sürtünmeye dayanıklı etiket çeşitleri.</p>
        </div>

        <div class="grid-4">
            @foreach($products as $product)
                <div class="card" style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="width: 100%; height: 160px; border-radius: var(--radius-md); overflow: hidden; margin-bottom: 18px; background: #1e293b;">
                            @if(!empty($product->images) && count($product->images) > 0)
                                <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: var(--text-dim); font-size: 0.9rem;">Göksan Etiket</div>
                            @endif
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">
                            {{ $product->title }}
                        </h3>
                        <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 16px;">
                            {{ \Illuminate\Support\Str::limit($product->short_description, 110) }}
                        </p>
                    </div>

                    <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => 'istanbul']) }}" class="btn btn-primary" style="width: 100%; font-size: 0.88rem;">
                        Ürünü İncele & Fiyat Al
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('citySearch');
        const cards = document.querySelectorAll('.city-card');
        const regionBlocks = document.querySelectorAll('.region-block');

        searchInput.addEventListener('input', function (e) {
            const query = e.target.value.trim().toLowerCase();

            cards.forEach(card => {
                const name = card.getAttribute('data-name');
                const zones = card.getAttribute('data-zones');

                if (name.includes(query) || zones.includes(query)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            // Hide empty region blocks during search
            regionBlocks.forEach(block => {
                const visibleCards = block.querySelectorAll('.city-card[style*="display: flex"], .city-card:not([style*="display"])');
                const anyVisible = Array.from(visibleCards).some(c => c.style.display !== 'none');
                block.style.display = anyVisible ? 'block' : 'none';
            });
        });
    });
</script>
@endpush
@endsection
