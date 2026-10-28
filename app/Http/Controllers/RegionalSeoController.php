<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class RegionalSeoController extends Controller
{
    /**
     * Regional SEO Index page: Lists all 81 cities grouped by geographical region.
     */
    public function index()
    {
        $cacheKey = 'regional_seo_index';

        $data = Cache::remember($cacheKey, now()->addDay(), function () {
            $cities = City::orderBy('plate_code', 'asc')->get();
            $groupedCities = $cities->groupBy('region');
            $products = Product::active()->get();

            // Desired region sorting order
            $regionOrder = [
                'Marmara',
                'Ege',
                'İç Anadolu',
                'Akdeniz',
                'Karadeniz',
                'Güneydoğu Anadolu',
                'Doğu Anadolu',
            ];

            $orderedGroupedCities = collect($regionOrder)->mapWithKeys(function ($region) use ($groupedCities) {
                return [$region => $groupedCities->get($region, collect())];
            });

            return [
                'groupedCities' => $orderedGroupedCities,
                'totalCities' => $cities->count(),
                'products' => $products,
            ];
        });

        $seo = [
            'title' => 'Türkiye Geneli Etiket Fabrikası & Rulo Baskı Çözümleri | Göksan Etiket',
            'description' => '81 ilimizin tüm organize sanayi bölgelerine (OSB) 24-48 saatte doğrudan sevkiyat. Kuşe, termal, PP opak ve endüstriyel rulo etiket imalatçısı Göksan Etiket.',
            'canonical' => route('regional.index'),
        ];

        return view('pages.regional-index', array_merge($data, ['seo' => $seo]));
    }

    /**
     * City Hub landing page: {City} Etiket Fabrikası.
     */
    public function cityHub(string $citySlug)
    {
        $city = City::where('slug', $citySlug)->firstOrFail();

        $cacheKey = "regional_city_{$citySlug}";

        $data = Cache::remember($cacheKey, now()->addDay(), function () use ($city) {
            $products = Product::active()->get();

            // Neighboring or same-region cities for internal SEO linking
            $regionalCities = City::where('region', $city->region)
                ->where('id', '!=', $city->id)
                ->orderBy('name')
                ->take(8)
                ->get();

            return [
                'city' => $city,
                'products' => $products,
                'regionalCities' => $regionalCities,
            ];
        });

        $title = !empty($city->seo_title) 
            ? $city->seo_title 
            : "{$city->name} Etiket Fabrikası - Toptan Rulo & Baskılı Etiket Üretimi | Göksan Etiket";

        $description = !empty($city->seo_description)
            ? $city->seo_description
            : "{$city->name} ve {$city->industrial_zones} için toptan rulo etiket üretimi. {$city->delivery_time} hızlı teslimat garantisi ve fabrika fiyatlarıyla hemen teklif alın.";

        $seo = [
            'title' => $title,
            'description' => $description,
            'canonical' => route('regional.city', ['citySlug' => $city->slug]),
        ];

        return view('pages.regional-city', array_merge($data, ['seo' => $seo]));
    }

    /**
     * Service + City landing page: {Product} {City}.
     */
    public function serviceCity(string $serviceSlug, string $citySlug)
    {
        $product = Product::where('slug', $serviceSlug)->where('is_active', true)->firstOrFail();
        $city = City::where('slug', $citySlug)->firstOrFail();

        $cacheKey = "regional_service_{$serviceSlug}_{$citySlug}";

        $data = Cache::remember($cacheKey, now()->addDay(), function () use ($product, $city) {
            // Other products for cross-selling in this city
            $otherProducts = Product::active()
                ->where('id', '!=', $product->id)
                ->take(6)
                ->get();

            // Same service in other cities of the region
            $otherCities = City::where('region', $city->region)
                ->where('id', '!=', $city->id)
                ->orderBy('name')
                ->take(6)
                ->get();

            return [
                'product' => $product,
                'city' => $city,
                'otherProducts' => $otherProducts,
                'otherCities' => $otherCities,
            ];
        });

        $seo = [
            'title' => "{$city->name} {$product->title} - Fabrika Fiyatları | Göksan Etiket",
            'description' => "{$city->name} ve çevresindeki sanayi kuruluşları için {$product->title} imalatı. {$city->delivery_time} teslimat, yüksek baskı kalitesi ve toptan rulo etiket çözümleri.",
            'canonical' => route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $city->slug]),
        ];

        return view('pages.regional-service', array_merge($data, ['seo' => $seo]));
    }

    /**
     * Dynamic XML Sitemap: Generates valid XML containing static pages,
     * all 81 city hubs, and programmatic product/city landing pages.
     */
    public function sitemap(): Response
    {
        $xml = Cache::remember('sitemap_xml', now()->addDay(), function () {
            $cities = City::orderBy('plate_code', 'asc')->get();
            $products = Product::active()->get();

            $urls = [];
            $now = now()->toAtomString();

            // 1. Static Pages
            $staticRoutes = [
                ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'daily'],
                ['loc' => route('regional.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
                ['loc' => url('/hakkimizda'), 'priority' => '0.7', 'changefreq' => 'monthly'],
                ['loc' => url('/iletisim'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ];

            foreach ($staticRoutes as $page) {
                $urls[] = [
                    'loc' => $page['loc'],
                    'lastmod' => $now,
                    'changefreq' => $page['changefreq'],
                    'priority' => $page['priority'],
                ];
            }

            // 2. All 81 City Hub URLs (/{citySlug}-etiket-fabrikasi)
            foreach ($cities as $city) {
                $urls[] = [
                    'loc' => route('regional.city', ['citySlug' => $city->slug]),
                    'lastmod' => $city->updated_at ? $city->updated_at->toAtomString() : $now,
                    'changefreq' => 'weekly',
                    'priority' => '0.9',
                ];
            }

            // 3. Product / Regional Service URLs (/{serviceSlug}/{citySlug})
            foreach ($products as $product) {
                foreach ($cities as $city) {
                    $urls[] = [
                        'loc' => route('regional.service', ['serviceSlug' => $product->slug, 'citySlug' => $city->slug]),
                        'lastmod' => $product->updated_at ? $product->updated_at->toAtomString() : $now,
                        'changefreq' => 'weekly',
                        'priority' => '0.8',
                    ];
                }
            }

            // Generate clean XML structure
            $xmlOutput = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
            $xmlOutput .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

            foreach ($urls as $item) {
                $xmlOutput .= "  <url>\n";
                $xmlOutput .= "    <loc>" . htmlspecialchars($item['loc'], ENT_XML1, 'UTF-8') . "</loc>\n";
                $xmlOutput .= "    <lastmod>" . $item['lastmod'] . "</lastmod>\n";
                $xmlOutput .= "    <changefreq>" . $item['changefreq'] . "</changefreq>\n";
                $xmlOutput .= "    <priority>" . $item['priority'] . "</priority>\n";
                $xmlOutput .= "  </url>\n";
            }

            $xmlOutput .= '</urlset>';

            return $xmlOutput;
        });

        return response($xml, 200, [
            'Content-Type' => 'text/xml; charset=UTF-8',
        ]);
    }
}
