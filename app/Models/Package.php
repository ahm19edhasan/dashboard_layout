<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'price',
        'views_number',
        'bonus_value',
        'duration',
    ];

    /**
     * ! Relations
     * ? With ( User Model)
     */

    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'package_id');
    }
}
