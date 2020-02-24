<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use App\OrderAddress;

class OrderAddressController extends BaseController
{
    public function update($id,Request $request) {
        if(isset($_SESSION["usuario"])) {
            $user_id = $_SESSION["usuario"]["id"];
            $datos = $request->all();
            $order = OrderAddress::find($id);
            $order->cities_id = $datos["cities_id"];
            $order->address = $datos["address"];
            $order->status = $datos["status"];
            $order->users_id = $datos["users_id"];
            $order->zip_code = $datos["zip_code"];
            $order->urb = $datos["urb"];
            $order->sector = $datos["sector"];
            $order->nro_home = $datos["nro_home"];
            $order->reference_point = $datos["reference_point"];
            $order->save();

            //haremos la consulta SQL para devolver nuevamente las direcciones
            //$_SESSION["usuario"]["directions"]


            //return $this->sendResponse($order);
            echo json_encode($this->getData($id));
            
        }
        return $this->sendError(101);
    }

    public function store(Request $request) {
        if(isset($_SESSION["usuario"])) {
            $user_id = $_SESSION["usuario"]["id"];
            $datos = $request->all();
            $order = new OrderAddress;

            $order->cities_id = $datos["cities_id"];
            $order->address = $datos["address"];
            $order->status = $datos["status"];
            $order->users_id = $datos["users_id"];
            $order->zip_code = $datos["zip_code"];
            $order->urb = $datos["urb"];
            $order->sector = $datos["sector"];
            $order->nro_home = $datos["nro_home"];
            $order->reference_point = $datos["reference_point"];
            $order->save();
            return $this->sendResponse($order);
        }
        return $this->sendError(101);
    }

    public function getData($id)
    {
        /* $datos = OrderAddress::select("order_address.*,cities.id,cities.name")
        ->from("order_address")
         ->join("cities","cities.id","=","order_address.cities_id")
        ->where("order_address.users_id",$user_id)
        ->first();
        $_SESSION["usuario"]["directions"]=$datos;
        return $datos;*/

        $datos = DB::select("SELECT o.*,c.id as city_id,c.name as ciudad FROM order_address as o
            INNER JOIN cities c on c.id = o.cities_id
            WHERE o.users_id = ".$id." and o.status = 'A'")->get();

        $_SESSION["usuario"]["directions"] = $datos;

    }

}
