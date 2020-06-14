<?php

namespace App\Http\Controllers;

use App\demande;
use App\stage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index(Request $request){
        $demande = new demande;
        $demande->id = uniqid();
        $demande->user_id = Auth::id();
        $demande->stage_id = $request->get('id');
        $demande->state=1;
        $demande->save();
        return redirect()->route('demande.index');

    }


}