<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
  	protected $user;
    // contructor de modelo para uso en cualquier método
    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
       return view('frontend.pages.count');
    }

    public function create()
    {
      return view('frontend.partials.modal');
    }

    public function store(Request $request)
    {
	   //dd($request->all());
		$nombre=$request->nombre;
		$apellido=$request->apellido;
		$correo=$request->correo;
		$pass=$request->pass;
		$pass2=$request->pass2;
		if ($pass==$pass2) {

		//consulta para verificar de que el correo no haya sido registrado anteriomente
		$existe= $this->user->where('email',  $correo)->get();
		if(count($existe) >= 1){
			return redirect()->back() ->with('alert', 'El correo electronico ya ha sido registrado anteriormente');
		}
		else{
			//guardar usuario
			$this->user->create([
	            'name' => $request->name,
	            'email' => $request->correo,
	            'password' => bcrypt($pass),
	        ]);
	        return redirect()->back() ->with('alert', 'Usuario registrado con éxito');
		}
		
		return back();
		}
		else{
		return redirect()->back() ->with('alert', 'La clave no coincide!');

   		}
      // return view('frontend.pages.count');


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
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    }
}
