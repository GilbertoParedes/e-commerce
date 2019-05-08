<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Direction;
use Illuminate\Support\Facades\Auth;

class DirectionController extends Controller
{
    protected $direccion;
      // contructor de modelo para uso en cualquier método
    function __construct(Direction $direccion)
    {
        $this->direccion = $direccion;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     if (Auth::check()) {
         $valor=1;
         //extraer id del usuario
        $id_usuario=Auth::id();    
        $estado=$request->estado;
        $municipio=$request->municipio;
        $calle=$request->calle;
        $colonia=$request->colonia;
        $cp=$request->cp;
        $telefono=$request->tel;
        $numero=$request->numero;
        $pais='Mexico';
        $this->direccion->create([
            'pais' => $pais,
            'estado' => $estado,
            'municipio' => $municipio,
            'calle' => $calle,
            'colonia' => $colonia,
            'cp' => $cp,
            'telefono' => $telefono,
            'numero' => $numero,
            'usuario_id' => $id_usuario
        ]);
        return redirect()->back()->with('validar',$valor)->with('alert', 'Dirección registrada con éxito!');
     }   
     else{
        $valor=0;
        return redirect('index')->with('validar',$valor)->with('alert', 'Inicia sesión para poder añadir direcciones a tu cuenta!');
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $share = $this->direccion->find($id);
     $share->delete();
     return redirect()->back()->with('success', 'La dirección ha sido eliminada');
     return redirect('/cuenta')->with('success', 'El producto ha sido eliminado');
    }    

}
