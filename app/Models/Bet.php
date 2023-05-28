<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bet extends Model
{
    protected $fillable = [
        'name',
        "price",
        "lot_id",
        "creator_user_id",
    ];

    use HasFactory;
    public function lot(): BelongsTo
    {
        return $this->belongsTo(Lot::class);
    }
}
