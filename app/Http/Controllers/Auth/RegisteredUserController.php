<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\personals;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string','max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'serie' => ['required', 'string', 'max:255'],
        ]);

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'serie' => $request['serie'],
        ]);

        //$datos = request()->except(
          //  '_token','email','password_confirmation'
        //);
        //User::insert($datos);
        //personals::insert($datos);
        //return response()->json($datos);

        return to_route('principal')->with('status','Cuenta creada');
    }
}
