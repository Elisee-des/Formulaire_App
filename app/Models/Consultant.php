<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    protected $fillable = [
        'domaine_competence_id',
        'profil_consultant_id',
        'outil_techno_maitriser_id',
        'pays_id',
        'niveau_diplome_id',
        'nom',
        'prenom',
        'date_naissance',
        'email_1',
        'email_2',
        'telephone_1',
        'telephone_2',
        'niveau_diplome_1',
        'diplome_1',
        'annee_obtention_diplome_1',
        'niveau_diplome_2',
        'diplome_2',
        'annee_obtention_diplome_2',
        'autre_diplomes',
        'projet_realiser',
    ];

    public function profils()
    {
        return $this->belongsToMany(Profil::class, 'consultant_profil');
    }

    public function domaine_competences()
    {
        return $this->belongsToMany(DomaineCompetence::class, 'consultant_competence');
    }

    public function outil_techonologies()
    {
        return $this->belongsToMany(OutilTechnologie::class, 'consultant_techno');
    }

    public function niveau_diplomes()
    {
        return $this->belongsToMany(NiveauDiplome::class, 'consultant_diplome');
    }

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

}
