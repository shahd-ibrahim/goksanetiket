<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? 'Göksan Etiket | Endüstriyel Rulo Etiket Fabrikası' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Türkiye genelinde 81 il ve organize sanayi bölgelerine doğrudan toptan rulo etiket üretimi ve hızlı sevkiyat.' }}">
    <link rel="canonical" href="{{ $seo['canonical'] ?? url()->current() }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $seo['canonical'] ?? url()->current() }}">
    <meta property="og:title" content="{{ $seo['title'] ?? 'Göksan Etiket' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:image" content="{{ asset('images/og-goksan-etiket.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            900: '#0c4a6e',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Schema.org JSON-LD -->
    @stack('schema')

    <style>
        :root {
            --bg-dark: #0a0f1d;
            --bg-card: #131b2e;
            --bg-card-hover: #1b2640;
            --border-color: rgba(255, 255, 255, 0.08);
            --primary: #0284c7;
            --primary-light: #38bdf8;
            --primary-glow: rgba(56, 189, 248, 0.25);
            --accent: #f59e0b;
            --accent-glow: rgba(245, 158, 11, 0.2);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --text-dim: #64748b;
            --success: #10b981;
            --radius-lg: 16px;
            --radius-md: 10px;
            --radius-sm: 6px;
            --transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        a {
            color: inherit;
            text-decoration: none;
            transition: var(--transition);
        }

        .container {
            width: 100%;
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Ambient Glow Background */
        .ambient-glow {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 1000px;
            height: 450px;
            background: radial-gradient(circle, rgba(2, 132, 199, 0.12) 0%, rgba(2, 132, 199, 0) 70%);
            pointer-events: none;
            z-index: 0;
        }

        /* Header */
        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(10, 15, 29, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border-color);
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 76px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.35rem;
            letter-spacing: -0.5px;
        }

        .logo-badge {
            background: linear-gradient(135deg, #0284c7, #2563eb);
            color: #fff;
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 0.95rem;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            box-shadow: 0 0 20px var(--primary-glow);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-muted);
            font-size: 0.95rem;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #fff;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 22px;
            border-radius: var(--radius-sm);
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            border: none;
            transition: var(--transition);
        }

        .btn-primary {
            background: linear-gradient(135deg, #0284c7, #0369a1);
            color: #fff;
            box-shadow: 0 4px 18px rgba(2, 132, 199, 0.35);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0369a1, #075985);
            transform: translateY(-2px);
            box-shadow: 0 6px 22px rgba(2, 132, 199, 0.45);
        }

        .btn-whatsapp {
            background: #25D366;
            color: #fff;
            font-weight: 700;
        }

        .btn-whatsapp:hover {
            background: #20ba59;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.35);
        }

        /* Hero */
        .hero {
            position: relative;
            z-index: 1;
            padding: 64px 0 48px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--primary-light);
            border: 1px solid rgba(56, 189, 248, 0.25);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 18px;
            background: linear-gradient(180deg, #ffffff 0%, #cbd5e1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.15rem;
            color: var(--text-muted);
            max-width: 780px;
            margin-bottom: 32px;
        }

        /* Card Styles */
        .card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 24px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            background: var(--bg-card-hover);
            border-color: rgba(56, 189, 248, 0.3);
            transform: translateY(-4px);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.35);
        }

        /* Grid */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }

        .grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 20px;
        }

        /* Breadcrumbs */
        .breadcrumb-nav {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.88rem;
            color: var(--text-dim);
            margin-bottom: 24px;
        }

        .breadcrumb-nav a {
            color: var(--text-muted);
        }

        .breadcrumb-nav a:hover {
            color: var(--primary-light);
        }

        /* Floating CTA */
        .floating-cta {
            position: fixed;
            bottom: 28px;
            right: 28px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 999;
        }

        .fab {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 22px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.95rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            transition: var(--transition);
        }

        .fab:hover {
            transform: translateY(-3px) scale(1.02);
        }

        /* Footer */
        footer {
            margin-top: 96px;
            background: #070a14;
            border-top: 1px solid var(--border-color);
            padding: 64px 0 32px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 48px;
            margin-bottom: 48px;
        }

        .footer-col h4 {
            font-size: 1.05rem;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            color: var(--text-muted);
            font-size: 0.92rem;
        }

        .footer-links a:hover {
            color: var(--primary-light);
        }

        .footer-bottom {
            border-top: 1px solid var(--border-color);
            padding-top: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--text-dim);
            font-size: 0.88rem;
        }

        @media (max-width: 900px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="ambient-glow"></div>

    <header>
        <div class="container nav-inner">
            <a href="{{ route('regional.index') }}" class="logo">
                <span class="logo-badge">GÖKSAN</span>
                <span>ETİKET FABRİKASI</span>
            </a>
            
            <ul class="nav-links">
                <li><a href="{{ route('regional.index') }}">Tüm Şehirler (81 İl)</a></li>
                <li><a href="#urunler">Ürün Çeşitlerimiz</a></li>
                <li><a href="#hakkimizda">Fabrikamız</a></li>
                <li><a href="#iletisim">İletişim & Teklif</a></li>
            </ul>

            <div style="display: flex; gap: 12px; align-items: center;">
                <a href="https://wa.me/905300000000?text=Merhaba,%20rulo%20etiket%20teklifi%20almak%20istiyorum." target="_blank" class="btn btn-whatsapp">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                    WhatsApp Teklif
                </a>
                <a href="tel:+908500000000" class="btn btn-primary">
                    0850 000 00 00
                </a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Floating Action Buttons -->
    <div class="floating-cta">
        <a href="https://wa.me/905300000000?text=Merhaba,%20etiket%20fiyat%20teklifi%20almak%20istiyorum." target="_blank" class="fab btn-whatsapp">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
            Hızlı Fiyat Teklifi
        </a>
    </div>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 16px;">
                        <span class="logo-badge">GÖKSAN</span>
                        <span>ETİKET</span>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.7;">
                        Türkiye'nin lider endüstriyel rulo etiket üreticisi. 81 ilin tamamındaki organize sanayi bölgelerine (OSB), gıda, kimya, otomotiv, tekstil ve lojistik sektörlerine doğrudan fabrikadan toptan sevkiyat.
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Popüler Ürünler</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('regional.service', ['serviceSlug' => 'kuse-etiket', 'citySlug' => 'istanbul']) }}">Kuşe Rulo Etiket</a></li>
                        <li><a href="{{ route('regional.service', ['serviceSlug' => 'termal-etiket', 'citySlug' => 'istanbul']) }}">Termal Barkod Etiketi</a></li>
                        <li><a href="{{ route('regional.service', ['serviceSlug' => 'pp-opak-etiket', 'citySlug' => 'istanbul']) }}">PP Opak Plastik Etiket</a></li>
                        <li><a href="{{ route('regional.service', ['serviceSlug' => 'silver-mat-etiket', 'citySlug' => 'istanbul']) }}">Silver Mat Demirbaş Etiketi</a></li>
                        <li><a href="{{ route('regional.service', ['serviceSlug' => 'japon-akmaz-etiket', 'citySlug' => 'istanbul']) }}">Japon Akmaz Yıkama Etiketi</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Bölgelerimiz</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('regional.city', ['citySlug' => 'istanbul']) }}">İstanbul Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'bursa']) }}">Bursa Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'gaziantep']) }}">Gaziantep Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'izmir']) }}">İzmir Etiket Fabrikası</a></li>
                        <li><a href="{{ route('regional.city', ['citySlug' => 'ankara']) }}">Ankara Etiket Fabrikası</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Fabrika & İletişim</h4>
                    <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 12px;">
                        📍 <strong>Merkez Üretim Tesisi:</strong> Başpınar OSB 3. Bölge, Gaziantep / Türkiye
                    </p>
                    <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 8px;">
                        📞 <strong>Santral:</strong> 0850 000 00 00
                    </p>
                    <p style="color: var(--text-muted); font-size: 0.92rem;">
                        ✉️ <strong>E-Posta:</strong> info@goksanetiket.com
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Göksan Etiket San. ve Tic. Ltd. Şti. Tüm Hakları Saklıdır.</p>
                <p>Türkiye Geneli 81 İl Programmatic SEO Altyapısı</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
