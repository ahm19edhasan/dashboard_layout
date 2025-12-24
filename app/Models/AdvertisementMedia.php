<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementMedia extends Model
{
    use HasFactory;

    protected $table = 'advertisement_media';

    protected $fillable = [
        'advertisement_id',
        'media_url',
    ];
}
