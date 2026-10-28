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
            [
                'title' => 'Kuşe Etiket Üretimi & Rulo Baskı',
                'slug' => 'kuse-etiket',
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
                'title' => 'Kumaş & Japon Akmaz (Yıkama Talimatı) Etiketi',
                'slug' => 'japon-akmaz-etiket',
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
                'title' => 'Güvenlik & Garanti (Security Void) Etiketi',
                'slug' => 'guvenlik-void-etiket',
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
            [
                'title' => 'Lojistik & Koli Barkod Etiketi',
                'slug' => 'barkod-etiketi',
                'short_description' => 'Depo otomasyonu, palet etiketleme ve koli takibi için standartlara uygun yüksek hızlı rulo barkod etiketleri.',
                'content' => 'Endüstriyel depolama ve lojistik hatları için GS1 ve SSCC standartlarına uygun rulo barkod etiketleri. Otomatik etiket aplikatörlerine ve tüm endüstriyel masaüstü yazıcılara (Zebra, Honeywell, TSC, Godex vb.) tam uyumlu iç kuka (40mm / 76mm) seçenekleri ile üretilir.',
                'images' => [
                    'https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=1200&q=80',
                ],
                'specs' => [
                    'Kuka Çapı' => '40 mm / 76 mm Endüstriyel Kuka',
                    'Standartlar' => 'GS1, EAN-13, QR Code, DataMatrix',
                    'Rulo Sarımı' => 'İçten veya Dıştan Sarım Seçenekleri',
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
