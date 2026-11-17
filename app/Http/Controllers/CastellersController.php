<?php

namespace App\Http\Controllers;

use App\Models\Casteller;
use Illuminate\Http\Request;

class CastellersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $castellers = Casteller::all();

        return view('castellers.index', compact('castellers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('castellers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'nom' => 'required|string|min:5',
            'posicio' => 'required',
        ]));

        Casteller::create($request->all());

        return redirect()->route('castellers.index')->with('success', 'Casteller afegit!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Casteller $casteller)
    {
        return view('castellers.show', compact('casteller'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Casteller $casteller)
    {
        return view('castellers.edit', compact('casteller'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Casteller $casteller)
    {
        $request->validate(([
            'nom' => 'required|string|min:5',
            'posicio' => 'required',
        ]));

        $casteller->update($request->all());

        return redirect()->route('castellers.index')->with('success', 'Casteller actualitzat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casteller $casteller)
    {
        $casteller->delete();

        return redirect()->route('castellers.index')
            ->with('success', 'Casteller eliminat');
    }
}
