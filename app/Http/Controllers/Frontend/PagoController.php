<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductoCategoria;
use App\Deseable;
use App\ComprarAhora;
use App\Carrito;
use App\CarritoProducto;
use App\Pago;
use App\Direction;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PagoRequest;
class PagoController extends Controller
{
   protected $product;
   protected $cat;
   protected $product_cat;
   protected $deseable; 
   protected $comprarahora;
   protected $carrito;
   protected $pago;
   protected $carrito_producto;
   function __construct(Product $product, Category $cat, ProductoCategoria $product_cat, Deseable $deseable,ComprarAhora $comprarahora, Carrito $carrito,Pago $pago, Direction $direction,CarritoProducto $carrito_producto)
   {
        $this->product = $product;
        $this->cat = $cat;
        $this->product_cat=$product_cat;
        $this->deseable=$deseable;
        $this->comprarahora=$comprarahora;
        $this->carrito=$carrito;
        $this->direction=$direction;
        $this->carrito_producto=$carrito_producto;
        $this->pago=$pago;

   }

   public function index()
    {
        if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();
             
            //buscar carrito de compras
            $carrito_proceso=$this->carrito
                    ->where('usuario_id',  $id_usuario)
                    ->where('status',  0)
                    ->orderby('created_at','DESC')->take(1)->get();
            $contar_carrito=count($carrito_proceso); 
          

            //buscar direciones
            $buscar_direcciones=$this->direction
                      ->where('usuario_id',  $id_usuario)
                      ->get();
            //contar direcciones
            $contar_direcciones=count($buscar_direcciones);    
            //si existe registro de carrito con status en proceso
            if ($contar_carrito>0) {

            foreach ($carrito_proceso as $value_carrito) {
                $id_carrito=$value_carrito->id;
                  //consulta de carrito_producto
                $buscar_productos=$this->carrito_producto
                      ->where('carrito_id',  $id_carrito)
                      ->get();
                $contar_productos_carrito=count($buscar_productos); 
               // dd($contar_productos_carrito);  
                //sino hay productos en el carrito no se puede realizar una compra
                if ($contar_productos_carrito>0) {
                 //dd("hay productos en carrito");
                    //buscar si ya ha registrado una dirección 
                   $BuscarComprarAhora=$this->comprarahora
                    ->where('carrito_id',  $id_carrito)
                    ->orderby('created_at','DESC')->take(1)->get();
                    $contar_comprarAhora=count($BuscarComprarAhora);
                    if ($contar_comprarAhora>0) {
                      foreach ($BuscarComprarAhora as $value_compra) {
                        $id_comprar_ahora=$value_compra->id;
                        //consulta para obtener tarjetas añadidas
                        $BuscarTarjeta=$this->pago
                        ->where('comprar_ahora_id',  $id_comprar_ahora)
                        ->orderby('created_at','DESC')->take(1)->get();

                         //contar registros de tarjetas
                        $contar_Tarjetas=count($BuscarTarjeta);
                        
                        //si tiene una o mas tarjetas 
                        if ($contar_Tarjetas>0) {
                          return view('frontend.pages.pago')
                         ->with('validar',$valor)
                         ->with('tarjetas',$contar_Tarjetas)
                         ->with('BuscarTarjeta',$BuscarTarjeta);

                        }
                        else{
                          return view('frontend.pages.pago')
                         ->with('validar',$valor)
                         ->with('tarjetas',$contar_Tarjetas);
                        }
                        
                      }
                    }
                    else{
                        //si tiene ubicaciones registradas
                        if ($contar_direcciones>0) {
                          return redirect('comprar_parte_1')
                           ->with('validar',$valor)->with('alert', 'primero elije una ubicación');
                        }
                        else{
                            return redirect('comprar')
                           ->with('validar',$valor)->with('alert', 'primero elije una ubicación');
                        }
                    }
                  //redireccionar a elegir direccion dependiendo 
                
                 
                }   
                else{
                    return redirect('index')
                   ->with('validar',$valor)->with('alert', 'Aún no tienes productos añadidos a carrito');
                }
            }
             
            }
            //aun no hay carrito 
            else{
               return redirect('index')
                   ->with('validar',$valor)->with('alert', 'Aún no tienes productos añadidos a carrito');
            } 


        }
        //sino existe carrito en status en proceso
        else{
            $valor=0;
            return redirect('index')
                 ->with('validar',$valor); 
        }
    }
    public function store(PagoRequest $request){
     $type_pay=$request->type_pay;
      $cardholder=$request->cardholder;
      $card_number=$request->card_number;
      $month=$request->month;
      $year=$request->year;
     // dd($type_pay,$cardholder,$card_number,$month,$year);

      if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();
            $validated = $request->validated();
            //buscar carrito de compras
            $carrito_proceso=$this->carrito
                    ->where('usuario_id',  $id_usuario)
                    ->where('status',  0)
                    ->orderby('created_at','DESC')->take(1)->get();
            $contar_carrito=count($carrito_proceso);
           //dd($contar_carrito);        
            foreach ($carrito_proceso as $value) {
              $id_carrito=$value->id;

              $BuscarComprarAhora=$this->comprarahora
              ->where('carrito_id',  $id_carrito)
              ->orderby('created_at','DESC')->take(1)->get();
              $contar_comprarAhora=count($BuscarComprarAhora);
             // dd($contar_comprarAhora);
              //extraer id_compra
             foreach ($BuscarComprarAhora as $value_compra) {
                 $id_comprar_ahora=$value_compra->id;

                 //registrar en la tabla de pago
                  $this->pago->create([
                        'type_pay' => $type_pay,
                        'cardholder' =>  $cardholder,
                        'card_number' =>  $card_number,
                        'month' =>  $month,
                        'year' =>  $year,
                        'comprar_ahora_id' =>  $id_comprar_ahora

                    ]);
                    return redirect('pago')
                   ->with('validar',$valor)->with('alert', 'Tarjeta añadida con éxito!');
              }

            }
            //ultimo comprar ahora 
      }
      else{
         $valor=0;
            return redirect('index')
                 ->with('validar',$valor); 
      }
    }
}