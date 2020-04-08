<?php
ini_set('max_execution_time', '300');
	header("Content-type: application/json; charset=utf-8");
	ini_set("display_errors", "on");
	error_reporting(-1);
	class functions {
		public function utf8ize($d) {
		    if (is_array($d)) {
		        foreach ($d as $k => $v) {
		            $d[$k] = $this->utf8ize($v);
		        }
		    } else if (is_string ($d)) {
		        return utf8_encode($d);
		    }
		    return $d;
		}

		public function echoRespnse($response) {
		    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		}
	}

	class api {
		private $uri;
		private $token;
		private $url;
		public function __construct() {
			$this->uri = "http://200.8.18.230:9000/api/v1/getProducts/dortiz/";
			$this->token = "aluTQYPY2lpOZdTAXscAI1FXZMIgZecPoawXhDWg7Kp";
			$this->url = $this->uri.$this->token;
		}

		public function getDatos() {
			$ch = curl_init($this->url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);
			return $result;
		}

		public function filterByTienda($tienda) {
			$returnData = [];
			$datos = json_decode($this->getDatos());
			foreach ($datos->item as $data => $item) {
				if($item->ad_org_id == $tienda) {
					array_push($returnData, $item);
				}
			}
			return $returnData;

		}
	}

	$api = new api;
	$func = new functions;
	$get = filter_input(INPUT_GET, "type",FILTER_SANITIZE_STRING);
	switch ($get) {
		case 'bytienda':
			$tienda = filter_input(INPUT_GET, "tienda",FILTER_VALIDATE_INT);
			$json = $func->utf8ize($api->filterByTienda($tienda)); 
			$func->echoRespnse($json);
		break;
		
		default:
			$datos = $func->utf8ize($api->getDatos());
			echo $datos;
		break;
	}
