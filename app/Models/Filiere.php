<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Filiere extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'label',
        'departement_id',
    ];

    public function departement(): BelongsTo{
        return $this->belongsTo(Departement::class);
    }

    public function etudiants(): HasMany{
        return $this->hasMany(Etudiant::class);
    }
}
