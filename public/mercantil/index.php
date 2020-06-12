<?php
   ini_set('display_errors','ON');
   error_reporting(E_ALL ^E_NOTICE ^E_DEPRECATED);
   const OPENSSL_CIPHER_NAME = "aes-128-ecb";
    require_once("AesCipher.php");
    $amount="30.55";
    $nroFactura='1231888';


   $card_number="501878200066287386";
   $customer_id="V18366876";
   $account_type="CC";
   $expiration_date="2021/11";
   $claveTelefonica=cifrar("1234");
   $claveInternet=cifrar("Banco_12");
   $claveOtp="";
   $cvv=cifrar("752");
 
/*
   $card_number="501878200048646634";
   $customer_id="V18780283";
   $account_type="CC";
   $expiration_date="2019/12";
   $claveTelefonica=cifrar("1234");
   $claveInternet=cifrar("Banco_12");
   $claveOtp="";
   $cvv=cifrar("851");

   $card_number="501878200039261815";
   $customer_id="V6257291";
   $account_type="CC";
   $expiration_date="2015/05";
   $claveTelefonica=cifrar("1234");
   $claveInternet=cifrar("Banco_12");
   $claveOtp="";
   $cvv=cifrar("772");


   $card_number="501878200028558700";
   $customer_id="V20328261";
   $account_type="CC";
   $expiration_date="2015/06";
   $claveTelefonica=cifrar("1234");
   $claveInternet=cifrar("Banco_12");
   $claveOtp="";
   $cvv=cifrar("932");


   $card_number="501878200047405644";
   $customer_id="V19288271";
   $account_type="CC";
   $expiration_date="2018/02";
   $claveTelefonica=cifrar("1234");
   $claveInternet=cifrar("Banco_12");
   $claveOtp="";
   $cvv=cifrar("936");

   $card_number="501878200070125028";
   $customer_id="V9785256";
   $account_type="CC";
   $expiration_date="2022/03";
   $claveTelefonica=cifrar("1234");
   $claveInternet=cifrar("Banco_12");
   $claveOtp="";
   $cvv=cifrar("563");
   */
  // echo $cvv;

//Autentificacion
echo descifrar('Jd2EZD3KdoP1i6xdlMFbBg==');
echo $claveTelefonica."<br>";
echo $claveInternet."<br>";
echo "autentificando..<br>";
$body='
{
    "merchant_identify": {
        "integratorId": 31,
        "merchantId": 150332,
        "terminalId": "abcde"
    },
    "client_identify": {
        "ipaddress": "10.0.0.1",
        "browser_agent": "Chrome 18.1.3",
        "mobile": {
            "manufacturer": "Samsung",
            "model": "S9",
            "os_version": "Oreo 9.1",
            "location": {
                "lat": 37.4224764,
                "lng": -122.0842499
            }
        }
    },
    "transaction_authInfo" : {
        "trx_type": "solaut",
        "payment_method": "tdd",
		"card_number": "'.$card_number.'",
		"customer_id": "'.$customer_id.'"
    }
}
';
$res= send_url('https://apimbu.mercantilbanco.com:9443/mercantil-banco/desarrollo/v1/payment/getauth',$body);
if($res['success']==true){
  
    $obj=json_decode($res['data']);
    $tipo_auth=descifrar($obj->authentication_info->twofactor_type);
    echo "Codigo de autentificación: ".$tipo_auth."<br><br>Procesando pago...<br>";
   
    switch($tipo_auth){
        case 'clavetelefonica':
            $clave=$claveTelefonica;
        break;

        case 'claveinternet':
            $clave=$claveInternet;
        break;

        case 'otp':
            $clave=$claveOtp;
        break;
    }

}else{
    echo $res['data'];
}




$body='
{
	"merchant_identify": {
		"integratorId": 31,
		"merchantId": 150332,
		"terminalId": "abcde"
	},
	"client_identify": {
		"ipaddress": "10.0.0.1",
		"browser_agent": "Chrome 18.1.3", 
		"mobile": {
			"manufacturer": "Samsung"
		}
	},
	"transaction": {
		"trx_type": "compra",
		"payment_method": "tdd",
		"card_number": "'.$card_number.'",
		"customer_id": "'.$customer_id.'",
		"invoice_number": "'.$nroFactura.'",
		"account_type":"'.$account_type.'",
		"twofactor_auth":"'.$clave.'",
		"expiration_date": "'.$expiration_date.'",
		"cvv": "'.$cvv.'",
		"currency": "ves",
		"amount": '.$amount.'
	}
}';

echo $body."<br><hr>";

//exit();

$res= send_url('https://apimbu.mercantilbanco.com:9443/mercantil-banco/desarrollo/v1/payment/pay',$body);
if($res['success']==true){
    $obj=json_decode($res['data']);
    //echo $obj->authentication_info->twofactor_type;
    print_r($obj);
   

}else{
    echo $res['data'];
}

















function send_url($url,$body){
	
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$body); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-IBM-Client-Id: 9860e0f2-ed46-495e-a25f-ef377ea645f6',
        'Environment: test',
        'ApiKey:mbu1'
    ));
    $server_output = curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
    }
    curl_close($ch);
    
    if (isset($error_msg)) {
        $res['success']=false;
        $res['data']=$error_msg;
        return $res;
    }else{
        
            $res['success']=true;
            $res['data']=$server_output;
            return $res;
    }
    
    //if ($server_output == "OK") {return true;} else {return false;}
}


function cifrar($dato){

# CVV a Encripta
$cvv  = mb_convert_encoding($dato, "UTF-8");

# Clave secreta enviada por el Banco
$keybank = mb_convert_encoding("A9279120481620090622AA30", "UTF-8");

# Generacion del hash a partir de la clave secreta del banco
$keyhash = AesCipher::createKeyhash($keybank);

# Encripta el CVV
$cvvencrypt = AesCipher::encrypt($keyhash,$cvv);

# Des-Encripta
$decrypted = AesCipher::decrypt($keyhash,$cvvencrypt);

return $cvvencrypt;

}
function descifrar($dato){


    # Clave secreta enviada por el Banco
    $keybank = mb_convert_encoding("A9279120481620090622AA30", "UTF-8");
    
    # Generacion del hash a partir de la clave secreta del banco
    $keyhash = AesCipher::createKeyhash($keybank);
 
    # Des-Encripta
    $decrypted = AesCipher::decrypt($keyhash,$dato);
    
    return $decrypted;
    
}






?>