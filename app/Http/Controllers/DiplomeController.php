<?php

namespace App\Http\Controllers;
use App\Models\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
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
        $diplomes = Diplome::all();
        return view('Diplome.index', compact('diplomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $diplomes = Diplome::all();
        return view('Diplome.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diplome = new Diplome();
        $diplome->coef_diplome = $request->input('coef_diplome');
        $diplome->nom = $request->input('nom');
        $diplome->save();
        return redirect('/diplome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diplomes = Diplome::find($id);
        return view('diplome.show',compact('diplomes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diplomes = Diplome::find($id);
        return view('diplome.edit', compact('diplomes'));
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
            
            'coef_diplome' => 'required',
            'nom' => 'required'
            
        ]);
        Diplome::whereId($id)->update($updateData);
        
        return redirect('/diplome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diplomes = Diplome::find($id);
        $diplomes->delete();
        return redirect('/diplome');
    }
}
