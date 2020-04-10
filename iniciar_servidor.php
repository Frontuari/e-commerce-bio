<?php
error_reporting(E_ALL ^E_NOTICE ^E_DEPRECATED);
		
openlog("Biomercados",LOG_PERROR, LOG_DAEMON);
syslog(LOG_INFO,"Servidor iniciado");

$a=extraer_datos_db();
$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);

$retraso_general=7;
$ip="http://192.168.0.105";


$activar_productos=true;
$tiempo_acumulado_productos=0;
$retraso_productos="+5 minutes";




/* Ejemplo si quieren crear otro :)
$activar_productosb=true;
$tiempo_acumulado_productosb=0;
$retraso_productosb="+5 minutes";
*/

do{
	
	if(time()>=$time_productos and $activar_productos==true){
		syslog(LOG_INFO,"Actualizando Productos");
		$tiempo_inicio = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		actualizarProductos($ip);
		$tiempo_fin = microtime_float();//Opcional para medir el tiempo de ejecución del algoritmo
		echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio)."\n"; //Opcional para medir el tiempo de ejecución del algoritmo
		$tiempo_acumulado_productos=strtotime($retraso_productos);		
	}	




	


sleep($retraso_general);

}while(true);
closelog();

function actualizarProductos($ip){
	$malo=false;
	//syslog(LOG_INFO, "Prueba de memoria: " . memory_get_usage(true));
	$url_productos="$ip/example_api_bio/getProducts.json";
	$data=leer("Productos",$url_productos);
	if($data!=false){
		$arr=q("SELECT id,nro_tienda FROM stores");
		$tienda=crearArreglo($arr);
		if(is_array($arr)){
			q("BEGIN");
			foreach($data->item as $obj){
				if($obj->ad_org_id==1000004){
				
				
				if(is_numeric($obj->sku) and isset($obj->item_name) and is_numeric($obj->sugerido) and $obj->sugerido>=0 and $obj->price>0 and is_numeric($obj->ad_org_id)){
					//echo $obj->ad_org_id." $obj->organizacion $obj->sku $obj->sugerido\n";
					$tienda_id=$tienda[$obj->ad_org_id];
					$sql="SELECT 1 FROM products WHERE sku=$obj->sku and stores_id=$tienda_id";
					//echo " Consultando: ".$sql."\n";
					$arr=q($sql);
					//print_r($tienda);
					//exit();
					if(is_array($arr)){
						$sql="UPDATE products SET price='$obj->price',name='$obj->item_name', qty_avaliable='$obj->sugerido', description_short='$obj->item_description', stores_id='$tienda_id' WHERE sku=$obj->sku and stores_id=$tienda_id RETURNING id";
						//exit($sql);
						$valido=q($sql);
						$msj="error al actualizar! ID: $obj->m_product_id SQL: ".$sql;
						

					}else{
						$sql="INSERT INTO products (sku,name,description_short,price,qty_avaliable,stores_id,created_at,updated_at) VALUES ($obj->sku,'$obj->item_name','$obj->item_description','$obj->price','$obj->sugerido',$tienda_id,NOW(),NOW()) RETURNING id";
						
						$valido=q($sql);
						$msj="error al insertar! ID: $obj->m_product_id SQL: ".$sql;
					}
					if(!is_array($valido)){
						
						msj($msj);
						echo $msj;
						break;
						$malo=true;
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
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);

		if(curl_errno($ch)>0 and !$ch){
			return false;
		}else{
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				return curl_exec($ch);
				curl_close($ch);
		}
		
		return true;
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
