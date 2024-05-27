<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Memoire extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme',
        'file',
        'first_page_image',
        'status',
    ];

    public function importation(): HasOne{
        return $this->hasOne(Importation::class);
    }

    // public function etudiant(): BelongsTo{
    //     return $this->belongsTo(Etudiant::class);
    // }

    public function verificationplagiats(): HasMany{
        return $this->hasMany(Verificationplagiat::class);
    }
}