<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exports\PeoplesExport;
use Maatwebsite\Excel\Facades\Excel;

class KpisController extends Controller
{
    public function TransactionsForPeriod(){

    	$title = "Transacciones por Periodo";
    	return view('kpis.transactions_for_period',['title' => $title]);
    }

    public function getData(Request $request){

    	$from = $request->input('date_from');
    	$to = $request->input('date_to');
        $chart = $request->input('chart_name');

    	$data = [];
        $stores_id=$_SESSION['stores_id'];
        switch($chart){

            case 'transactions_for_period':

                $data = DB::select(DB::raw("select 
                    count(id) as qty,
                    to_char(created_at, 'dd/mm/YYYY') as day 
                from orders where stores_id=$stores_id AND status = 'EC'
                and created_at between '$from' and '$to' 
                group by day order by day DESC"));

            break;

            case 'sales_for_period':

                $data = DB::select(DB::raw("select 
                    to_char(o.created_at, 'dd/mm/YYYY') as day,
                    ROUND(SUM((o.total_pay / cast(cast(o.rate_json as json)->2->>'rate' as numeric))), 2) as amount
                from orders as o
                where o.stores_id=$stores_id AND cast(o.rate_json as json)->2->>'symbol' = '$' AND o.status = 'EC'
                and o.created_at between '$from' and '$to'
                group by day
                order by day DESC"));

            break;

            case 'sales_units_for_period':

                $data = DB::select(DB::raw("select 
                    count(p.sku) as qty_sku,
                    to_char(o.created_at, 'dd/mm/YYYY') as day
                from orders as o
                inner join order_products as op on (op.orders = o.id)
                inner join products as p on (p.id = op.products_id)
                where o.stores_id=$stores_id AND o.status = 'EC' and o.created_at between '$from' and '$to'
                group by day
                order by day DESC"));

            break;

        }
    	

    	return response()->json($data);
    }

    public function SalesForPeriod(){
        $title = "Ventas por Periodo";
        return view('kpis.sales_for_period')->with(compact('title'));
    }

    public function SalesUnitsForPeriod(){
        $title = "Unidades Vendidas por Periodo";
        return view('kpis.sales_units_for_period')->with(compact('title'));
    }

    public function export_peoples_all_data(){
        $peoples = DB::select(DB::raw("select 
                                            p.rif,
                                            p.name,
                                            to_char(p.birthdate,'dd-mm-yyyy') as birthdate,
                                            case 
                                                when p.sex = 'm' 
                                                    then 'Masculino'
                                                when p.sex = 'f'
                                                    then 'Femenino'
                                            end as sex,
                                            p.phone,
                                            to_char(p.created_at, 'dd-mm-yyyy') as created_at,
                                            p.phone_home,
                                            COALESCE(u.email,' ') as user_name,
                                            p.saldo
                                        from peoples p
                                        left join users u on (p.id = u.peoples_id)"));
        
        $peoples_array[] = array('Rif o Cedula','Nombre', 'Fecha de Nacimiento','Sexo','Telefono','Creado','Telefono de Casa','Usuario','Saldo');
        
        /*foreach($peoples as $people){
            $peoples_array[] = Array(
                'Rif o Cedula' => $people->rif,
                'Nombre' => $people->name,
                'Fecha de Nacimiento' => $people->birthdate,
                'Sexo' => $people->sex,
                'Telefono' => $people->phone,
                'Creado' => $people->created_at,
                'Telefono de Casa' => $people->phone_home,
                'Usuario' => $people->user_name,
                'Saldo' => $people->saldo
            );  
        }

        Excel::create('Lista de Usuarios', function($excel) use ($peoples_array){
            $excel->setTitle('Lista de Usuarios');
            $excel->sheet('Lista de Usuarios', function($sheet) use ($peoples_array){
                $sheet->fromArray($peoples_array, null, 'A1', false, false);
            });
        })->download('xlsx');*/
        return Excel::download(new PeoplesExport, 'peoples.xlsx');
    }
}
