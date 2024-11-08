<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Counter extends Model
{
    use HasFactory;

    public function branches(): BelongsTo {
        return $this->belongsTo(Branch::class);
    }

    public function tokens(): HasMany {
        return $this->hasMany(Token::class);
    }
}
