<?php

namespace App\Http\Controllers\API;

use App\PaymentMethods;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\PaymentMethods as PaymentMethodsResource;
class PaymentMethodsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=PaymentMethods::where('status','A')->get();
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
    public function store(Request $request)
    {
        $paymentMethods= new PaymentMethods;
        $paymentMethods->name=$request->name;
        $paymentMethods->description=$request->description;
        $paymentMethods->save();
        return $this->sendResponse($paymentMethods);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo $paymentMethods->id;
       // return PaymentMethodsResource::collection(PaymentMethods::all());
        //return $this->sendResponse(PaymentMethodsResource::collection($paymentMethods->id), 'Brand retrieved successfully.');
        $a= PaymentMethods::where('id',$id)->get();
        return $this->sendResponse($a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethods $paymentMethods)
    {
        //
    }
}
