<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Diplome;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $etudiants = Etudiant::with('diplome')->get();
        return view('etudiant.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diplomes = Diplome::all();
        return view('etudiant.create', compact('diplomes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant = new Etudiant();
        $etudiant->cin = $request->input('cin');
        $etudiant->adresse = $request->input('adresse');
        $etudiant->mail = $request->input('mail');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->tel = $request->input('tel');
        $etudiant->diplome_id = $request->input('diplome_id');
        $etudiant->save();
        return redirect('/etudiant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.show',compact('etudiants','diplomes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diplomes = Diplome::all();
        $etudiants = Etudiant::find($id);
        return view('etudiant.edit', compact('etudiants','diplomes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $updateData = $request->validate([
            'cin' => 'required',
            'adresse' => 'required',
            'mail' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required'
                        
        ]);
        
        Etudiant::whereId($id)->update($updateData);
        return redirect('/etudiant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiants = Etudiant::find($id);
        $etudiants->delete();
        return redirect('/etudiant');
    }
}
