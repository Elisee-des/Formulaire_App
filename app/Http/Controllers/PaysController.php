<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payss = Pays::all();

        return view("pays/index", compact("payss"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('Pays.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nom' => 'required',
        ]
        );
        
        Pays::create([
            'nom' => $request->nom,
        ]);
        
        return redirect()->route("pays.index")->with('success', "Pays creé avec succes");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);

        return view('Pays.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaysRequest  $request
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pays = pays::find($id);


        Validator::make($request->all(), [
            'nom' => 'required',
            ]
        );
        
        $pays->update([
            'nom' => $request->nom
        ]);
        
        return redirect()->route("pays.index")->with('success', "Pays mise a jour avec succès");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pays  $Pays
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pays = Pays::findOrFail($id);

        $pays->delete();

        return redirect()->route("pays.index")->with('succès', "Pays supprimer avec succès");

    }

}
