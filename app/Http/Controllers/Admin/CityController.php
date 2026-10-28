<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateCityRequest;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CityController extends Controller
{
    /**
     * Display a listing of cities.
     */
    public function index(Request $request)
    {
        $query = City::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('plate_code', 'like', "%{$search}%")
                  ->orWhere('industrial_zones', 'like', "%{$search}%");
            });
        }

        if ($region = $request->input('region')) {
            $query->where('region', $region);
        }

        if ($request->input('seo_override') === 'yes') {
            $query->where(function ($q) {
                $q->whereNotNull('seo_title')->orWhereNotNull('seo_description');
            });
        } elseif ($request->input('seo_override') === 'no') {
            $query->whereNull('seo_title')->whereNull('seo_description');
        }

        $cities = $query->orderBy('plate_code', 'asc')->paginate(15)->withQueryString();

        $regions = [
            'Marmara',
            'Ege',
            'İç Anadolu',
            'Akdeniz',
            'Karadeniz',
            'Güneydoğu Anadolu',
            'Doğu Anadolu',
        ];

        return view('admin.cities.index', compact('cities', 'regions'));
    }

    /**
     * Show the form for editing the specified city.
     */
    public function edit(City $city)
    {
        return view('admin.cities.edit', compact('city'));
    }

    /**
     * Update the specified city in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        $city->update($request->validated());

        // Invalidate regional SEO caches
        Cache::forget("regional_city_{$city->slug}");
        Cache::forget('regional_seo_index');
        Cache::forget('sitemap_xml');
        Cache::forget('all_cities_by_region');

        return redirect()->route('admin.cities.index')
            ->with('success', "{$city->name} şehri SEO ve sanayi bilgileri başarıyla güncellendi.");
    }
}
