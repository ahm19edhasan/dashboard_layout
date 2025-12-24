<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonials extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'content',
        'name',
        'job',
        'avatar',
        'status'
    ];

    /**
     * ? Accessors For Avatar
     * @return string
     */
    public function getImagePathAttribute()
    {
        if( !$this->avatar ) {
            return asset('assets/images/no-avatar.png');
        }

        return asset('storage') . '/' . $this->avatar;
    }
}
