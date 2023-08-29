<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::all();

        return view("partenaires/index", compact("partenaires"));
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
    // public function store(Request $request)
    // {
    //     Validator::make($request->all(), [
    //         'nom' => 'required',
    //     ]
    //     );
        
    //     Profil::create([
    //         'nom' => $request->nom,
    //     ]);
        
    //     return redirect()->route("profil.index")->with('success', "Profil creé avec succes");
    
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partenaire = Partenaire::findOrFail($id);

        return view('partenaires.show', compact("partenaire"));
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
    // public function update(Request $request, $id)
    // {
    //     $profil = Profil::find($id);


    //     Validator::make($request->all(), [
    //         'nom' => 'required',
    //         ]
    //     );
        
    //     $profil->update([
    //         'nom' => $request->nom
    //     ]);
        
    //     return redirect()->route("profil.index")->with('success', "Profil mise a jour avec succès");
    
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = Partenaire::findOrFail($id);

        $profil->delete();

        return redirect()->route("partenaire.index")->with('success', "Partenaire supprimer avec succès");

    }

}
