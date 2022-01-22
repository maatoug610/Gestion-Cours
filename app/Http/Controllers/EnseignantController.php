<?php

namespace App\Http\Controllers;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
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
        $enseignants = Enseignant::all();

        return view('Enseignant.index', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enseignants = Enseignant::all();
        return view('Enseignant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enseignant = new Enseignant();
        $enseignant->code = $request->input('code');
        $enseignant->grade = $request->input('grade');
        $enseignant->mail = $request->input('mail');
        $enseignant->nom = $request->input('nom');
        $enseignant->prenom = $request->input('prenom');
        $enseignant->N_bureau = $request->input('N_bureau');
        $enseignant->tel = $request->input('tel');
        $enseignant->save();
        return redirect('/enseignant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enseignants = Enseignant::find($id);
        return view('enseignant.show',compact('enseignants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enseignants = Enseignant::find($id);
        return view('enseignant.edit', compact('enseignants'));
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
            'code' => 'required',
            'grade' => 'required',
            'mail' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'N_bureau' => 'required',
            'tel' => 'required'
            
        ]);
        Enseignant::whereId($id)->update($updateData);
        
        return redirect('/enseignant');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $enseignants = Enseignant::find($id);
        $enseignants->delete();
        return redirect('/enseignant');
    }
}
