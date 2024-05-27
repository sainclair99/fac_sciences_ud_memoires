<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Verificationplagiat extends Model
{
    use HasFactory;

    protected $fillable = [
        'correspondence',
        'memoire_id',
        'user_id',
    ];

    public function memoire(): BelongsTo{
        return $this->belongsTo(Memoire::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
