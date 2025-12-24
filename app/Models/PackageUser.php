<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageUser extends Model
{
    use HasFactory;

    protected $table = 'package_users';

    protected $fillable = [
        'user_id',
        'package_id',
        'ends_at',
    ];

    protected $casts = [
        'ends_at' => 'timestamp',
    ];
}
