<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'parcours',
        'filiere_id',
        'user_id',
    ];

    public function filiere(): BelongsTo{
        return $this->belongsTo(Filiere::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function enseignants(): BelongsToMany{
        return $this->belongsToMany(Enseignant::class);
    }

    public function importations(): HasMany{
        return $this->hasMany(Importation::class);
    }

    public function memoires(): HasMany{
        return $this->hasMany(Memoire::class);
    }
}
