<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attestationdepot extends Model
{
    use HasFactory;
    protected $fillable=[
        'memoire_id',
        'etudiant_id',
    ];

    public function memoire():BelongsTo{
        return $this->belongsTo(Memoire::class);
    }
    
    public function etudiant():BelongsTo{
        return $this->belongsTo(Etudiant::class);
    }
}
