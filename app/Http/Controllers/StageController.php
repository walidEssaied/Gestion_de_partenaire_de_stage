<?php

namespace App\Http\Controllers;

use App\stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stages = stage::latest()->paginate(5);
        // dd($stages);
		return view('stage.index',compact('stages'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate($this->validationRules());

        $stage = new Stage();
        $stage->type = $request->type;
        $stage->date_debut = $request->date_debut;
        $stage->date_fin = $request->date_fin;

        $stage->user_id = Auth::id();
        $stage->societe_id = Auth::id();


        $stage->save();
        return redirect()->route('stage.index')->with('AddStage', 'Un nouveau stage ajoutée avec succées');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function show(stage $stage)
    {
        return view('stage.show')->with('stage', $stage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function edit(stage $stage)
    {
        return view('stage.edit',compact('stage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stage $stage)
    {

        $validatedData = $request->validate($this->validationRules());

        $stage->type = $validatedData['type'];
        $stage->date_debut = $validatedData['date_debut'];
        $stage->date_fin = $validatedData['date_fin'];

        $stage->update();

        return redirect()->route('stage.index')->with('updateStage', 'Stage modifiée avec succées ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(stage $stage)
    {
        $stage->delete();

        return redirect()->route('stage.index')->with('deleteStage', 'Stage supprimée avec succées ');
    }
    private function validationRules()
    {
        return [
            'type' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
        ];
    }

}
