<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('importations', function (Blueprint $table) {
            $table->id();
            $table->string('copie_acte_naissance_cnf');
            $table->string('copie_attestation_licence');
            $table->string('copie_liste_selection_cnf');
            $table->string('liste_admis_cnf');
            $table->string('pvr_M1_cnf');
            $table->string('pvr_M2_cnf');
            $table->string('autorisantion_soutenance');
            $table->string('pv_soutenance_memoire');
            $table->string('attestion_correction_memoire');
            $table->string('exemplaire_memoire_corrige');
            $table->string('quitus_DU_certifie');
            $table->string('recu_DU_certifie');
            $table->foreignId('etudiant_id')->constrained();
            $table->foreignId('memoire_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('importations');
    }
};
