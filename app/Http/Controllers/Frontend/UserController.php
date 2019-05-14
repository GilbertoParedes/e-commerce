<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Direction;
use App\Carrito;
use App\CarritoProducto;
use App\Product;
use App\Deseable;

class UserController extends Controller
{
  	protected $user;
    protected $direccion;
    protected $carrito;
    // contructor de modelo para uso en cualquier método
    function __construct(User $user,Direction $direccion,Carrito $carrito,CarritoProducto $carritoproducto, Product $producto,Deseable $deseable)
    {
        $this->user = $user;
        $this->direccion = $direccion;
        $this->carrito=$carrito;
        $this->carritoproducto=$carritoproducto;
        $this->producto=$producto;
        $this->deseable=$deseable;
    }
   
    public function index()
    {
     if (Auth::check()) {
         $valor=1;
         $id_usuario=Auth::id();
         //consulta de usuario
         $usuarios =$this->user->where('id',  $id_usuario)->get();
     
         //consulta de direcciones
         $dir =$this->direccion->where('usuario_id',  $id_usuario)->get();
         //contar registros de direcciones
         $cantidad_direcciones=count($dir);
         //buscar si el usuario ya ha finalizado alguna compra
         $carrito_finalizado=$this->carrito
         ->where('usuario_id',$id_usuario)
         ->where('status',1)
         ->get();
         $cantidad_finalizado=count($carrito_finalizado);
     
        //consulta de todos los productos
        $productos = $this->producto->all();

        //consulta para ver todos los productos añadidos a favoritos por el usuario
        $deseable_buscar=$this->deseable->where('user_id',  $id_usuario)->get();

        if ($cantidad_finalizado>0) {
            foreach ($carrito_finalizado as $carr) {
              $id_carritos_finalizados=$carr->id;
              $carrito_producto =$this->carritoproducto->where('carrito_id',$id_carritos_finalizados)->get();
              return view('frontend.pages.count')
                 ->with('validar',$valor)
                 ->with('usuarios',$usuarios)
                 ->with('dir',$dir)
                 ->with('cantidad_direcciones',$cantidad_direcciones)
                 ->with('cantidad_finalizado',$cantidad_finalizado)
                 ->with('carrito_producto',$carrito_producto)
                 ->with('deseable_buscar',$deseable_buscar)
                 ->with('productos',$productos); 
            }
             
        } 
        else{
        $carrito_producto=" ";
        return view('frontend.pages.count')
         ->with('validar',$valor)
         ->with('usuarios',$usuarios)
         ->with('dir',$dir)
         ->with('cantidad_direcciones',$cantidad_direcciones)
         ->with('cantidad_finalizado',$cantidad_finalizado)
         ->with('carrito_producto',$carrito_producto);
        }
         
     }
     else{
        $valor=0;
        return view('frontend.pages.index')->with('validar',$valor);
     }
    
      
    }

    public function create()
    {
      return view('frontend.partials.modal');
    }

    public function store(Request $request)
    {
	   //dd($request->all());
		$nombre=$request->name;
		$apellido_p=$request->apellido_p;
        $apellido_m=$request->apellido_m;
        $sexo=$request->sexo;
        $edad=$request->edad;
        $aniversario=$request->aniversario;
        $type_user='Client';
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
	            'name' => $nombre,
                'apellido_p'=>$apellido_p,
                'apellido_m'=>$apellido_m,
                'sexo'=>$sexo,
                'edad'=>$edad,
                'aniversario'=>$aniversario,
                'type_user'=>$type_user,
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
        $usuarios= $this->user->where('id',  $id)->get();
        return view('frontend.partials.modal_editar_cuenta')->with('user',$usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {

        $nombre=$request->nombre;
        $apellido_p=$request->apellido_p;
        $apellido_m=$request->apellido_m;
        $correo=$request->email;
        $pass=$request->pass_anterior;
        $pass2=$request->pass_nueva;
        $pass3=$request->pass_otra;
        $conv_pass=Hash::make($request->pass_anterior);
        //consulta si la contraseña es la misma que la que esta registrada
        $validar_pass= $this->user
        ->where('id',  $user_id)
        ->get();
        $cont=count($validar_pass);
        // validar contraseña 

        foreach ($validar_pass as $item) {
             $password=$item->password;
            if ($pass2==$pass3) {

                 //modificar datos del usuario

            $modificar_usuario = $this->user->find($user_id);
            $modificar_usuario->update($request->all());
            return back();
       
             }
             else{
                dd("no coinciden");
             }
        }


      

        //si si es

        //else
            //      
    //  $productoModificar = Product::find($id);
      //$productoModificar->update($request->all());
      

     // return redirect('count')->with('success', 'modificar');
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
