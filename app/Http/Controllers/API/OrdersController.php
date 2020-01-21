<?php

namespace App\Http\Controllers\API;

use App\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
class OrdersController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
               
                return $this->sendError($this->manejar_error($e,true));
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
    public function show(Orders $orders)
    {
        //
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
    public function update(Request $request, Orders $orders)
    {
        //
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
