<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;
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

        $seo = [
            'title' => "{$city->name} Etiket Fabrikası - Endüstriyel Rulo Baskı | Göksan Etiket",
            'description' => "{$city->name} ve {$city->industrial_zones} için toptan rulo etiket üretimi. {$city->delivery_time} hızlı teslimat garantisi ve fabrika fiyatlarıyla hemen teklif alın.",
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
}
