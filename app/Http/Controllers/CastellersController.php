<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastellersController extends Controller
{
    public function index() {
        return view('castellers');
    }

    public function alta(Request $req) {
        $req->validate(([
            'nom'=>'required|string|min:5',
            'posició'=>'required'
        ]));

        return redirect()->route('castellers.alta')->with('status', "Casteller donat d'alta correctament");
    } 
}
