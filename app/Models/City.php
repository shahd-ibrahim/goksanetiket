<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'plate_code',
        'region',
        'industrial_zones',
        'delivery_time',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'plate_code' => 'integer',
    ];

    /**
     * Get industrial zones as an array if comma-separated.
     */
    public function getIndustrialZonesArrayAttribute(): array
    {
        if (empty($this->industrial_zones)) {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode(',', $this->industrial_zones))));
    }

    /**
     * Formatted plate code with leading zero (e.g., "06", "34").
     */
    public function getFormattedPlateAttribute(): string
    {
        return str_pad((string) $this->plate_code, 2, '0', STR_PAD_LEFT);
    }

    /**
     * Scope a query to only include cities of a specific region.
     */
    public function scopeRegion($query, string $region)
    {
        return $query->where('region', $region);
    }
}
