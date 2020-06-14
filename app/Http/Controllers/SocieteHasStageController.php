<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\societe;
use App\stage;
use Illuminate\Support\Facades\Auth;
use App\societe_has_stage;
use Illuminate\Http\Request;

class SocieteHasStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $societes = societe::latest()->paginate(5);
        // return view('societe.index',compact('societes'))->with('i', (request()->input('page', 1) - 1) * 5);
        $societes = societe::latest()->paginate(5);
        $stages = stage::latest()->paginate(5);
        // return view::make('societeaddstage.index')->with('societes', $societes)->with('stages', $stages);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\societe_has_stage  $societe_has_stage
     * @return \Illuminate\Http\Response
     */
    public function show(societe_has_stage $societe_has_stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\societe_has_stage  $societe_has_stage
     * @return \Illuminate\Http\Response
     */
    public function edit(societe_has_stage $societe_has_stage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\societe_has_stage  $societe_has_stage
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\societe_has_stage  $societe_has_stage
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
