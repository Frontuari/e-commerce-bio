<?php

include_once './Clases/Login.php';
include_once './RedireccionFormulario.php';
include './constantes.php';

$nro_orden=$_GET['nro_orden'];
$monto=$_GET['total'];
$archivo=fopen("log.txt",'a+');
fwrite($archivo,"PreRegistro\n");

$url = "https://200.71.151.226:8443/payment/action/paymentgatewayuniversal-".
    "prereg?cod_afiliacion=".CODAFILIACION."&factura=$nro_orden&monto=$monto";

fwrite($archivo,"$url\n");

$control = new Login();

fwrite($archivo,date("d h:i:s ")."Obteniendo Login\n");
fwrite($archivo,"Datos a enviar:\n");
fwrite($archivo,"".$url.",".USERNAME.",".PASSWORD."\n");

$numeroControl=$control->loginHTTPS($url,USERNAME,PASSWORD);
fwrite($archivo,date("d h:i:s ")."Control: $numeroControl \n");
if(is_numeric($numeroControl)){
	RedireccionFormulario::redireccionar($numeroControl);
}else{
	echo "<div style='text-align:center'>Disculpe, en este momento no podemos procesar su pago, intente mas tarde.</div>";
}


//echo $numeroControl;



?>
