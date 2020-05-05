<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AppController extends Controller
{
    public function index()
    {
        //$meals = Meal::all();
        //return view('welcome', compact('meals'));
    }

    public function home()
    {
        return view('home');
    }

   
}
