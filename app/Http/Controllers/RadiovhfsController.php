<?php

namespace App\Http\Controllers;

use App\Models\radiovhfs;
use Illuminate\Http\Request;

class RadiovhfsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('radiovhf');
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

        radiovhfs::insert($datos);
        /*return response()->json($datos);*/
        return view('radiovhf');
    }

    /**
     * Display the specified resource.
     */
    public function show(radiovhfs $radiovhfs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formato=radiovhfs::findOrFail($id);
        return view('estructura', compact('formato')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, radiovhfs $radiovhfs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(radiovhfs $radiovhfs)
    {
        //
    }
}
