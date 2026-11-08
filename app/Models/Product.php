<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'content',
        'images',
        'specs',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'images' => 'array',
        'specs' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Arabic translations for product titles.
     */
    public static array $arTitles = [
        'pp-opak-etiket' => 'ملصقات بلاستيك PP أوبيك (بولي بروبيلين)',
        'termal-etiket' => 'ملصقات حرارية (إيكو ولامينيه)',
        'kuse-etiket' => 'إنتاج ملصقات الكوشيه وطباعة الرولات',
        'guvenlik-void-etiket' => 'ملصقات الأمان والضمان (Security Void)',
        'seffaf-etiket' => 'ملصقات PP شفافة',
        'silver-mat-etiket' => 'ملصقات سيلفر مات (معدنية للأصول والمعدات)',
        'karton-sallama-etiket' => 'بطاقات تعليق كرتونية (السعر والماركة)',
        'japon-akmaz-etiket' => 'ملصقات القماش والساتان الياباني (تعليمات الغسيل)',
        'dokuma-etiket' => 'ملصقات منسوجة (شعارات وياقات)',
        'endustriyel-ambalaj' => 'تغليف الصناديق الصناعية والطبليات',
        'ozel-kesim-etiket' => 'ملصقات صناعية بقص خاص',
        'kutu-ambalaj' => 'عبوات كرتونية وعلب منتجات مخصصة',
        'barkod-etiketi' => 'ملصقات الباركود الصناعية',
    ];

    /**
     * Arabic translations for product short descriptions.
     */
    public static array $arShortDescriptions = [
        'pp-opak-etiket' => 'ملصقات بلاستيكية صناعية متينة بمقاومة فائقة ضد الماء، الرطوبة، الكيماويات والتمزق.',
        'termal-etiket' => 'ملصقات باركود حرارية مباشرة بدون ريبون لشركات الشحن، الموازين، والمستودعات وسلاسل التوريد.',
        'kuse-etiket' => 'حلول ملصقات رول كوشيه عالية الجودة بسطح أملس وتكلفة اقتصادية لقطاعات الأغذية واللوجستيات والتجزئة.',
        'guvenlik-void-etiket' => 'ملصقات حماية الضمان تترك أثر "VOID" عند محاولة نزعها وتمنع التلاعب بالأجهزة والمعدات.',
        'seffaf-etiket' => 'ملصقات بلاستيكية شفافة بتأثير بدون خلفية (No-Label Look) للعبوات الزجاجية ومستحضرات التجميل.',
        'silver-mat-etiket' => 'ملصقات معدنية متطورة للأجهزة والمكائن وتتبع الأصول بمقاومة للحرارة العالية والظروف الشاقة.',
        'karton-sallama-etiket' => 'بطاقات تعليق كرتونية فاخرة للألبسة مع فويل ذهبي ونقش بارز يعزز جاذبية العلامة التجارية.',
        'japon-akmaz-etiket' => 'أشرطة قماشية معالجة لتعليمات الغسيل بمقاومة تامة للغليان حتى 90°C والغسيل الإنزيمي القاسي.',
        'dokuma-etiket' => 'شعارات وياقات جاكار منسوجة عالية الكثافة والدقة بملمس ناعم لا يسبب تحسس البشرة.',
        'endustriyel-ambalaj' => 'كراتين شحن متينة ومواد تغليف وحماية متكاملة للطبليات والتخزين والشحن الآمن للمصانع.',
        'ozel-kesim-etiket' => 'قص ليزري وقوالب خاصة بدقة متناهية بكافة الأشكال الهندسية لقطاعات الكهرباء والمكائن والسيارات.',
        'kutu-ambalaj' => 'تصنيع علب كرتون متينة مخصصة للأغذية ومستحضرات التجميل والمنتجات الصناعية بتشطيب عالي الجودة.',
        'barkod-etiketi' => 'ملصقات باركود حرارية وكوشيه عالية الدقة متوافقة مع جميع طابعات الباركود المكتبية والصناعية.',
    ];

    /**
     * Get title (localized if Arabic locale).
     */
    public function getTitleAttribute($value): string
    {
        if (app()->getLocale() === 'ar' && !(function_exists('request') && request()?->is('admin*'))) {
            return self::$arTitles[$this->slug] ?? ($value ?? '');
        }
        return (string) ($value ?? '');
    }

    /**
     * Get short description (localized if Arabic locale).
     */
    public function getShortDescriptionAttribute($value): string
    {
        if (app()->getLocale() === 'ar' && !(function_exists('request') && request()?->is('admin*'))) {
            return self::$arShortDescriptions[$this->slug] ?? ($value ?? '');
        }
        return (string) ($value ?? '');
    }

    /**
     * Scope a query to only include active products.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to a specific category.
     */
    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }
}
