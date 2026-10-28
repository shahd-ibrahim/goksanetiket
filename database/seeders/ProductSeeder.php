<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // ==========================================
            // 1. RULO ETİKET & BARKOD ETİKETLERİ
            // ==========================================
            [
                'title' => 'Kuşe Etiket Üretimi & Rulo Baskı',
                'slug' => 'kuse-etiket',
                'category' => 'rulo-barkod',
                'short_description' => 'Yüksek baskı kalitesi, pürüzsüz yüzey ve ekonomik maliyet ile gıda, lojistik ve perakende sektörleri için ideal rulo kuşe etiket çözümleri.',
                'content' => 'Göksan Etiket olarak, en modern flekso ve dijital baskı teknolojileri ile rulo kuşe etiket imalatı gerçekleştiriyoruz. Kuşe etiketler, yarı parlak veya mat yüzey seçenekleri, güçlü akrilik, hotmelt veya non-perm yapışkan alternatifleri ile endüstriyel üretim hatlarınızda sorunsuz akar. Barkod yazıcılarla %100 uyumludur ve ribbon (wax veya wax-resin) ile net baskı imkanı sunar.',
                'images' => [
                    'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1607344645866-009c320b5ab8?auto=format&fit=crop&w=800&q=80',
                ],
                'specs' => [
                    'Kağıt Türü' => '80 gr/m² Yarı Parlak veya Mat Kuşe',
                    'Yapışkan Seçenekleri' => 'Akrilik (Standart), Hotmelt (Güçlü), Deep Freeze (Donuk Gıda)',
                    'Baskı Teknolojisi' => 'Flekso UV Baskı (8 Renk) & Yüksek Çözünürlüklü Dijital',
                    'Uyumlu Ribbon' => 'Wax ve Wax-Resin Ribbon',
                    'Minimum Sipariş' => '1.000 Adet / İsteğe Göre Özel Kesim',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Termal Etiket (Eko & Lamine Termal)',
                'slug' => 'termal-etiket',
                'category' => 'rulo-barkod',
                'short_description' => 'Ribbon gerektirmeyen direkt termal baskı imkanı sunan, kargo, lojistik, tartı ve süpermarket barkod etiketleri.',
                'content' => 'Göksan Etiket güvencesiyle üretilen direkt termal etiketler, ısıya duyarlı yüzeyleri sayesinde ribbonsuz hızlı ve ekonomik barkodlama sağlar. Eko Termal (kısa ömürlü ve kuru ortamlar için) ve Top/Lamine Termal (nem, yağ, ışık ve sürtünmeye karşı koruyucu katmanlı) seçenekleriyle imal edilir. Hızlı tüketim ve sevkiyat operasyonlarınız için optimum çözümdür.',
                'images' => [
                    'https://images.unsplash.com/photo-1616401784845-180882ba9ba8?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Tür' => 'Eko Termal & Top (Lamine) Termal',
                    'Ribbon İhtiyacı' => 'Ribbonsuz Direkt Termal Baskı',
                    'Kullanım Alanı' => 'Kargo, Market Tartı, Soğuk Hava Depoları, Lojistik',
                    'Ölçü Seçenekleri' => '100x150 mm, 80x40 mm, 40x20 mm ve 200+ Özel Bıçak',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'PP Opak (Polipropilen) Plastik Etiket',
                'slug' => 'pp-opak-etiket',
                'category' => 'rulo-barkod',
                'short_description' => 'Suya, neme, kimyasallara ve yırtılmaya karşı üstün direnç gösteren sert plastik bazlı endüstriyel etiket.',
                'content' => 'PP Opak (Polipropilen) etiketler, plastik bazlı yapısı sayesinde yırtılmaz, sudan ve dış hava şartlarından etkilenmez. Kimya, kozmetik, temizlik ürünleri, otomotiv yedek parça ve dış mekan depolama alanlarında mükemmel dayanıklılık gösterir. Resin ribbon ile uygulanan baskılar solmaz ve silinmez.',
                'images' => [
                    'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Malzeme' => '60 Mikron Beyaz Polipropilen (Plastik)',
                    'Dayanıklılık' => 'Su, Nem, Yağ, Asit ve Yırtılmaya Karşı %100 Direnç',
                    'Uyumlu Ribbon' => 'Resin ve D110 Resin Ribbon',
                    'Yüzey Kalitesi' => 'Parlak veya Mat Beyaz Plastik',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Silver Mat (Metalize Demirbaş) Etiketi',
                'slug' => 'silver-mat-etiket',
                'category' => 'rulo-barkod',
                'short_description' => 'Elektronik, makine sanayi ve demirbaş takibi için yüksek ısıya ve zorlu çevre koşullarına dayanıklı metalize etiket.',
                'content' => 'Silver Mat etiketler, alüminyum görünümlü gri mat yüzeyi ve polyester (PET) yapısı ile sanayi ve ağır endüstri sektörlerinin 1 numaralı tercihidir. 150°C ve üzeri sıcaklıklara, tiner, alkol, solvent ve sürtünmeye karşı tam direnç gösterir. Demirbaş takibi, elektrik pano etiketleri ve motor seri numarası etiketlemelerinde kullanılır.',
                'images' => [
                    'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Hammadde' => 'Mat Gri Metalize Polyester (PET)',
                    'Sıcaklık Direnci' => '-40°C ile +150°C arası',
                    'Baskı Uyumu' => 'Tam Resin Ribbon ile silinmez baskı',
                    'Kullanım' => 'Makine İmalatı, Demirbaş, Elektronik Devre, Otomotiv',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Şeffaf (Transparan) PP Etiket',
                'slug' => 'seffaf-etiket',
                'category' => 'rulo-barkod',
                'short_description' => 'Arka planı gösteren "no-label look" efekti ile kozmetik, cam şişe ve lüks ambalajlar için şeffaf plastik etiket.',
                'content' => 'Şeffaf Polipropilen etiketler, yapıştırıldığı yüzeyin zeminini göstererek ürün ambalajına entegre şık bir tasarım sunar. Kozmetik ambalajları, cam kavanozlar, premium içecek ve şampuan şişelerinde geniş kullanım alanına sahiptir. Beyaz baskı (White Ink) destekli flekso makinelerimizde yüksek kontrastlı baskılar üretilir.',
                'images' => [
                    'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Görünüm' => 'Kristal Şeffaf / Ultra Clear',
                    'Baskı Teknolojisi' => 'Selefon Kaplama, Beyaz Mürekkep Altı, Varlık Sensörü Baskılı',
                    'Su Direnci' => 'Banyoda veya ıslak ortamda kalkmaz',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Güvenlik & Garanti (Security Void) Etiketi',
                'slug' => 'guvenlik-void-etiket',
                'category' => 'rulo-barkod',
                'short_description' => 'Söküldüğünde zeminde "VOID" veya damalı iz bırakan, garanti ihlallerini önleyen kurcalama emniyet etiketi.',
                'content' => 'Elektronik cihazlar, garanti kapsamındaki ürünler ve gizlilik gerektiren koli/zarf mühürlemeleri için tasarlanan Güvenlik VOID etiketleri, yapıştırıldığı yüzeyden çıkarılmaya çalışıldığında kendini imha eder veya yüzeyde belirgin VOID yazısı bırakır. Tekrar yapıştırılamaz.',
                'images' => [
                    'https://images.unsplash.com/photo-1563770660941-20978e870e26?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Özellik' => 'Açıldığında İz Bırakan (Tam / Kısmi Transfer)',
                    'Renk' => 'Gümüş Mat veya Beyaz VOID',
                    'Güvenlik Seviyesi' => 'Yüksek Güvenlikli Seri Numaralandırma & Barkod',
                ],
                'is_active' => true,
            ],

            // ==========================================
            // 2. TEKSTİL & DOKUMA ETİKETLERİ
            // ==========================================
            [
                'title' => 'Dokuma Etiket (Arma & Yaka Etiketi)',
                'slug' => 'dokuma-etiket',
                'category' => 'tekstil-dokuma',
                'short_description' => 'Tekstil, hazır giyim ve ayakkabı sektörü için jakarlı dokuma tezgahlarında yüksek çözünürlüklü marka ve ense etiketleri.',
                'content' => 'Göksan Etiket olarak tekstil başkenti Gaziantep ve tüm Türkiye için yüksek çözünürlüklü dokuma etiket üretimi yapıyoruz. Saten, tafta ve şantuk zemin seçenekleri, ultrasonik kenar kesimi ve katlama (uç katlama, kelebek katlama, orta katlama) varyasyonları ile cildi tahriş etmeyen yumuşak dokulu armalar üretiyoruz.',
                'images' => [
                    'https://images.unsplash.com/photo-1598032895397-b9472444bf93?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Dokuma Kalitesi' => 'Yüksek Çözünürlüklü Tafta / Saten Dokuma',
                    'Katlama Şekilleri' => 'Düz Kesim, Kelebek Katlama, Uç Katlama, Lazer Kesim',
                    'Kenar İşlemi' => 'Cilt Tahriş Etmeyen Ultrasonik Kesim',
                    'İplik Türü' => 'OEKO-TEX Sertifikalı Polyester & Sim İplik',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Kumaş & Japon Akmaz (Yıkama Talimatı) Etiketi',
                'slug' => 'japon-akmaz-etiket',
                'category' => 'tekstil-dokuma',
                'short_description' => 'Tekstil, konfeksiyon ve hazır giyim sektörü için 90°C kaynatmaya ve ağır yıkamaya dayanıklı kumaş etiketleri.',
                'content' => 'Tekstil imalatçıları ve hazır giyim fabrikaları için üretilen Japon Akmaz (kumaş bakım ve yıkama talimatı etiketi), kuru temizleme, ağır taş yıkama ve yüksek sıcaklıklarda solmayan özel apreli kumaş şeritlerden üretilir. Ağır yıkama ribonları ile baskı alınır ve dikişe uygun yumuşak kenarlara sahiptir.',
                'images' => [
                    'https://images.unsplash.com/photo-1603252109303-2751441dd157?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Kumaş Cinsi' => 'Hafif / Ağır Yıkama Japon Akmaz, Saten Kumaş',
                    'Yıkama Dayanımı' => '60°C - 90°C Yıkama ve Kuru Temizleme',
                    'Uyumlu Ribbon' => 'D110 Kumaş Yıkama Ribonu',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Karton Sallama Etiketi (Fiyat & Marka Kartı)',
                'slug' => 'karton-sallama-etiket',
                'category' => 'tekstil-dokuma',
                'short_description' => 'Giyim ve perakende ürünlerinde marka prestijini artıran özel kesimli, varak yaldızlı ve kabartmalı karton sallama etiketleri.',
                'content' => 'Karton sallama etiketleri (Hang Tag), hazır giyim ürünlerinde tüketici ile ilk temas kuran en etkili pazarlama unsurlarından biridir. 350 gr - 700 gr Amerikan bristol, kraft kağıt veya sıvamalı mukavva seçenekleri ile üretilir. Mat selefon, kısmi lak, altın/gümüş varak yaldız, kuşgözü delik ve özel ipli montaj seçenekleri mevcuttur.',
                'images' => [
                    'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Kağıt Cinsi' => '350 gr Bristol, Kraft, Kuşe veya Mukavva Sıvama',
                    'Baskı & Efektler' => 'CMYK Ofset, Varak Yaldız, Kabartma Lak, Gofre',
                    'Aksesuarlar' => 'Metal Kuşgözü, Mumlu İp, Klips ve Özel Bıçak Kesim',
                ],
                'is_active' => true,
            ],

            // ==========================================
            // 3. MATBAA & AMBALAJ ÇÖZÜMLERİ
            // ==========================================
            [
                'title' => 'Karton Kutu Ambalaj & Özel Ürün Kutuları',
                'slug' => 'kutu-ambalaj',
                'category' => 'matbaa-ambalaj',
                'short_description' => 'Gıda, kozmetik, tekstil ve endüstriyel ürünler için özel tasarım, dayanıklı karton kutu ambalaj imalatı.',
                'content' => 'Göksan Etiket & Ambalaj tesislerimizde kilitli kutu, dip kilitli kutu, pencereli kutu ve sıvama sert hediye kutusu imalatı yapılmaktadır. Ürününüzün raflarda dikkat çekmesini sağlayan özel laklı, metalize selefonlu ve yüksek mukavemetli oluklu karton ambalaj çözümleri sunuyoruz.',
                'images' => [
                    'https://images.unsplash.com/photo-1530587191325-3db32d826c18?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Malzeme' => 'Amerikan Bristol, Kroma Karton, E/B Dalga Oluklu',
                    'Kutu Modelleri' => 'Ters Kilit, Dip Kilit, Çekmeceli, Manyetik Kapak',
                    'Baskı Türü' => 'Çok Renkli Ofset Baskı & Koruyucu Dispersiyon Lak',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Özel Kesim Endüstriyel Etiketler',
                'slug' => 'ozel-kesim-etiket',
                'category' => 'matbaa-ambalaj',
                'short_description' => 'Makine, otomotiv, elektrik ve kimya sanayi için her geometrik şekilde hassas lazer ve kalıp kesimli etiketler.',
                'content' => 'Standart ölçülerin dışındaki ürünleriniz için CAD destekli bıçak kalıpları veya dijital lazer kesim sistemleri ile her şekilde özel kesim etiketler üretiyoruz. Oval, yuvarlak, yıldız veya karmaşık logoların sınırlarına tam uyan hassas kesim.',
                'images' => [
                    'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Kesim Hassasiyeti' => '±0.1 mm Toleranslı Döner Bıçak & Dijital Lazer',
                    'Şekil Alternatifi' => 'Sınırsız Geometrik ve Logo Hatlı Kesim',
                    'Malzeme Seçenekleri' => 'Kuşe, Termal, PP Opak, PVC, Metalize',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Endüstriyel Koli ve Palet Ambalajı',
                'slug' => 'endustriyel-ambalaj',
                'category' => 'matbaa-ambalaj',
                'short_description' => 'Fabrika içi depolama, sevkiyat güvenliği ve paletleme için ağır hizmet tipi koli ve koruyucu ambalaj malzemeleri.',
                'content' => 'Toptan üretim hatlarınızdan çıkan ürünlerin güvenle sevk edilmesi için baskılı koli, palet üstü shrink film, çemberleme ve uyarı etiketleri entegre bir ambalaj paketi halinde sunulmaktadır.',
                'images' => [
                    'https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Kullanım Alanı' => 'Ağır Sanayi, Fabrika İhracatı, Lojistik Depoları',
                    'Baskı' => 'Flekso Koli Baskısı, Özel Marka Logolu Ambalaj',
                ],
                'is_active' => true,
            ],
        ];

        foreach ($products as $item) {
            Product::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
