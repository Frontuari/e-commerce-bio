<?php

namespace App\Http\Controllers\API;

use App\Orders;
use App\OrderProducts;
use App\BankOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\DB;
class OrdersController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=Orders::get();
        if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
            $a = DB::table('orders')
            ->select("orders.*",DB::raw("(SELECT (SELECT name FROM orders_status WHERE orders_status.id = trackings.orders_status_id) 
            FROM trackings 
            WHERE trackings.orders_id = orders.id
            order by created_at DESC Limit 1) AS namestatus"))
            ->join("order_address","orders.order_address_id","=","order_address.id")
            ->join("users","users.id","=","order_address.users_id")
            ->where("orders.users_id",$_SESSION["usuario"]["id"])
            ->get();
        }
        return $this->sendResponse($a);
    }

    public function getProducts($id) {
        $a = NULL;
        if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
            $a = DB::table("order_products")
            ->select("products.*","order_products.cant as cantidad")
            ->join("products","products.id","=","order_products.products_id")
            ->where("order_products.orders",$id)
            ->get();
        }
        return $this->sendResponse($a);
    }

    public function estadistica_ano(){
        $a=DB::select("SELECT date_part('month', created_at) as mes, count(id) FROM orders where created_at>=NOW() - interval '1 YEAR' group by date_part('month', created_at)");

//return $this->sendResponse($a);
        $arr['labels']=array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
        $arr['datasets'][0]=array(
            'label'               => 'Pedidos',
            'backgroundColor'       =>'#28b67a',
            'fillColor'           => '#28b67a',
            'strokeColor'         => '#13945C',
            'pointColor'         => '#13945C',
            'pointStrokeColor'    => 'rgba(60,141,188,1)',
            'pointHighlightFill'  => '#80bc00',
            'pointHighlightStroke'=> 'rgba(60,141,188,1)');
            //echo json_encode($arr);
          //  print_r($a);
           // exit();
         // data                : [28, 48, 40, 19, 86, 27, 90,200]
         foreach($arr['labels'] as $cod=>$mes){

            foreach ($a as $valor){
                if($valor->mes==($cod+1)){
                    $arr['datasets'][0]['data'][$cod]=$valor->count;
                }else{
                    if(!isset($arr['datasets'][0]['data'][$cod])){
                    $arr['datasets'][0]['data'][$cod]=0;
                    }
                }
                
            }
         }

        return json_encode($arr);

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
    public function store(Request $r)
    {
        $orden = new Orders;
        $ordenProduct = new OrderProducts;
        $bankOrder = new BankOrder;
        $datum = $r->all();
        $order = json_decode($datum["order"]);
        // $image = $r->file('payment_img');
        // $destinationPath = 'storage';
        
        $orden->users_id = $order->user_id;
        $orden->sub_total = $order->total;
        $orden->total_pay = $order->total;
        $orden->total_tax = 0;
        $orden->total_packaging = 0;
        $orden->total_transport = 0;
        if($order->direction == 0 )
            $orden->order_address_id = NULL;
        else
            $orden->order_address_id = $order->direction;
        $orden->transports_id = 1;
        $orden->user_rating = 0;
        $orden->delivery_time_date = date("Y-m-d H:i:s",strtotime("+2 hours"));
        $orden->discount = 0;
        $orden->exento = 0;
        $orden->bi = 0;
        $orden->packagings_id = 1;
        $orden->currency_rate = 0;
        $orden->opinion = '';
        $orden->coins_id = 1;
        $orden->rate_json = NULL;
        // $orden->image = "/".$destinationPath."/".$image->getClientOriginalName();

        // $orden->save();

        $pagosReturn = [];
        foreach ($order->payment as $key => $pay) {
            if($pay->account != '0') {
                $bankOrder->amount = floatval($pay->amount);
                $bankOrder->orders_id = $orden->id;
                $bankOrder->bank_datas_id = $pay->account;
                $bankOrder->ref = $pay->red;
                $bankOrder->image = '';
                $bankOrder->save();
                array_push($pagosReturn,$bankOrder);
            }
        }
        $productsReturn = [];
        foreach ($order->products as $key => $product) {
            $cantidad = $product->cant;
            $producto = $product->product;
            
            $ordenProduct->cant = $cantidad;
            $ordenProduct->price = $producto->price;
            $ordenProduct->total = $producto->price * $cantidad;
            $ordenProduct->orders = $orden->id;
            $ordenProduct->deduction = 0; 
            $ordenProduct->products_id = $producto->id;
            $ordenProduct->save();
            array_push($productsReturn,$ordenProduct);
        }

        // $image->move($destinationPath,$image->getClientOriginalName());
        $response = [];
        $response["order"] = $orden;
        $response["pagos"] = $pagosReturn;
        $response["productos"] = $productsReturn;
        return $this->sendResponse($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders,$id)
    {
        $response = [];
        $a = DB::table('orders')
        ->select("orders.*","order_address.*",DB::raw("(SELECT (SELECT name FROM orders_status WHERE orders_status.id = trackings.orders_status_id) 
        FROM trackings 
        WHERE trackings.orders_id = orders.id
        order by created_at DESC Limit 1) AS namestatus"))
        ->join("order_address","orders.order_address_id","=","order_address.id")
        ->join("users","users.id","=","order_address.users_id")
        ->where("orders.id",$id)
        ->get();

        $products = DB::table("order_products")
        ->select("products.id","products.name as nombre","order_products.cant as cantidad")
        ->join("products","products.id","=","order_products.products_id")
        ->where("order_products.orders",$id)
        ->get();

        $response["order"] = $a[0];
        $response["products"] = $products;
        return $this->sendResponse($response);
    }



    public function set_qualify(Orders $orders, Request $r){
        if(!$r->user_rating) return $this->sendError("Debe calificar la orden.");
        if($r->user_rating>5) $r->user_rating=5;


        try{
            $users_id=1;    #USUARIO DE LA SESSION
            DB::table('orders as o')->where('o.id', $r->id)->where('order_address.users_id',$users_id)->join('order_address', 'order_address.id', '=', 'o.order_address_id')
            ->update(
                [
                    'user_rating' => $r->user_rating,
                    'opinion'=>"$r->opinion"
                 ]
            );

         }
         catch(\Exception $e){
           
            return $this->sendError($this->manejar_error($e));
         }
         return $this->sendResponse($orders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders,$id)
    {
      //  $orders = new Orders;
      exit();
        $orders->find($id)->update($request->all());
        exit();
        echo $orders->sub_total;
        
        exit();
        $a= $orders->where('id',$id)->get();
        echo print_r($a);
       
        exit();
        $orders->opinion=$request->opinion;
        $orders->save();
        //$orders->find($id)->update($request->all());


       // $orders->find($id);
       // $orders->id=$request->id;
       // $orders->opinion=$request->opinion;
       // echo $orders->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
