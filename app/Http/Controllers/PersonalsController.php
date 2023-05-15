<?php

namespace App\Http\Controllers;

use App\Models\personals;
use App\Models\radios;
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
        $datosradios['radios']=radios::paginate();
        return view('personal', $datosusuario,$datosradios);
    }

    public function ver()
    {
        return view ('principal');
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
        $formatito=radios::findOrFail($id);
        $formato=User::findOrFail($id);
        return view('editar', compact('formato')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        radios::destroy($id);
        return redirect('personal');
    }
}
