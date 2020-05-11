<?php

namespace App\Http\Controllers;

use App\etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'etudiant';
        $data = Etudiant::all();
        return view('etudiant.index',compact('data','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validated([
            'cin' => 'required',
            'Nom' =>'required','string',
            'Prenom' =>'required','string',
            'tel' => 'required',
            'Adresse' =>'required','string',
            'email' => 'required','email:rfc,dns',
            'niveau' =>'required','string']);
        $etudiant= new etudiant;
        $etudiant->id = Auth::id();
        $etudiant->cin = $request->cin;
        $etudiant->Nom = $request->Nom;
        $etudiant->Prenom = $request->Prenom;
        $etudiant->tel = $request->tel;
        $etudiant->Adresse = $request->Adresse;
        $etudiant->email = $request->email;
        $etudiant->niveau = $request->niveau;

        $etudiant->save();

      Mail::to(Auth::user()->email)->send(new Newetudiant($etudiant));

        return redirect()->route('etudiant.index')->with('addetudiant','New etudiant added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(etudiant $etudiant)
    {
        return view('etudiant.show')->with('etudiant', $etudiant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(etudiant $etudiant)
    {
        return view ('etudiant.edit',compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etudiant $etudiant)
    {
       $validatedata - $request->validate($this->validationRules());
       $etudiant->update($validatedata);
       return redirect()->route('etudiant.show'.$etudiant->id)->with('updateEtudiant'. 'Etudiant update successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiant $etudiant)
    {
        $etudiant -> delete();
        return redirect()->route('etudiant.index')->with('deleteEtudiant'. 'Etudiant delete successfully');


    }
    private function validationRules()
    {
        return [
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'niveau' => 'required',
            'idsociete' => 'required',
        ];
}   } 
