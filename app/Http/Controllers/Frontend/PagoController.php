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
use App\User;
use App\Pagos;

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
   protected $user;
   protected $pagos;
  
   function __construct(Product $product, Category $cat, ProductoCategoria $product_cat, Deseable $deseable,ComprarAhora $comprarahora, Carrito $carrito,Pago $pago, Direction $direction,CarritoProducto $carrito_producto, User $user, Pagos $pagos)
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
        $this->user=$user;
        $this->pagos=$pagos;

   }

   public function index()
    {

        if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();
            $type_pay=0;
            $productos = $this->product->all();
            //extraer correo electronico   
                 $correo_user=$this->user
                ->where('id',  $id_usuario)
                ->get();  
                foreach ($correo_user as $value) {
                    $email=$value->email;
                }
             $api_key="4Vj8eK4rloUd272L48hsrarnUA";
                   $merchantId="508029";
                   $accountId="512324";
                   $description="Test PAYU";
                   $referenceCode="TestPayU";
                   $tax="0";
                   $taxReturnBase="0";
                   $currency="MXN";
                   $test="1";
                   $responseUrl="http://ecommerce.test/public/respuesta";
                   $confirmationUrl="http://pagos.syslacstraining.com/pagos/confirmacionpagos";


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
                          foreach ($BuscarTarjeta as $tipo) {
                              $type_pay=$tipo->type_pay;
                          }                     

                         //contar registros de tarjetas
                        $contar_Tarjetas=count($BuscarTarjeta);
                        
                        //si tiene una o mas tarjetas 
                        if ($contar_Tarjetas>0) {
                          return view('frontend.pages.pago')
                         ->with('validar',$valor)
                         ->with('tarjetas',$contar_Tarjetas)
                         ->with('BuscarTarjeta',$BuscarTarjeta)
                         ->with('type_pay',$type_pay)
                         ->with('producto_carrito',$buscar_productos)
                         ->with('productos',$productos)
                         ->with('merchantId',$merchantId)
                          ->with('accountId',$accountId)
                          ->with('description',$description)
                          ->with('referenceCode',$referenceCode)
                          ->with('tax',$tax)
                          ->with('taxReturnBase',$taxReturnBase)
                          ->with('currency',$currency)
                          ->with('api_key',$api_key)
                          ->with('test',$test)
                          ->with('buyerEmail',$email)
                          ->with('responseUrl',$responseUrl)
                          ->with('confirmationUrl',$confirmationUrl)
                         ;

                         
                        }
                        else{
                          return view('frontend.pages.pago')
                         ->with('validar',$valor)
                         ->with('tarjetas',$contar_Tarjetas)
                         ->with('type_pay',$type_pay)
                         ->with('producto_carrito',$buscar_productos)
                         ->with('productos',$productos)
                         ->with('merchantId',$merchantId)
                        ->with('accountId',$accountId)
                        ->with('description',$description)
                        ->with('referenceCode',$referenceCode)
                        ->with('tax',$tax)
                        ->with('taxReturnBase',$taxReturnBase)
                        ->with('currency',$currency)
                        ->with('api_key',$api_key)
                        ->with('test',$test)
                        ->with('buyerEmail',$email)
                        ->with('responseUrl',$responseUrl)
                        ->with('confirmationUrl',$confirmationUrl);
                        

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
    public function show($id)
    {
        //
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
    public function getObtenerinformacionpago($monto){

    /*  $email_cliente="lauratopaciovaldez@gmail.com";
      $api_key="4Vj8eK4rloUd272L48hsrarnUA";
          $info_pago=new stdClass();
          $info_pago->merchantId="508029";
          $info_pago->accountId="512324";
          $info_pago->description="MIS VENTAS HANA";
          $info_pago->referenceCode="PAGOS"
          $info_pago->amount=$monto;
          $info_pago->tax="0";
          $info_pago->taxReturnBase="0";
          $info_pago->currency="MXN";
          $info_pago->signature=md5($api_key."~".$info_pago->merchantId."~".$info_pago->referenceCode."~".$monto."~MXN");
          $info_pago->test="1";
          $info_pago->buyerEmail=$email_cliente;
          $info_pago->responseUrl="http://ecommerce.test/public/pagos/respuestapagos";
          $info_pago->confirmationUrl="http://ecommerce.test/public/pagos/confirmacionpagos";
          return  json_encode($info_pago);
   /*  if (Auth::check()) {
        $id_usuario=Auth::id();
      
        //extraer correo electronico del ciente
        $usuario_select=$this->user->where('id',  $id_usuario)->get();
           foreach ($usuario_select as $getCorreo) {
                $email_cliente=$getCorreo->email;
            }
      
          
      }
      else{
                //redireccionar al inicio
      }*/
    }
    public function getRespuestapagos(Request $request)
  {

    $merchantId =$_REQUEST['merchantId'];
    $processingDate =$_REQUEST['processingDate'];
    $buyerEmail=$_REQUEST['buyerEmail'];
    $transactionId = $_REQUEST['transactionId'];
    $merchant_name=$_REQUEST['merchant_name'];
    $merchant_address=$_REQUEST['merchant_address'];
    $telephone=$_REQUEST['telephone'];
    $merchant_url=$_REQUEST['merchant_url'];
    $transactionState=$_REQUEST['transactionState'];
    $lapTransactionState=$_REQUEST['lapTransactionState'];
    $message=$_REQUEST['message'];
    $referenceCode=$_REQUEST['referenceCode'];
    $reference_pol=$_REQUEST['reference_pol'];
    $transactionId=$_REQUEST['transactionId'];
    $description=$_REQUEST['description'];
    $trazabilityCode=$_REQUEST['trazabilityCode'];
    $cus=$_REQUEST['cus'];
    $orderLanguage=$_REQUEST['orderLanguage'];
    $extra1=$_REQUEST['extra1'];
    $extra2=$_REQUEST['extra2'];
    $extra3=$_REQUEST['extra3'];
    $polTransactionState=$_REQUEST['polTransactionState'];
    $signature=$_REQUEST['signature'];
    $polResponseCode=$_REQUEST['polResponseCode'];
    $lapResponseCode=$_REQUEST['lapResponseCode'];
    $risk=$_REQUEST['risk'];
    $polPaymentMethod=$_REQUEST['polPaymentMethod'];
    $lapPaymentMethod=$_REQUEST['lapPaymentMethod'];
    $polPaymentMethodType=$_REQUEST['polPaymentMethodType'];
    $lapPaymentMethodType=$_REQUEST['lapPaymentMethodType'];
    $installmentsNumber=$_REQUEST['installmentsNumber'];
    $TX_VALUE=$_REQUEST['TX_VALUE'];
    $TX_TAX=$_REQUEST['TX_TAX'];
    $currency=$_REQUEST['currency'];
    $lng=$_REQUEST['lng'];
    $pseCycle=$_REQUEST['pseCycle'];
    $buyerEmail=$_REQUEST['buyerEmail'];
    $pseBank=$_REQUEST['pseBank'];
    $pseReference1=$_REQUEST['pseReference1'];
    $pseReference2=$_REQUEST['pseReference2'];
    $pseReference3=$_REQUEST['pseReference3'];
    $authorizationCode=$_REQUEST['authorizationCode'];
    //extraer usuario que inicio sesion
    if (Auth::check()) {
            $valor=1;
            $id_usuario=Auth::id();

            //buscar id de carrito en proceso
            //buscar carrito de compras
            $carrito_proceso=$this->carrito
                    ->where('usuario_id',  $id_usuario)
                    ->where('status',  0)
                    ->orderby('created_at','DESC')->take(1)->get();
            
            foreach ($carrito_proceso as $carr) {
                    $id_carrito=$carr->id;
                
                if($transactionState==4)
                    {
                    //guardar en tabla pagos
                     $this->pagos->create([
                          'idtransaction' => $transactionId,
                          'status' =>  $transactionState,
                          'usuario_id' =>  $id_usuario,
                          'carrito_id' =>  $id_carrito 
                     ]);
                     //modificar datos de carrito para terminar la compra
                     $val=1;
                   
                     $contatenar=array('status' => $val,  'fecha_fin'=>$processingDate);
                     $carritoFinalizar = Carrito::find($id_carrito);
                     $carritoFinalizar->update($contatenar);

                    }
                else{
                  //mandar pantalla de error de pago
                }
            } 
     }
    else{
            $valor=0;
    }
    if ($transactionState==4) {
        return redirect('finalizar_compra')->with('validar',$valor);
    }
    else{
       return redirect('index')->with('validar',$valor)->with('alert', 'Error en el pago!');
    }
    

  }
    public function getConfirmacionpagos(){

    }
}