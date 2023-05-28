<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lot extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'start',
        'finish',
        'price',
        "creator_user_id",
    ];
    public function product(): HasMany
    {
        return $this->hasMany(Bet::class);
    }
}
