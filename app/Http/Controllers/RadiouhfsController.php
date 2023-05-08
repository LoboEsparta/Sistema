<?php

namespace App\Http\Controllers;

use App\Models\radiouhfs;
use App\Models\radiouhfdos;
use App\Models\radios;
use App\Models\User;
use Illuminate\Http\Request;

class RadiouhfsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosusuario['personal']=User::paginate();
        $prod = radios::all();
        //return view('radiouhf', $datosusuario,);
        return view ('radiouhf', compact('prod','datosusuario'));
    }

    public function findmarca ( Request $request)
    {
        $p = radios::select('Marca')->where('Serie',$request
        ->id)->first();
        return response()->json($p);
    }

    public function findmodelo ( Request $request)
    {
        $p = radios::select('Modelo')->where('Serie',$request
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
            'Cedula',
            'Repetidor',
            'UTR',
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
    
            radiouhfdos::insert($datos2);
            radiouhfs::insert($datos);
            //return response()->json($datos2);
            return view('home');





    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formato=User::findOrFail($id);
        return view('radiouhf', compact('formato')); 
        
        //Aqui se escribe el mismo nombre de la variable arriba
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
