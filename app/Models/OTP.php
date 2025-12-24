<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTP extends Model
{
    use HasFactory;

    protected $primaryKey = 'phone_number';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $table = 'otps';
    protected $fillable = [
        'phone_number',
        'code',
    ];
}
