<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employe extends Model
{
    use HasFactory;

    public function Enterprise (): BelongsTo
    {
        return $this->belongsTo(Enterprise::class);
    }
}