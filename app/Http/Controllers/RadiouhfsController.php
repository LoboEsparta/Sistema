<?php

namespace App\Http\Controllers;

use App\Models\radiouhfs;
use Illuminate\Http\Request;

class RadiouhfsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('radiouhf');
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
        $datos = request()->except('_token');
        if($request->hasFile('Foto')){
            $datos['Foto']=$request->file('Foto')->store('uploads','public');
        }
        if($request->hasFile('Fotodos')){
            $datos['Fotodos']=$request->file('Fotodos')->store('uploads','public');
        }
        if($request->hasFile('Fototres')){
            $datos['Fototres']=$request->file('Fototres')->store('uploads','public');
        }

        radiouhfs::insert($datos);
        /*return response()->json($datos);*/
        return view('radiouhf');
    }

    /**
     * Display the specified resource.
     */
    public function show(radiouhfs $radiouhfs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(radiouhfs $radiouhfs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, radiouhfs $radiouhfs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(radiouhfs $radiouhfs)
    {
        //
    }
}
