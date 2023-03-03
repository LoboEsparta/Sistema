<?php

namespace App\Http\Controllers;

use App\Models\logins;
use App\Models\radiouhfs;
use Illuminate\Http\Request;

class LoginsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosvista['datos']=radiouhfs::paginate(5);
        return view('vista', $datosvista);
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
    public function show(logins $logins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formato=radiouhfs::findOrFail($id);
        return view('estructura', compact('formato')); 
        //Aqui se escribe el mismo nombre de la variable arriba
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, logins $logins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(logins $logins)
    {
        //
    }
}
