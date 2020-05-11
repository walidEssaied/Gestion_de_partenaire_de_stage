<?php

namespace App\Http\Controllers;

use App\etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newetudiant;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $page_name = 'etudiant';
        $data = Etudiant::all();
        return view('etudiant.index',compact('data','page_name'));
     //   $users = Etudiant::All();
       // return view('Etudiant.index')->with('users',$users);
     // $etudiant = Etudiant::all();
      //  return etudiant;
      // $etudiants = Auth::user()->etudiants()->get(); 
       //return view('etudiant.index', compact('etudiants'));
        //return view('etudiant.index')->with('etudiant', $etudiant);
           // $etudiants = Etudiant::All();
      //   return view('etudiant.index')->with('etudiants',$etudiants);
     // return view('etudiant.index');
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
     * @param  int  $id
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiant $etudiant)
    {
        //
    }
}
