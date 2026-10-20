<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendariController extends Controller
{
    public function index() {
        $calendari = [
            [
            'Id'=> 0,
            'Nom'=>'Concurs de Castells',
            'Població'=>'Tarragona',
            'Hora'=>'3/10 12:00 h'
            ],
            [
                'Id'=> 1,
                'Nom'=>'Tots Sants',
                'Població'=>'Vilafranca del Penedès',
                'Hora'=>'1/11 12:00 h'
            ],
            [
                'Id'=> 2,
                'Nom'=>'Diada dels Castellers de Gràcia',
                'Població'=>'Barcelona',
                'Hora'=>'8/11 12:00 h'
            ]
        ];

        return view('calendari')->with('calendari', $calendari);
    } 

}
