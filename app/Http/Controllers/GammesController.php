<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GammesController extends Controller
{
    public function index() {
        return view('gammes');
    }

    public function calcular(Request $req) {
        $req->validate((['pisos'=>'required|numeric|min:6|max:10']));
        $pisos = $req->input('pisos');
        switch ($pisos) {
            case 6:
            case 7:
                $missatge = "Castell de gamma bàsica o mitjana.";
                break;
            case 8:
                $missatge = "Castell de 8, es recomana folre.";
                break;
            case 9:
                $missatge = "Castell de 9, requereix folre obligatòriament.";
                break;
            case 10:
                $missatge = "<b>Gamma extra!</b> Castell de 10, requereix folre i manilles.";
                break;
        }
        
        return redirect()->route('gammes.index')->with('missatge', $missatge);
    }
}
