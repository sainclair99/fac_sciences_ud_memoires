<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Importation extends Model
{
    use HasFactory;

    protected $fillable = [
        'copie_acte_naissance_cnf',
        'copie_attestation_licence',
        'copie_liste_selection_cnf',
        'liste_admis_cnf',
        'pvr_M1_cnf',
        'pvr_M2_cnf',
        'autorisantion_soutenance',
        'pv_soutenance_memoire',
        'attestion_correction_memoire',
        'exemplaire_memoire_corrige',
        'quitus_DU_certifie',
        'recu_DU_certifie',
        'etudiant_id',
        'memoire_id',
    ];

    public function memoires(): BelongsTo{
        return $this->belongsTo(Memoire::class);
    }

    public function etudiants(): BelongsTo{
        return $this->belongsTo(Etudiant::class);
    }
}
