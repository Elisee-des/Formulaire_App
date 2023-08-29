<?php

namespace App\Http\Controllers;

use App\Models\OutilTechnologie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OutilsTechnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technos = OutilTechnologie::all();

        return view("technos/index", compact("technos"));
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
        
        OutilTechnologie::create([
            'nom' => $request->nom,
        ]);
        
        return redirect()->route("techno.index")->with('success', "Outil ou Technologie creé avec succes");
    
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
        $techno = OutilTechnologie::find($id);


        Validator::make($request->all(), [
            'nom' => 'required',
            ]
        );
        
        $techno->update([
            'nom' => $request->nom
        ]);
        
        return redirect()->route("techno.index")->with('success', "Outil ou Technologie mise a jour avec succès");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $techno = OutilTechnologie::findOrFail($id);

        $techno->delete();

        return redirect()->route("techno.index")->with('success', "Outil ou Techon supprimer avec succès");

    }

}

