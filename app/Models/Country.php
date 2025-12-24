<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'status',
    ];

    /**
     * ? Filter Scope
     * @param $query
     * @return mixed
     */
    public function scopeTableFilters($query)
    {
        return $query->when(request()->input('name', false), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%')->orWhere('code', 'like', '%' . $name . '%');
        })->when(request()->input('status', false), function ($query, $status) {
            return $query->where('status', $status);
        });
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class, 'country_id');
    }

}
