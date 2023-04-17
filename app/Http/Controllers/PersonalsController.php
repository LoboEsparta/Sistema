<?php

namespace App\Http\Controllers;

use App\Models\personals;
use App\Models\User;
use Illuminate\Http\Request;

class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosusuario['personal']=User::paginate();
        return view('personal', $datosusuario);
    }

    public function ver()
    {
        return view ('principal');
    }

    public function radio()
    {
        return view ('radiouhf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(personals $personals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formato=User::findOrFail($id);
        return view('editar', compact('formato')); 
        
        //Aqui se escribe el mismo nombre de la variable arriba
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personals $personals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personals $personals)
    {
        //
    }
}
