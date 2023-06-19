<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class demonstration extends Model
{
    use HasFactory;
    public function greeting(): BelongsTo
    {
        return $this->belongsTo(demonstration::class);

    }

    protected $fillable = ['afspraak'];
}
