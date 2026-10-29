@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 space-y-16">
    <!-- Breadcrumbs -->
    <nav class="flex items-center space-x-2 text-xs text-slate-500">
        <a href="{{ route('home') }}" class="hover:text-orange-600">Ana Sayfa</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">Hizmet Verilen Sektörler</span>
    </nav>

    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto space-y-4">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
            ENDÜSTRİYEL UZMANLIK ALANLARI
        </span>
        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
            Sektörel Etiket & Ambalaj Çözümleri
        </h1>
        <p class="text-base text-slate-600 leading-relaxed">
            Her sektörün saklama koşulları, yasal yönetmelikleri ve yüzey yapışma gereksinimleri farklıdır. Göksan Etiket, sektörünüze özel hammadde ve baskı şartnameleri geliştirir.
        </p>
    </div>

    <!-- Sectors 6-Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- 1. Gıda & İçecek -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl">
                🍲
            </div>
            <h3 class="text-lg font-bold text-slate-900">Gıda & İçecek Sektörü</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Gıda ile temasa uygun sertifikalı hammaddeler, derin dondurucu (-40°C) dayanımlı DeepFreeze tutkallar, zeytinyağı ve soslar için yağ tutmayan kuşe ve PP etiketler.
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>Önerilen:</strong> Lamine Termal, Kuşe Rulo, Şeffaf PP, Altın Varak
            </div>
        </div>

        <!-- 2. Kozmetik & Kişisel Bakım -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="w-12 h-12 rounded-2xl bg-pink-50 text-pink-600 flex items-center justify-center text-2xl">
                💄
            </div>
            <h3 class="text-lg font-bold text-slate-900">Kozmetik & Kişisel Bakım</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Şampuan, krem, losyon şişelerinde sıkılabilirlik ve su buharı direnci sağlayan ultra esnek PE ve şeffaf polipropilen no-label look etiketler.
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>Önerilen:</strong> Şeffaf PP, Soğuk Varak Yaldız, Emboss Lak, Karton Kutu
            </div>
        </div>

        <!-- 3. Tekstil & Konfeksiyon -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-2xl">
                🧵
            </div>
            <h3 class="text-lg font-bold text-slate-900">Tekstil & Konfeksiyon</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                90°C yıkamaya, enzim ve taş yıkamalara dayanıklı Japon akmaz kumaş şeritler, jakarlı tafta ve saten yaka armaları, özel ipli karton sallama etiketleri.
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>Önerilen:</strong> Ağır Yıkama Japon Akmaz, Jakarlı Dokuma, Hang Tag
            </div>
        </div>

        <!-- 4. Lojistik & Kargo Depolama -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl">
                🚚
            </div>
            <h3 class="text-lg font-bold text-slate-900">Lojistik & Kargo Depolama</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                E-ticaret paketleme, kargo takip barkodları ve palet etiketlemesi için yüksek hızlı yazıcılarda takılmadan çalışan eko/lamine termal rulo etiketler.
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>Önerilen:</strong> Eko Termal 100x150 mm, Lamine Termal, Koli Etiketi
            </div>
        </div>

        <!-- 5. Kimya & Madeni Yağ Sanayi -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl">
                🧪
            </div>
            <h3 class="text-lg font-bold text-slate-900">Kimya & Endüstriyel Temizlik</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Çamaşır suyu, asit, solvent ve motor yağı bidonları için çözücülere dirençli PP Opak hammadde ve aşınmaya karşı koruyucu laminasyon selefonu.
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>Önerilen:</strong> PP Opak, Selefonlu Kuşe, Güvenlik Mühür Bandı
            </div>
        </div>

        <!-- 6. Otomotiv & Elektronik Sanayi -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-xs hover:shadow-md transition-all space-y-4">
            <div class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-700 flex items-center justify-center text-2xl">
                🚗
            </div>
            <h3 class="text-lg font-bold text-slate-900">Otomotiv & Elektronik</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
                Motor bölümü yüksek sıcaklıklarına (+150°C) dayanıklı Silver Mat polyester demirbaş etiketleri ve açıldığında iz bırakan garanti VOID mühürleri.
            </p>
            <div class="text-[11px] text-slate-500 bg-slate-50 p-2.5 rounded-xl border border-slate-200">
                <strong>Önerilen:</strong> Silver Mat Demirbaş, Garanti VOID, Kırılgan Etiket
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="text-center pt-4">
        <a href="{{ route('corporate.rfq') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-orange-600 hover:bg-orange-500 text-white font-extrabold text-xs shadow-md">
            <span>Sektörünüz İçin Numune & Teklif İsteyin</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
    </div>
</div>
@endsection
