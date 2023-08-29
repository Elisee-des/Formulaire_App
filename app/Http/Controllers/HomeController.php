<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\DomaineCompetence;
use App\Models\NiveauDiplome;
use App\Models\OutilTechnologie;
use App\Models\Partenaire;
use App\Models\Pays;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pays = Pays::all();
        $competences = DomaineCompetence::all();
        $technos = OutilTechnologie::all();
        $profils = Profil::all();
        $diplomes = NiveauDiplome::all();

        return view("welcome", compact('pays', 'competences', 'technos', 'profils', 'diplomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function succes()
    {
        return view("succes");
    }

    public function createPartenaire(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'nom_entreprise' => 'required',
                'pays_id' => 'required',
                'site_web_entreprise' => 'required',
                'email' => 'required',
                'nom_1' => 'required',
                'prenom_1' => 'required',
                'contact_1' => 'required',
                'domaine_activite' => 'required',
                'solution_1' => 'required',
                'description_solution_1' => 'required',
            ]
        );

        Partenaire::create([
            'nom_entreprise' => $request->nom_entreprise,
            'pays_id' => $request->pays_id,
            'site_web_entreprise' => $request->site_web_entreprise,
            'email' => $request->email,
            'indicatif_numero_telephone' => $request->indicatif_numero_telephone,
            'telephone_entreprise_1' => $request->telephone_entreprise_1,
            'telephone_entreprise_2' => $request->telephone_entreprise_2,
            'nom_1' => $request->nom_1,
            'prenom_1' => $request->prenom_1,
            'contact_1' => $request->contact_1,
            'email_1' => $request->email_1,
            'nom_2' => $request->nom_2,
            'prenom_2' => $request->prenom_2,
            'contact_2' => $request->contact_2,
            'email_2' => $request->email_2,
            'nom_3' => $request->nom_3,
            'prenom_3' => $request->prenom_3,
            'contact_3' => $request->contact_3,
            'email_3' => $request->email_3,
            'solution_1' => $request->solution_1,
            'description_solution_1' => $request->description_solution_1,
            'domaine_activite' => $request->domaine_activite,
            'solution_2' => $request->solution_2,
            'description_solution_2' => $request->description_solution_2,
            'autre_solutions' => $request->autre_solutions,
        ]);

        return redirect()->route("succes")->with('success', "Formulaire envoié avec succès");
    }

    public function createConsultant(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required',
                'domaine_completence' => 'required',
            ]
        );

        $selectedProfileIds = $request->input('profil_consultant_id', []);
        $selectedCompetenceIds = $request->input('domaine_competence_id', []);
        $selectedTechnoIds = $request->input('outil_techno_maitriser_id', []);
        $selectedDiplomeIds = $request->input('niveau_diplome_id', []);

        $consultant = new Consultant();
        // dd($request->all());

        $consultant->nom = $request->nom;
        $consultant->prenom = $request->prenom;
        $consultant->annee_naissance = $request->annee_naissance;
        $consultant->email_1 = $request->email_1;
        $consultant->email_2 = $request->email_2;
        $consultant->telephone_1 = $request->telephone_1;
        $consultant->telephone_2 = $request->telephone_2;
        $consultant->niveau_diplome_1 = $request->niveau_diplome_1;
        $consultant->diplome_1 = $request->diplome_1;
        $consultant->annee_obtention_diplome_1 = $request->annee_obtention_diplome_1;
        $consultant->niveau_diplome_2 = $request->niveau_diplome_2;
        $consultant->diplome_2 = $request->diplome_2;
        $consultant->annee_obtention_diplome_2 = $request->annee_obtention_diplome_2;
        $consultant->pays_id = $request->pays_id;
        $consultant->domaine_competence_id = $request->domaine_competence_id;
        $consultant->niveau_diplome_id = $request->niveau_diplome_id;
        $consultant->outil_techno_maitriser_id = $request->outil_techno_maitriser_id;
        $consultant->autre_diplomes = $request->autre_diplomes;
        $consultant->profil_consultant_id = $request->profil_consultant_id;
        $consultant->projet_realiser = $request->projet_realiser;
        json_encode($selectedProfileIds);
        json_encode($selectedTechnoIds);
        json_encode($selectedDiplomeIds);
        json_encode($selectedCompetenceIds);
        $consultant->save();
        // dd($consultant);
        
        // Attachement des profils sélectionnés au consultant
        foreach ($selectedProfileIds as $profileId) {
            $profile = Profil::find($profileId);
            if ($profile) {
                $consultant->profils()->attach($profile);
            }
        }

        // Attachement des compétences sélectionnées au consultant
        foreach ($selectedCompetenceIds as $competenceId) {
            $competence = DomaineCompetence::find($competenceId);
            if ($competence) {
                $consultant->domaine_competences()->attach($competence);
            }
        }

        // Attachement des technologies sélectionnées au consultant
        foreach ($selectedTechnoIds as $technoId) {
            $techno = OutilTechnologie::find($technoId);
            if ($techno) {
                $consultant->outil_techno_maitriser()->attach($techno);
            }
        }

        // Attachement des niveaux de diplômes sélectionnés au consultant
        foreach ($selectedDiplomeIds as $diplomeId) {
            $diplome = NiveauDiplome::find($diplomeId);
            if ($diplome) {
                $consultant->niveau_diplomes()->attach($diplome);
            }
        }


        // foreach ($selectedProfileIds as $key => $value) {
        //     $prof = Profil::where('id',$value)->first()->attach($consultant);

        return redirect()->route("succes")->with('success', "Formulaire envoié avec succès");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
