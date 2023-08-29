<?php

namespace App\Http\Controllers;

use App\Models\DomaineCompetence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DomaineCompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competences = DomaineCompetence::all();

        return view("competences/index", compact("competences"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('categorie.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nom' => 'required',
        ]
        );
        
        DomaineCompetence::create([
            'nom' => $request->nom,
        ]);
        
        return redirect()->route("competence.index")->with('success', "Competence creé avec succès");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);

        return view('categorie.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $competence = DomaineCompetence::find($id);


        Validator::make($request->all(), [
            'nom' => 'required',
            ]
        );
        
        $competence->update([
            'nom' => $request->nom
        ]);
        
        return redirect()->route("competence.index")->with('success', "Competence mise a jour avec succès");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $competence = DomaineCompetence::findOrFail($id);

        $competence->delete();

        return redirect()->route("competence.index")->with('success', "Competence supprimer avec succès");

    }

}

