<?php
//ini_set('max_execution_time', '600');
error_reporting(E_ALL ^E_NOTICE ^E_DEPRECATED);
		
openlog("Biomercados",LOG_PERROR, LOG_DAEMON);
syslog(LOG_INFO,"Servidor iniciado");

$a=extraer_datos_db();
$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);

$retraso_general=30;
$ip="http://192.168.0.106";


$activar_productos=true;
$tiempo_acumulado_productos=0;
$retraso_productos="+10 minutes";


$activar_envio_orden=false;
$tiempo_acumulado_envio_orden=0;
$retraso_envio_orden="+1 minutes";


/* Ejemplo si quieren crear otro :)
$activar_productosb=true;
$tiempo_acumulado_productosb=0;
$retraso_productosb="+5 minutes";
*/

do{
	
	if(time()>=$tiempo_acumulado_productos and $activar_productos==true){
		syslog(LOG_INFO,"Actualizando Productos");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarProductos($ip);
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_productos=strtotime($retraso_productos);		
	}	

	if(time()>=$tiempo_acumulado_envio_orden and $activar_envio_orden==true){
		syslog(LOG_INFO,"Actualizando envio_orden");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarEnvioOrden($ip);
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_envio_orden=strtotime($retraso_envio_orden);		
	}	


	


sleep($retraso_general);

}while(true);
closelog();


function actualizarEnvioOrden(){
	$arr=q("SELECT 
	'T01' as localidad,
	o.id as norder,
	o.total_transport as envio,
	o.sub_total,
	o.exento,
	o.bi as base_imponible,
	o.total_tax as iva,
	o.total_pay as total,
	p.rif as rif,
	oa.address as direccion_de_entrega,
	p.name as descripcion,
	p.phone as telefono,
	TO_CHAR(o.created_at, 'dd/mm/yyyy HH12:MI AM') AS fecha_de_orden,
	TO_CHAR(o.delivery_time_date, 'dd/mm/yyyy HH12:MI AM') AS fecha_para_entrega,
	(SELECT json_agg(
				json_build_object(
				'sku', p.sku, 
				'cant', op.cant,
				'nombre',p.name,
				'precio',op.price,
				'total',(p.price*op.cant)
			)
			
	) FROM order_products op INNER JOIN products p ON p.id=op.products_id WHERE op.orders=o.id) orderlines,
	(SELECT json_agg(
				json_build_object(
				'method', pm.name, 
				'mount', dbo.amount,
				'id_trans',dbo.id,
				'referencia',dbo.ref,
				'payment_status',dbo.status
			)
			
	) FROM det_bank_orders dbo INNER JOIN bank_datas bd ON bd.id=dbo.bank_datas_id INNER JOIN payment_methods pm ON pm.id=bd.payment_methods_id WHERE dbo.orders_id=o.id) detallepago 
	
	FROM (SELECT o.*,MAX(t.id) as t_id FROM orders o INNER JOIN trackings t ON t.orders_id=o.id GROUP BY o.id) o INNER JOIN trackings t ON t.id=o.t_id INNER JOIN orders_status os ON os.id=t.orders_status_id LEFT JOIN order_address oa ON oa.id=o.order_address_id INNER JOIN users ON o.users_id=users.id INNER JOIN peoples p ON p.id=users.peoples_id WHERE t.orders_status_id=4 AND o.enviado_bio=0");
	if(is_array($arr)){
		$data['data']=json_encode($arr);

	$res=send_url($data,"http://200.74.230.206:9009/api/v1/setOrder");
	//$res=true;
	if($res!=true){
		echo "Error al enviar la orden al servidor de bio";
	}elseif($res==true){
		q("BEGIN");
		$malo=false;
		foreach($arr as $orden){
			$id=$orden['norder'];
			$sql="UPDATE orders SET fecha_enviado_bio=NOW(),enviado_bio=1 WHERE id='$id' RETURNING id";
			$r=q($sql);

			if(!is_array($r)){
				$malo=true;
			}
		}
		if($malo==true){
			q("ROLLBACK");
		}else{
			q("COMMIT");
		}
	}
}

}


function actualizarProductos($ip){
	$malo=false;
	//syslog(LOG_INFO, "Prueba de memoria: " . memory_get_usage(true));
	//$url_productos="$ip/example_api_bio/getProducts.json";
	$memo=array(); //para guardar lo que ya existe y no consulte de nuevo la db por cada producto(impuestos)
	//$url_productos="http://dortiz:aluTQYPY2lpOZdTAXscAI1FXZMIgZecPoawXhDWg7Kp@200.74.230.206:9009/api/v1/getProducts";
	$url_productos="http://ecommerce:2ViGiPJ1DAElzDwEteBbiIH4gF939fKuOD5GKRhedZp@200.74.230.206:9009/api/v1/getProducts";
	
	$data=leer("Productos",$url_productos);
	
	if($data!=false){
	
		$arr=q("SELECT id,nro_tienda FROM stores");
		$tienda=crearArreglo($arr);
		
		if(is_array($arr)){
			
			q("BEGIN");
			foreach($data->item as $obj){
				if($obj->ad_org_id==1000004){
				//aqui entra
				
				if(is_numeric($obj->sku) and isset($obj->item_name) and is_numeric($obj->sugerido) and $obj->sugerido>=0 and $obj->pricelist>0 and is_numeric($obj->ad_org_id)){

					$sql="SELECT id FROM categories WHERE c_elementvalue_id_n3=$obj->c_elementvalue_id_N3";
				
					$arr_ca=q($sql);
					
					
					if(!is_array($arr_ca)) {
						$name_ca=explode("-",$obj->Nivel3)[1];
						$sql="INSERT INTO categories (name,c_elementvalue_id_n3) VALUES ('$name_ca',$obj->c_elementvalue_id_N3) RETURNING id";
						$arr_insert_ca=q($sql);
						if(!is_array($arr_insert_ca)){
							$malo=true;
							msj("MALO insertar categoria ".$sql);
							break;
						}else{
						
							$id_ca=$arr_insert_ca[0]['id'];
						
						}
					}else{
						
						$id_ca=$arr_ca[0]['id'];
					}					
					$sql="SELECT id FROM sub_categories WHERE c_elementvalue_id_n4=$obj->c_elementvalue_id_N4";
					
					$arr_sub_ca=q($sql);
				
					$name_sub_ca=explode("-",$obj->Nivel4)[1];
					if(!is_array($arr_sub_ca)) {
						$sql="INSERT INTO sub_categories (name,categories_id,c_elementvalue_id_n4) VALUES ('$name_sub_ca',$id_ca,$obj->c_elementvalue_id_N4) RETURNING id";
						
						$arr_insert_sub_ca=q($sql);
						if(!is_array($arr_insert_sub_ca)){
							$malo=true;
							msj("MALO");
							break;
						}else{
							$id_sub_ca=$arr_insert_sub_ca[0]['id'];
						}
					}else{
						$id_sub_ca=$arr_sub_ca[0]['id'];
					}
					

//------------IMPUESTOS--------------------
if(!isset($memo[$obj->IMPUESTO]) and $obj->IMPUESTO>0){
	$nombre_impuesto=$obj->TaxType." ".$obj->IMPUESTO;

	$sql="SELECT id FROM taxes WHERE value='$obj->IMPUESTO'";
	
	$arr=q($sql);
	if(!is_array($arr)){
		$sql="INSERT INTO taxes (short_name,name,value,type,created_at) VALUES ('$nombre_impuesto','$nombre_impuesto','$obj->IMPUESTO','porc',NOW()) RETURNING id";
		$arr=q($sql);
		if(!is_array($arr)){
			echo "ERROR: ".$sql;
		}
		$taxes_id=$arr[0]['id'];
	}else{
		$taxes_id=$arr[0]['id'];
	}
	$memo[$obj->IMPUESTO]=true;
}




//-----------------------------------------

					//echo $obj->ad_org_id." $obj->organizacion $obj->sku $obj->sugerido\n";
					$tienda_id=$tienda[$obj->ad_org_id];
					$sql="SELECT id FROM products WHERE sku=$obj->sku and stores_id=$tienda_id";
					//echo " Consultando: ".$sql."\n";
					$arr=q($sql);

					if($obj->bsca_netweight>0){
						$peso=$obj->bsca_netweight/1000;
					}else{
						$peso=0;
					}
					if(is_array($arr)){
						$products_id=$arr[0]['id'];
						$sql="UPDATE products SET peso='$peso', price='$obj->pricelist',name='$obj->item_name', qty_avaliable='$obj->sugerido', stores_id='$tienda_id' WHERE sku=$obj->sku and stores_id=$tienda_id RETURNING id";
						//exit($sql);
						$valido=q($sql);
						$msj="error al actualizar! ID: $obj->m_product_id SQL: ".$sql;
						

					}else{
						$sql="INSERT INTO products (peso,sku,name,description_short,price,qty_avaliable,stores_id,created_at,updated_at) VALUES ('$peso',$obj->sku,'$obj->item_name','$obj->item_description','$obj->pricelist','$obj->sugerido',$tienda_id,NOW(),NOW()) RETURNING id";
						
						$valido=q($sql);
						$products_id=$valido[0]['id'];
						$msj="error al insertar! ID: $obj->m_product_id SQL: ".$sql;
					}
					if(!is_array($valido)){
						
						msj($msj);
						echo $msj;
						break;
						$malo=true;
					}
//--------------IMPUESTOS-----------
$sql="SELECT t.id,t.value FROM det_product_taxes dpt INNER JOIN taxes t ON t.id=dpt.id WHERE products_id='$products_id'";
$arr=q($sql);
if(!is_array($arr) AND $obj->IMPUESTO>0){
	$arr=q("INSERT INTO det_product_taxes (taxes_id,products_id) VALUES ('$taxes_id','$products_id')");
}else{
	
		if($obj->IMPUESTO==0 and $arr[0]['value']>0){
			q("DELETE FROM det_product_taxes WHERE products_id='$products_id' AND taxes_id='$taxes_id'");
		}
	
}
//---------------------------------



					

					$sql="SELECT 1 FROM det_sub_categories WHERE products_id=$products_id AND sub_categories_id=$id_sub_ca";
				
					$arr_det=q($sql);
					
					if(!is_array($arr_det)){
						q("INSERT INTO det_sub_categories (products_id,sub_categories_id) VALUES ($products_id,$id_sub_ca)");
					}



				}else{
					//$msj="SKU invalido o inventario -1: ".$obj->sku."";
					//msj($msj);
					//echo $msj;
				}
	
				}


			}
			if($malo){
				q("ROLLBACK");
			}else{
				q("COMMIT");
			}
			
		}
	}else{
		echo "no data";
	}


/*                  [sku] => 036124
                    [um] => PIEZA
                    [organizacion] => TIENDA 03 SANTA CECILIA
                    [isecommerce] => Y
                    [price] => 124666.66
                    [m_product_id] => 1025707
                    [category] => 1005568
                    [item_name] => JUANA MEZCLAS LISTAS CACHAPAS 500 GR
                    [item_description] => JUANA MEZCLAS LISTAS CACHAPAS 500 GR
                    [ad_org_id] => 1000007
					[sugerido] => 121
					
					*/

}
function crearArreglo($arr){
	foreach($arr as $obj){
		$resArray[$obj['nro_tienda']]=$obj['id'];
	}
	return $resArray;
}
function msj($value){
	syslog(LOG_INFO,$value);
}
function get_url($url){
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 180);

		if(curl_errno($ch)>0 and !$ch){
			return false;
		}else{
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				return curl_exec($ch);
				curl_close($ch);
		}
		
		return true;
}
function send_url($arr,$url){
	
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_POSTFIELDS, 
http_build_query($arr));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);

if ($server_output == "OK") {return true;} else {return false;}
}

function leer($nombre,$url){
		syslog(LOG_INFO,"Leyendo... ".$nombre);
		if($res=get_url($url,$nombre)){
			syslog(LOG_INFO,"Leido!");
			if(isJson($res)){
				return json_decode($res);
			}else{
				return false;
			}
			
		}else{
			syslog(LOG_WARNING, "Error");	
			return false;
		}
	
}
function isJson($string) {
	json_decode($string);
	return (json_last_error() == JSON_ERROR_NONE);
}
















function extraer_datos_db(){
    $gestor = @fopen(".env", "r");
    if ($gestor) {
        while (($búfer = fgets($gestor, 4096)) !== false) {
            $arr[]=$búfer;
        }
        fclose($gestor);
    }
    $db['host']     =limpiar($arr[9]);
    $db['port']     =limpiar($arr[10]);
    $db['database'] =limpiar($arr[11]);
    $db['user']     =limpiar($arr[12]);
    $db['password'] =limpiar($arr[13]);
    return $db;
}
function limpiar($var){
    return trim(explode('=',$var)[1]);
}
function conectar_db($host,$base_dato,$usuario,$clave,$puerto){
    $dbconn = pg_connect("host=".$host." dbname=$base_dato user=$usuario password=$clave port=$puerto")
    or die('No se ha podido conectar: ' . pg_last_error());
    return $dbconn;
}
function q($sql){
    $arr=array();
   // $result = pg_query($sql) or die(false);
   $con=$GLOBALS["con"];
    if (pg_send_query($con,$sql)) {
        $res=pg_get_result($con);
        if ($res) {
          $state = pg_result_error_field($res, PGSQL_DIAG_SQLSTATE);
          if ($state==0) {
            while ($line = pg_fetch_array($res, null, PGSQL_ASSOC)) {
                $arr[]=$line;
            }
            if(count($arr)){
                return $arr;
            }else{
                return true;
            }
          }
          else {
              switch($state){
                  case 23505:
                    salida("El registro ya existe, intente de nuevo.");
                  break;
                  case '22P02':
                    salida("Ingrese todos los campos obligatorios.");
                    
                  break;
                  default:
                    salida("Error en la consulta.");
              }
          }
        }  
      }
      salida("Disculpe, intente de nuevo");


}
function salida($var){
echo $var."\n";
}
function microtime_float()
{
list($useg, $seg) = explode(" ", microtime());
return ((float)$useg + (float)$seg);
}

?>
