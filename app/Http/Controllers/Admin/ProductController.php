<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        $products = $query->orderBy('id', 'desc')->paginate(12)->withQueryString();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        // Auto-generate slug if omitted
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle image upload
        $images = [];
        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('products', 'public');
            $images[] = asset('storage/' . $path);
        } elseif (!empty($data['image_url'])) {
            $images[] = $data['image_url'];
        }
        $data['images'] = $images;

        // Handle specs
        $data['specs'] = $this->parseSpecs($request->input('specs_json'));
        $data['is_active'] = $request->boolean('is_active', true);

        unset($data['image_file'], $data['image_url'], $data['specs_json']);

        $product = Product::create($data);

        $this->clearCache();

        return redirect()->route('admin.products.index')
            ->with('success', "{$product->title} ürünü başarıyla eklendi.");
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle image upload
        $images = $product->images ?? [];
        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('products', 'public');
            $images = [asset('storage/' . $path)];
        } elseif (!empty($data['image_url'])) {
            $images = [$data['image_url']];
        }
        $data['images'] = $images;

        $data['specs'] = $this->parseSpecs($request->input('specs_json'));
        $data['is_active'] = $request->boolean('is_active', false);

        unset($data['image_file'], $data['image_url'], $data['specs_json']);

        $product->update($data);

        $this->clearCache();

        return redirect()->route('admin.products.index')
            ->with('success', "{$product->title} ürünü başarıyla güncellendi.");
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $title = $product->title;
        $product->delete();

        $this->clearCache();

        return redirect()->route('admin.products.index')
            ->with('success', "{$title} ürünü silindi.");
    }

    /**
     * Parse specs JSON or textarea input into associative array.
     */
    protected function parseSpecs(?string $input): array
    {
        if (empty($input)) {
            return [];
        }

        $decoded = json_decode($input, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            return $decoded;
        }

        // Fallback: parse Key: Value lines
        $specs = [];
        $lines = explode("\n", str_replace("\r", "", $input));
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;
            if (str_contains($line, ':')) {
                [$k, $v] = explode(':', $line, 2);
                $specs[trim($k)] = trim($v);
            }
        }

        return $specs;
    }

    /**
     * Clear all regional and sitemap caches.
     */
    protected function clearCache(): void
    {
        Cache::forget('regional_seo_index');
        Cache::forget('sitemap_xml');
    }
}
