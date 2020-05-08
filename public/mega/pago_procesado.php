<?php
    include_once './Clases/Login.php';
    include_once './Clases/LeerXML.php';
    include './constantes.php';
   
    $archivo=fopen("log.txt",'a+');
    fwrite($archivo,"PaginaWeb: Llegando a nuestro servidor\n");
    
    $numeroControl=$_GET['control'];
    echo $numeroControl;
    fwrite($archivo,"Control: $numeroControl\n");
    
    $url=URL_MEGA."/payment/action/paymentgatewayuniveral-querystatus?control=$numeroControl";
    
    fwrite($archivo,"URL de petición de XML: $url\n");
    
    $control = new Login();
    

    fwrite($archivo,"Obteniendo Login\n");
    fwrite($archivo,"Datos a enviar:\n");
    fwrite($archivo,"URL:".$url." USERNAME: ".USERNAME." PASSWORD: ".PASSWORD."\n");
    
    $xml=$control->loginHTTPS($url,USERNAME,PASSWORD);
   
    fwrite($archivo,"Resultado $xml \n");
    
    fclose($archivo);
    $leerXML= new leerXML($xml);
    
?>
