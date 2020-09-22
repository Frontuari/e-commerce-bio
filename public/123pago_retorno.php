<?php
	$a=extraer_datos_db();
	$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);
	$coins = q('select * from coins where id = 1');

	$data = $_POST;
	$baseUrl = 'http://'.$_SERVER['HTTP_HOST'].'/api_rapida.php?evento=guardarPago';
	$total_amount = number_format(($data['amount']*$coins[0]['rate']),2,'.','');
	$params = "&amount=".$total_amount."&ref=".$data['parametro4']."&coins_id=".$coins_id."&orders_id=".$data['nai']."&bank_datas_id=15";

	file_get_contents($baseUrl.$params);

	/*-------------------------functions for operations-------------------------------*/
	function extraer_datos_db(){
	    $gestor = @fopen("../.env", "r");
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
	          }else {
	              switch($state){
	                  case 23505://El registro ya existe, intente de nuevo
	                    print "El registro ya existe.";
	                  break;
	                  case '22P02'://faltan campos
	                    print "Disculpe intente mas tarde..";
	                    
	                  break;
	                  default:

	                 // wh_log($sql);
	                    print "Disculpe, intente mas tarde...";
	              }
	          }
	        }  
	      }else{
	      	print "Disculpe, intente de nuevo";
	      }
	 }