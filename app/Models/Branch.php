<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    public function tokens(): HasMany {
        return $this->hasMany(Token::class);
    }

    public function counters(): HasMany {
        return $this->hasMany(Counter::class);
    }

    public function operators(): HasMany {
        return $this->hasMany(Operator::class);
    }
}
