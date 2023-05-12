<?php

namespace App\Http\Controllers;

use App\Models\radiovhfs;
use App\Models\radiovhfdos;
use App\Models\User;
use App\Models\radios;
use Illuminate\Http\Request;

class RadiovhfsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosusuario['personal']=User::paginate();
        $prod = radios::all();
        //return view('radiouhf', $datosusuario,);
        return view ('radiovhf', compact('prod','datosusuario'));

    }
    
    public function findmarca ( Request $request)
    {
        $p = radios::select('Marca','Serie','Responsable')->where('Economico',$request
        ->id)->first();
        return response()->json($p);
    }

    public function findmodelo ( Request $request)
    {
        $p = radios::select('Modelo','Oficina','rpe')->where('Economico',$request
        ->id)->first();
        return response()->json($p);
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
        
        $datos = request()->except(
            'usuario',
            'rpe',
            'inspecciono',
            'textarea',
            'tabla1',
            'tabla2',
            'tabla3',
            'tabla4',
            'tabla5',
            'tabla6',
            'tabla7',
            'tabla8',
            'tabla9',
            'tabla10',
            'tabla11',
            'tabla12',
            'tabla13',
            'tabla14',
            'Antena',
            'Cable',
            'Conectores',
            'Bocina',
            'Control',
            'Cabeza',
            'Terminal',
            'Cableado',
            'Fusible',
            'Portafusible',
            'Terminalb',
            'Cargadorbat',
            'Limpieza',
            'Bateria',
            'Respaldo',
            'Tierras',
            'VoBo',
            '_token'
        );
    
            $datos2 = request()->except(
            'area',
            'tipo',
            'fecha',
            'Movil',
            'Portatil',
            'Base',
            'Repetidor',
            'Otros',
            'Mantenimiento',
            'Ubicacion',
            'Responsable',
            'Oficina',
            'Direccion',
            'Marca',
            'Modelo',
            'Serie',
            'Potencia',
            'Reflejo',
            'Modulacion',
            'Sensibilidad',
            'Frec',
            'Señal',
            'RX',
            'Tx',
            'VCA',
            'VCD',
            'Cargador',
            'Banco',
            'Inversor',
            'Foto',
            'Fotodos',
            'Fototres',
            '_token');
    
    
    
    
            if($request->hasFile('Foto')){
                $datos['Foto']=$request->file('Foto')->store('uploads','public');
            }
            if($request->hasFile('Fotodos')){
                $datos['Fotodos']=$request->file('Fotodos')->store('uploads','public');
            }
            if($request->hasFile('Fototres')){
                $datos['Fototres']=$request->file('Fototres')->store('uploads','public');
            }
    
            radiovhfdos::insert($datos2);
            radiovhfs::insert($datos);        
            //return response()->json($datos);
            return view('home');
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
        $formatito=radiovhfdos::findOrFail($id);
        $formato=radiovhfs::findOrFail($id);
        return view('estructura', compact('formato','formatito')); 
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
