<?php

namespace App\Http\Controllers;

use App\Models\NiveauDiplome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NiveauDiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diplomes = NiveauDiplome::all();

        return view("diplomes/index", compact("diplomes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('NiveauDiplome.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNiveauDiplomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nom' => 'required',
        ]
        );
        
        NiveauDiplome::create([
            'nom' => $request->nom,
        ]);
        
        return redirect()->route("diplome.index")->with('success', "Niveau de diplôme creé avec succès");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NiveauDiplome  $NiveauDiplome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);

        return view('NiveauDiplome.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NiveauDiplome  $NiveauDiplome
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNiveauDiplomeRequest  $request
     * @param  \App\Models\NiveauDiplome  $NiveauDiplome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $diplome = NiveauDiplome::find($id);


        Validator::make($request->all(), [
            'nom' => 'required',
            ]
        );
        
        $diplome->update([
            'nom' => $request->nom
        ]);
        
        return redirect()->route("diplome.index")->with('success', "Profil mise a jour avec succès");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NiveauDiplome  $NiveauDiplome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diplome = NiveauDiplome::findOrFail($id);

        $diplome->delete();

        return redirect()->route("diplome.index")->with('success', "Niveau de diplôme supprimer avec success");

    }

}
