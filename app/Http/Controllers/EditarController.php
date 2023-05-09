<?php

namespace App\Http\Controllers;

use App\Models\editar;
use App\Models\User;
use App\Models\radios;
use Illuminate\Http\Request;

class EditarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function show(editar $editar)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formato=radios::findOrFail($id);
        return view('editar', compact('formato')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        radios::where('id','=', $id )->update($datos);

        $formato=radios::findOrFail($id);
        return view('editar', compact('formato')); 
        //return response()->json($datos);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('personal');
    }
}
