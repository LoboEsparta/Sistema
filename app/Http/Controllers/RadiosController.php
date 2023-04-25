<?php

namespace App\Http\Controllers;

use App\Models\radios;
use Illuminate\Http\Request;

class RadiosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ("radios");
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
    
            radios::insert($datos);
            //return response()->json($datos);
            return view('principal');
    }

    /**
     * Display the specified resource.
     */
    public function show(radios $radios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(radios $radios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, radios $radios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(radios $radios)
    {
        //
    }
}
