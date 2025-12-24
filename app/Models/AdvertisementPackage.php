<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementPackage extends Model
{
    use HasFactory;

    protected $table = 'advertisement_packages';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'advertisement_id',
        'package_id',
    ];
}
