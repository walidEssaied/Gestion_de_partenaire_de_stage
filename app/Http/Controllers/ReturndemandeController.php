<?php

namespace App\Http\Controllers;
use App\stage;
use App\societe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ReturndemandeController extends Controller
{
    public function index()
    {
        $demandes = DB::table('stages')->join('societes','stages.societe_id','=','societes.id')->select('societes.nom','societes.adresse','stages.id','stages.type','stages.date_debut','stages.date_fin')->get();
        
        
        return view('demande.index',compact('demandes'));

    }
    public function create(){
        return view('demande.create');

    }
    public function store(Request $request){
        // $demande = DB::table('stages')->join('societes','stages.societe_id','=','societes.id')->select('societes.nom','societes.adresse','stages.id','stages.type','stages.date_debut','stages.date_fin')->get();
        // $demande->type = $request['type'];
        // $demande->date_debut = $request['date_debut'];
        // $demande->date_fin = $request['date_fin'];

        // $demande->user_id = Auth::id();


        // $demande->save();
        return redirect()->route('demande.index');
    }
}
