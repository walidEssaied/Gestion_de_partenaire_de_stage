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
        $etudiants = etudiant::latest()->paginate(5);
		return view('etudiant.index',compact('etudiants'))->with('i', (request()->input('page', 1) - 1) * 5);
        
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
        $request->validate([
            'cin' => 'required',
            'Nom' =>'required','string',
            'Prenom' =>'required','string',
            'Adresse' =>'required','string',
            'tel' => 'required',
            'email' => 'required','email:rfc,dns',
            'niveau' =>'required','string'
            ]);
        $etudiant= new etudiant;
        $etudiant->user_id = Auth::id();
        $etudiant->cin = $request->cin;
        $etudiant->Nom = $request->Nom;
        $etudiant->Prenom = $request->Prenom;
        $etudiant->tel = $request->tel;
        $etudiant->Adresse = $request->Adresse;
        $etudiant->email = $request->email;
        $etudiant->niveau = $request->niveau;

        $etudiant->save();

    //   Mail::to(Auth::user()->email)->send(new Newetudiant($etudiant));

        return redirect()->route('etudiant.index')->with('addetudiant','Nouveau etudiant ajouter avec succés');
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
        // dd($etudiant->id);  
        // $etd=etudiant::findOrFail($etudiant->id);
        // $validateData = $request->validate($this->validationRules());
        // $etudiant->update($validateData);

        $validatedData = $request->validate($this->validationRules());

        $etudiant->cin = $validatedData['Cin'];
        $etudiant->Nom = $validatedData['Nom'];
        $etudiant->Prenom = $validatedData['Prenom'];
        $etudiant->Adresse = $validatedData['Adresse'];
        $etudiant->tel = $validatedData['Tel'];
        $etudiant->email = $validatedData['Email'];
        $etudiant->niveau = $validatedData['Niveau'];
        $etudiant->idsociete = $validatedData['idsociete'];

        $etudiant->update();

        return redirect()->route('etudiant.index')->with('updateEtudiant'. 'Etudiant update successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $bfaccounts = bufashaccounts::findOrFail($id);
        // $bfeditAccounts->delete();
        $etudiant = etudiant::findOrFail($id);
        $etudiant->delete($id);
        return redirect()->route('etudiant.index')->with('deleteEtudiant'. 'Etudiant delete successfully');


    }    
    public function delete(etudiant $etudiant)
    {   
        $id = $etudiant->id;
        $nCard= etudiant::find($id);
        $nCard->delete();
        return back();
    }
    private function validationRules()
    {
        return [
            'Cin' => 'required',
            'Nom' => 'required',
            'Prenom' => 'required',
            'Adresse' => 'required',
            'Tel' => 'required',
            'Email' => 'required',
            'Niveau' => 'required',
            'idsociete' => 'required',
        ];  
    }
   }

