<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'features',
        'cover_image',
        'media_type',
        'user_id',
        'category_id',
        'country_id',
        'status',
        'is_featured',
    ];

    /**
     * ! Relations
     * ? With User ( One User Have Many Ads )
     * ? With Category ( One Category Have Many Ads )
     * ? With Country ( One Country Have Many Ads )
     * ? With Media ( One ِAdvertisement Have Many Media )
     */

    /**
     * ? User Relation
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * ? Category Relation
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * ? Country Relation
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * ? Media Relation
     * @return HasMany
     */
    public function media(): HasMany
    {
        return $this->hasMany(AdvertisementMedia::class, 'advertisement_id');
    }

    /**
     * ? Publishers Relation
     * @return BelongsToMany
     */
    public function publishers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'shares', 'user_id', 'advertisement_id');
    }

    /**
     * @return BelongsTo
     */
    public function shares()
    {
        return $this->belongsTo(Share::class, 'advertisement_id');
    }

    /**
     * @return BelongsTo
     */
    public function visitors()
    {
        return $this->belongsTo(Visitor::class, 'advertisement_id');
    }

    /**
     * ! Accessors For Cover Image
     */
    public function getImageAttribute()
    {
        if ( !$this->cover_image ) {
            return asset('assets/images/resource/feature-1.jps');
        }
//        return
    }
}
