<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Share extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'advertisement_id',
        'type',
    ];

    /**
     * ! Relations
     * ? With User => Publisher ( Many Publisher Has Many Share )
     * ? With Advertisement => Publisher ( Many Advertisement Has Many Share )
     */

    /**
     * @return BelongsTo
     */
    public function advertisements(): BelongsTo
    {
        return $this->belongsTo(Advertisement::class, 'advertisement_id');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
