<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_entreprise',
        'pays_id',
        'site_web_entreprise',
        'email',
        'indicatif_numero_telephone',
        'telephone_entreprise_1',
        'telephone_entreprise_2',
        'nom_1',
        'prenom_1',
        'contact_1',
        'email_1',
        'nom_2',
        'prenom_2',
        'contact_2',
        'email_2',
        'nom_3',
        'prenom_3',
        'contact_3',
        'email_3',
        'domaine_activite',
        'solution_1',
        'description_solution_1',
        'solution_2',
        'description_solution_2',
        'autre_solutions',
    ];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }
}
