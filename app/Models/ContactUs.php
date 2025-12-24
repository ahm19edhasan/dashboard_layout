<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'subject',
        'message',
    ];

    public function scopeTableFilters($query)
    {
        return $query->when(request()->input('name', false), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })->when(request()->input('email', false), function ($query, $email) {
            return $query->where('email', $email);
        });
    }
}
