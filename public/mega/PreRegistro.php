<?php
session_start();
include_once './Clases/Login.php';
include_once './RedireccionFormulario.php';
include './constantes.php';

$nro_orden=$_GET['nro_orden'];
$monto=$_GET['total'];
$archivo=fopen("log.txt",'a+');
fwrite($archivo,"PreRegistro\n");
 
$url = URL_MEGA."/payment/action/pa_URL_ALTERADA_MALA_ymentgatewayuniversal-".
    "prereg?cod_afiliacion=".CODAFILIACION."&factura=$nro_orden&monto=$monto";

fwrite($archivo,"$url\n");

$control = new Login();

fwrite($archivo,date("d h:i:s ")."Obteniendo Login\n");
fwrite($archivo,"Datos a enviar:\n");
fwrite($archivo,"".$url.",".USERNAME.",".PASSWORD."\n");

$numeroControl=$control->loginHTTPS($url,USERNAME,PASSWORD);
fwrite($archivo,date("d h:i:s ")."Control: $numeroControl \n");

if(is_numeric($numeroControl)){
	$_SESSION[$nro_orden]=$numeroControl;
	RedireccionFormulario::redireccionar($numeroControl,URL_MEGA);
}else{
	echo "<div style='text-align:center'>
	<div style='text-align: center; '><img src='../logo.png' width='200' /></div>
	<p>&nbsp;</p>
	
	Disculpe, en este momento no podemos procesar su pago, intente mas tarde.</div>";
}


//echo $numeroControl;



?>
