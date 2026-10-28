@extends('layouts.app')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Göksan Etiket - {{ $city->name }} Rulo Etiket Fabrikası",
  "image": "{{ asset('images/logo.png') }}",
  "url": "{{ route('regional.city', ['citySlug' => $city->slug]) }}",
  "telephone": "+90-850-000-0000",
  "priceRange": "$$",
  "areaServed": {
    "@type": "AdministrativeArea",
    "name": "{{ $city->name }}"
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "{{ $city->name }}",
    "addressRegion": "{{ $city->region }}",
    "addressCountry": "TR"
  },
  "description": "{{ $city->name }} ve {{ $city->industrial_zones }} organize sanayi bölgelerine toptan endüstriyel rulo etiket üretimi ve doğrudan sevkiyat."
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
    "name": "Hizmet Bölgeleri",
    "item": "{{ route('regional.index') }}"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "{{ $city->name }} Etiket Fabrikası",
    "item": "{{ route('regional.city', ['citySlug' => $city->slug]) }}"
  }]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "{{ $city->name }} içine etiket siparişi teslimat süresi nedir?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "{{ $city->name }} ve bağlı organize sanayi bölgelerine üretim sonrası sevkiyat süremiz ortalama {{ $city->delivery_time }}dir. Acil siparişlerde özel kurye veya ekspres kargo alternatifleri sunulmaktadır."
      }
    },
    {
      "@type": "Question",
      "name": "{{ $city->name }} organize sanayi bölgelerine toptan sevkiyat yapıyor musunuz?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Evet, {{ $city->industrial_zones }} başta olmak üzere {{ $city->name }} genelindeki tüm fabrikalara anlaşmalı lojistik filomuz ile kapıya teslim rulo etiket sevkiyatı yapıyoruz."
      }
    },
    {
      "@type": "Question",
      "name": "Minimum sipariş adedi ve özel bıçak kesimi var mı?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standart ve özel ölçülerde 1.000 adetten başlayan deneme baskıları ve milyonluk yüksek adetli endüstriyel rulo baskı kapasitemiz bulunmaktadır. 300+ hazır bıçak kalıbımız mevcuttur."
      }
    }
  ]
}
</script>
@endpush

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav class="breadcrumb-nav" style="margin-top: 24px;">
        <a href="{{ url('/') }}">Ana Sayfa</a>
        <span>/</span>
        <a href="{{ route('regional.index') }}">Hizmet Bölgelerimiz</a>
        <span>/</span>
        <span style="color: var(--primary-light);">{{ $city->name }} Etiket Fabrikası</span>
    </nav>

    <!-- City Hero -->
    <section class="hero" style="padding-top: 20px;">
        <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 16px;">
            <div class="hero-badge" style="margin-bottom: 0;">
                <span>Plaka: {{ $city->formatted_plate }}</span>
                <span>•</span>
                <span>{{ $city->region }} Bölgesi</span>
            </div>
            <div style="background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); padding: 5px 12px; border-radius: 999px; font-size: 0.85rem; font-weight: 600;">
                ⚡ Hızlı Sevkiyat: {{ $city->delivery_time }}
            </div>
        </div>

        <h1>{{ $city->name }} Etiket Fabrikası & Toptan Rulo Baskı Çözümleri</h1>
        <p>
            {{ $city->name }} ilimiz ve çevresindeki sanayi tesisleri, gıda, tekstil, kimya, lojistik ve üretim fabrikaları için yüksek kaliteli rulo etiket üretimi yapıyoruz. Aracı komisyonları olmadan, doğrudan üreticiden en rekabetçi toptan fiyatlarla sipariş verin.
        </p>

        <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 48px;">
            <a href="https://wa.me/905300000000?text={{ urlencode($city->name . ' iline rulo etiket fiyat teklifi almak istiyorum.') }}" target="_blank" class="btn btn-whatsapp" style="padding: 14px 28px; font-size: 1rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                {{ $city->name }} İçin WhatsApp Fiyatı Al
            </a>
            <a href="tel:+908500000000" class="btn btn-primary" style="padding: 14px 28px; font-size: 1rem;">
                Fabrika Satış Temsilcisini Ara
            </a>
        </div>
    </section>

    <!-- Industrial Zones Banner for this City -->
    <div class="card" style="margin-bottom: 56px; background: linear-gradient(135deg, rgba(2, 132, 199, 0.15), rgba(19, 27, 46, 0.9)); border-color: rgba(56, 189, 248, 0.3);">
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 24px;">
            <div style="max-width: 750px;">
                <div style="color: var(--primary-light); font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px;">
                    🏭 {{ $city->name }} Organize Sanayi & Üretim Merkezleri Kapsamı
                </div>
                <h3 style="font-size: 1.45rem; font-weight: 800; color: #fff; margin-bottom: 10px;">
                    {{ $city->name }} Bölgesine Doğrudan Lojistik Desteği
                </h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">
                    Aşağıdaki sanayi ve ticaret merkezlerinde faaliyet gösteren firmalara düzenli sevkiyat gerçekleştirmekteyiz:
                    <br>
                    <strong style="color: #f1f5f9; display: inline-block; margin-top: 8px;">
                        {{ $city->industrial_zones }}
                    </strong>
                </p>
            </div>
            <div>
                <div style="background: rgba(0,0,0,0.3); border: 1px solid var(--border-color); padding: 18px 24px; border-radius: var(--radius-md); text-align: center;">
                    <span style="color: var(--text-muted); font-size: 0.85rem; display: block;">Teslimat Hızı</span>
                    <strong style="font-size: 1.5rem; color: var(--accent); font-family: 'Space Grotesk', sans-serif;">{{ $city->delivery_time }}</strong>
                    <span style="color: var(--success); font-size: 0.82rem; display: block; margin-top: 4px;">✔ Fabrikadan Sevk</span>
                </div>
            </div>
        </div>
    </div>

    <!-- City Specific Products Grid -->
    <section style="margin-bottom: 64px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 32px;">
            <div>
                <div class="hero-badge">Rulo Etiket Çeşitleri</div>
                <h2 style="font-size: 1.85rem; font-weight: 800; color: #fff;">
                    {{ $city->name }} İçin Ürettiğimiz Rulo Etiketler
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-top: 6px;">
                    İhtiyacınıza uygun etiket türünü seçerek teknik detayları ve {{ $city->name }} sanayi teslimat koşullarını inceleyin.
                </p>
            </div>
        </div>

        <div class="grid-3">
            @foreach($products as $product)
                <div class="card" style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="width: 100%; height: 180px; border-radius: var(--radius-md); overflow: hidden; margin-bottom: 18px; background: #1e293b;">
                            @if(!empty($product->images) && count($product->images) > 0)
                                <img src="{{ $product->images[0] }}" alt="{{ $city->name }} {{ $product->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: var(--text-dim);">Göksan Etiket</div>
                            @endif
                        </div>

                        <div style="font-size: 0.82rem; color: var(--primary-light); font-weight: 600; text-transform: uppercase; margin-bottom: 6px;">
                            {{ $city->name }} İmalatı
                        </div>

                        <h3 style="font-size: 1.25rem; font-weight: 700; color: #fff; margin-bottom: 10px;">
                            <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $city->slug]) }}">
                                {{ $city->name }} {{ $product->title }}
                            </a>
                        </h3>

                        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px;">
                            {{ \Illuminate\Support\Str::limit($product->short_description, 120) }}
                        </p>
                    </div>

                    <div style="border-top: 1px solid var(--border-color); padding-top: 16px;">
                        <a href="{{ route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $city->slug]) }}" class="btn btn-primary" style="width: 100%;">
                            {{ $product->title }} Detayları & Teklif
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Why Choose Göksan Etiket in this City -->
    <section class="card" style="margin-bottom: 64px; padding: 40px 32px;">
        <h2 style="font-size: 1.7rem; font-weight: 800; margin-bottom: 24px; text-align: center;">
            Neden {{ $city->name }} Sanayisi Göksan Etiket'i Tercih Ediyor?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 28px;">
            <div style="display: flex; gap: 16px;">
                <div style="font-size: 1.8rem; color: var(--primary-light);">💎</div>
                <div>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 6px;">Yüksek Çözünürlüklü Flekso & Dijital</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted);">8 renge kadar UV flekso ve yüksek tirajlı rulo etiket baskı makinelerimizle sıfır hata toleransı.</p>
                </div>
            </div>

            <div style="display: flex; gap: 16px;">
                <div style="font-size: 1.8rem; color: var(--accent);">📦</div>
                <div>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 6px;">{{ $city->delivery_time }} Hızlı Sevkiyat</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted);">Üretim hattınızın durmaması için {{ $city->name }} ve organize sanayi bölgelerine express lojistik desteği.</p>
                </div>
            </div>

            <div style="display: flex; gap: 16px;">
                <div style="font-size: 1.8rem; color: var(--success);">🏭</div>
                <div>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 6px;">Doğrudan Üretici Fiyatı</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted);">Toptan hammadde ithalatımız ve yüksek üretim kapasitemiz sayesinde en uygun fabrika fiyat garantisi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section style="margin-bottom: 64px;">
        <div style="text-align: center; margin-bottom: 36px;">
            <div class="hero-badge">Sıkça Sorulan Sorular</div>
            <h2 style="font-size: 1.85rem; font-weight: 800;">{{ $city->name }} Rulo Etiket Siparişleri Hakkında</h2>
        </div>

        <div style="display: flex; flex-direction: column; gap: 16px; max-width: 860px; margin: 0 auto;">
            <div class="card" style="padding: 20px 24px;">
                <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">{{ $city->name }} içine etiket siparişi teslimat süresi nedir?</h4>
                <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
                    {{ $city->name }} ve bağlı organize sanayi bölgelerine üretim sonrası sevkiyat süremiz ortalama <strong>{{ $city->delivery_time }}</strong>dir. Acil siparişlerde anlaşmalı ambar ve özel kurye alternatifleri mevcuttur.
                </p>
            </div>

            <div class="card" style="padding: 20px 24px;">
                <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">{{ $city->industrial_zones }} bölgelerine toplu sevkiyat var mı?</h4>
                <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
                    Evet, {{ $city->name }} içerisindeki tüm OSB ve sanayi sitelerine paletli veya koli bazlı düzenli rulo sevkiyatı yapmaktayız.
                </p>
            </div>

            <div class="card" style="padding: 20px 24px;">
                <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Numune veya teknik destek alabilir miyim?</h4>
                <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6;">
                    Ürünlerinizi test etmeniz için {{ $city->name }} adresinize ücretsiz numune etiket kiti ve teknik yapışkan tavsiyesi gönderiyoruz.
                </p>
            </div>
        </div>
    </section>

    <!-- Regional Cross-linking (Neighboring Cities in the same region) -->
    @if(isset($regionalCities) && $regionalCities->count() > 0)
        <section style="margin-bottom: 48px; border-top: 1px solid var(--border-color); padding-top: 40px;">
            <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 20px; color: var(--text-muted);">
                {{ $city->region }} Bölgesindeki Diğer Etiket Fabrikası Hizmet Ağlarımız:
            </h3>
            <div style="display: flex; flex-wrap: wrap; gap: 12px;">
                @foreach($regionalCities as $neighbor)
                    <a href="{{ route('regional.city', ['citySlug' => $neighbor->slug]) }}" 
                       style="background: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-color); padding: 8px 16px; border-radius: 999px; font-size: 0.88rem; color: #cbd5e1;">
                        {{ $neighbor->name }} Etiket Fabrikası
                    </a>
                @endforeach
            </div>
        </section>
    @endif
</div>
@endsection
