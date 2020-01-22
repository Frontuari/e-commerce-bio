<?php

namespace App\Http\Controllers\API;

use App\Orders;
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
        $a=Orders::where('status','A')->get();
        return $this->sendResponse($a);
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
     //   $orden->users_id=1;  #ID DEL USUARIO LOGUEADO

        if($r->sub_total){

            try{
                $orden->sub_total=$r->sub_total;
                $orden->total_pay=$r->total_pay;
                $orden->total_tax=$r->total_tax;
                $orden->total_packaging=$r->total_packaging;
                $orden->order_address_id=$r->order_address_id;
                $orden->transports_id=$r->transports_id;
                $orden->delivery_time_date=$r->delivery_time_date;
                $orden->discount=$r->discount;
                $orden->packagings_id=$r->packagings_id;
                $orden->currency_rate=$r->currency_rate;
                $orden->coins_id=$r->coins_id;

                $orden->save();
             }
             catch(\Exception $e){
               
                return $this->sendError($this->manejar_error($e));
             }


           
            return $this->sendResponse($orden);

            
        }else{
            
            return $this->sendError();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders,$id)
    {
        $a= $orders->where('id',$id)->get();
        return $this->sendResponse($a);
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
