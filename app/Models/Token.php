<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Token extends Model
{
    use HasFactory;

    public function branches(): BelongsTo {
        return $this->belongsTo(Branch::class);
    }

    public function customers(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    public function counters(): BelongsTo {
        return $this->belongsTo(Counter::class);
    }

    public function operators(): BelongsTo {
        return $this->belongsTo(Operator::class);
    }
}
