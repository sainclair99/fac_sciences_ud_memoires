<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Enseignant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'number',
        'first_name',
        'last_name',
        'title',
        'speciality',
        'user_id',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function etudiants(): BelongsToMany{
        return $this->belongsToMany(Etudiant::class);
    }
}
