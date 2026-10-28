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
<div class="container">
    <!-- Breadcrumb -->
    <nav class="breadcrumb-nav" style="margin-top: 24px;">
        <a href="{{ url('/') }}">Ana Sayfa</a>
        <span>/</span>
        <a href="{{ route('regional.index') }}">Hizmet Bölgeleri</a>
        <span>/</span>
        <a href="{{ route('regional.city', ['citySlug' => $city->slug]) }}">{{ $city->name }} Etiket Fabrikası</a>
        <span>/</span>
        <span style="color: var(--primary-light);">{{ $product->title }}</span>
    </nav>

    <!-- Product & City Hero -->
    <div style="display: grid; grid-template-columns: 1.1fr 1fr; gap: 48px; margin: 24px 0 64px; align-items: center;">
        <!-- Images -->
        <div>
            <div style="width: 100%; height: 380px; border-radius: var(--radius-lg); overflow: hidden; background: #131b2e; border: 1px solid var(--border-color); position: relative; box-shadow: 0 20px 40px rgba(0,0,0,0.4);">
                @if(!empty($product->images) && count($product->images) > 0)
                    <img src="{{ $product->images[0] }}" alt="{{ $city->name }} {{ $product->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                @else
                    <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: var(--text-dim);">Göksan Etiket</div>
                @endif
                <div style="position: absolute; top: 16px; left: 16px; background: rgba(10, 15, 29, 0.85); backdrop-filter: blur(8px); border: 1px solid var(--border-color); padding: 6px 14px; border-radius: 999px; font-size: 0.82rem; font-weight: 700; color: var(--primary-light);">
                    📍 {{ $city->name }} İmalatı & Doğrudan Sevkiyat
                </div>
            </div>
        </div>

        <!-- Hero Content -->
        <div>
            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    Fabrikadan {{ $city->name }} Sevkiyatı
                </span>
                <span style="background: rgba(245, 158, 11, 0.15); color: var(--accent); padding: 4px 12px; border-radius: 999px; font-size: 0.85rem; font-weight: 700;">
                    ⚡ {{ $city->delivery_time }}
                </span>
            </div>

            <h1 style="font-size: clamp(1.8rem, 3.2vw, 2.6rem); font-weight: 800; line-height: 1.2; margin-bottom: 16px; color: #fff;">
                {{ $city->name }} {{ $product->title }}
            </h1>

            <p style="font-size: 1.05rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 24px;">
                {{ $product->short_description }}
            </p>

            <div class="card" style="margin-bottom: 24px; padding: 18px 20px; background: rgba(255, 255, 255, 0.03);">
                <div style="font-size: 0.85rem; color: var(--primary-light); font-weight: 700; margin-bottom: 4px;">
                    🏭 {{ $city->name }} HEDEF SANAYİ BÖLGELERİ:
                </div>
                <div style="font-size: 0.92rem; color: #e2e8f0;">
                    {{ $city->industrial_zones }}
                </div>
            </div>

            <div style="display: flex; flex-wrap: wrap; gap: 14px;">
                <a href="https://wa.me/905300000000?text={{ urlencode('Merhaba, ' . $city->name . ' adresimiz için ' . $product->title . ' fiyat teklifi ve numune talep ediyorum.') }}" target="_blank" class="btn btn-whatsapp" style="padding: 14px 28px; font-size: 1rem;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                    WhatsApp ile {{ $city->name }} Fiyatı Al
                </a>
                <a href="tel:+908500000000" class="btn btn-primary" style="padding: 14px 28px; font-size: 1rem;">
                    0850 000 00 00
                </a>
            </div>
        </div>
    </div>

    <!-- Product Detailed Content & Specifications -->
    <div style="display: grid; grid-template-columns: 1.4fr 1fr; gap: 40px; margin-bottom: 64px;">
        <!-- Left: Technical Article -->
        <div>
            <div class="card" style="padding: 36px 32px; line-height: 1.8;">
                <h2 style="font-size: 1.6rem; font-weight: 800; color: #fff; margin-bottom: 18px;">
                    {{ $city->name }} Sanayi Kuruluşları İçin {{ $product->title }}
                </h2>

                <p style="color: var(--text-muted); margin-bottom: 18px;">
                    {{ $product->content }}
                </p>

                <h3 style="font-size: 1.3rem; font-weight: 700; color: #fff; margin: 24px 0 12px;">
                    {{ $city->name }} İline Özel Sevkiyat & Sipariş Avantajları
                </h3>

                <ul style="color: var(--text-muted); padding-left: 20px; margin-bottom: 24px; display: flex; flex-direction: column; gap: 8px;">
                    <li><strong>Doğrudan Üretici Güvencesi:</strong> Aracı ve toptancı payı olmaksızın en rekabetçi rulo etiket birim maliyetleri.</li>
                    <li><strong>{{ $city->industrial_zones }} Bölgesine Hızlı İntikal:</strong> {{ $city->delivery_time }} içerisinde ambar ve kargo teslimi.</li>
                    <li><strong>Masaüstü ve Endüstriyel Yazıcı Uyumu:</strong> Zebra, TSC, Argox, Honeywell ve Sato yazıcılarla %100 uyumlu rulo sarımı ve kuka seçenekleri.</li>
                    <li><strong>Ücretsiz Numune:</strong> {{ $city->name }} merkez veya ilçelerindeki üretim tesisinize deneme numunesi gönderimi.</li>
                </ul>

                <div style="background: rgba(2, 132, 199, 0.08); border-left: 4px solid var(--primary-light); padding: 16px 20px; border-radius: 0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-size: 0.95rem; color: #e2e8f0; margin: 0;">
                        💡 <strong>Özel Ebat & Baskı Talepleri:</strong> Standart ölçülerin yanı sıra istediğiniz en, boy ve özel bıçak kesiminde baskılı veya baskısız rulo etiket üretebiliyoruz.
                    </p>
                </div>
            </div>
        </div>

        <!-- Right: Technical Specs Table -->
        <div>
            <div class="card" style="padding: 32px 28px;">
                <h3 style="font-size: 1.3rem; font-weight: 700; color: #fff; margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                    ⚙️ Teknik Özellikler
                </h3>

                @if(!empty($product->specs) && is_array($product->specs))
                    <table style="width: 100%; border-collapse: collapse; font-size: 0.92rem;">
                        <tbody>
                            @foreach($product->specs as $specKey => $specValue)
                                <tr style="border-bottom: 1px solid var(--border-color);">
                                    <td style="padding: 12px 0; color: var(--text-muted); font-weight: 600; width: 40%;">{{ $specKey }}</td>
                                    <td style="padding: 12px 0; color: #f1f5f9; text-align: right;">{{ $specValue }}</td>
                                </tr>
                            @endforeach
                            <tr style="border-bottom: 1px solid var(--border-color);">
                                <td style="padding: 12px 0; color: var(--text-muted); font-weight: 600;">Hedef İl</td>
                                <td style="padding: 12px 0; color: var(--primary-light); font-weight: 700; text-align: right;">{{ $city->name }} ({{ $city->formatted_plate }})</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 0; color: var(--text-muted); font-weight: 600;">Teslim Süresi</td>
                                <td style="padding: 12px 0; color: var(--accent); font-weight: 700; text-align: right;">{{ $city->delivery_time }}</td>
                            </tr>
                        </tbody>
                    </table>
                @endif

                <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--border-color); text-align: center;">
                    <a href="https://wa.me/905300000000?text={{ urlencode($city->name . ' için ' . $product->title . ' teknik numune ve fiyat teklifi istiyorum.') }}" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
                        Ücretsiz Numune Talep Et
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cross-Selling Other Products in this City -->
    @if(isset($otherProducts) && $otherProducts->count() > 0)
        <section style="margin-bottom: 64px;">
            <div style="margin-bottom: 28px;">
                <div class="hero-badge">{{ $city->name }} İçin Diğer Çözümler</div>
                <h3 style="font-size: 1.6rem; font-weight: 800; color: #fff;">
                    {{ $city->name }} Sanayisinde Tercih Edilen Diğer Etiket Türleri
                </h3>
            </div>

            <div class="grid-3">
                @foreach($otherProducts as $other)
                    <div class="card" style="display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <h4 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 8px;">
                                <a href="{{ route('regional.service', ['serviceSlug' => $other->slug, 'citySlug' => $city->slug]) }}">
                                    {{ $city->name }} {{ $other->title }}
                                </a>
                            </h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 14px;">
                                {{ \Illuminate\Support\Str::limit($other->short_description, 95) }}
                            </p>
                        </div>
                        <a href="{{ route('regional.service', ['serviceSlug' => $other->slug, 'citySlug' => $city->slug]) }}" style="font-size: 0.88rem; color: var(--primary-light); font-weight: 600; display: inline-flex; align-items: center; gap: 4px;">
                            İncele & Fiyat Al &rarr;
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <!-- Regional Cross-linking: Same Product in Other Cities of the Region -->
    @if(isset($otherCities) && $otherCities->count() > 0)
        <section style="margin-bottom: 48px; border-top: 1px solid var(--border-color); padding-top: 40px;">
            <h4 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 16px; color: var(--text-muted);">
                {{ $city->region }} Bölgesindeki Diğer İllerde {{ $product->title }}:
            </h4>
            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                @foreach($otherCities as $otherCity)
                    <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $otherCity->slug]) }}" 
                       style="background: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-color); padding: 8px 16px; border-radius: 999px; font-size: 0.85rem; color: #cbd5e1;">
                        {{ $otherCity->name }} {{ $product->title }}
                    </a>
                @endforeach
            </div>
        </section>
    @endif
</div>
@endsection
