<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Product;

class DashboardController extends Controller
{
    /**
     * Admin dashboard summary.
     */
    public function index()
    {
        $stats = [
            'total_cities' => City::count(),
            'total_products' => Product::count(),
            'active_products' => Product::where('is_active', true)->count(),
            'custom_seo_cities' => City::whereNotNull('seo_title')->orWhereNotNull('seo_description')->count(),
        ];

        $recentCities = City::whereNotNull('seo_title')
            ->orWhereNotNull('seo_description')
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();

        $recentProducts = Product::orderBy('updated_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentCities', 'recentProducts'));
    }
}
