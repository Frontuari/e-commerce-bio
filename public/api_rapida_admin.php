<?php
cabecera('On');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$a=extraer_datos_db();
$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);
$datos=run();
session_start();
$json=$_GET['json'];
$_GET=seguro($_GET);
$_POST=seguro($_POST);
$stores_id=$_SESSION['stores_id'];

if($_GET['token']=='leonardomelendez'){
    switch($_GET['evento']) {
        case 'consutar_nuevo_pago':
            $arr=q("SELECT count(dbo.id) as cant FROM det_bank_orders dbo INNER JOIN bank_datas bd ON bd.id=dbo.bank_datas_id WHERE bd.stores_id=$stores_id AND dbo.status='nuevo'");
            if(is_array($arr)){
                salida($arr,"Consulta realizada",true);
            }else{
                salida(null,"Disculpe sin conexión al servidor",false);
            }
        break;
        case 'consutar_nuevas_ordenes':
            $arr=q("SELECT count(o.id) as cant FROM orders o WHERE o.stores_id=$stores_id AND o.status='PR'");
            if(is_array($arr)){
                salida($arr,"Consulta realizada",true);
            }else{
                salida(null,"Disculpe sin conexión al servidor",false);
            }
        break;
        case 'consutar_nuevas_ordenes_delivery':
            $arr=q("SELECT count(o.id) as cant FROM orders o WHERE o.stores_id=$stores_id AND o.status='SD'");
            if(is_array($arr)){
                salida($arr,"Consulta realizada",true);
            }else{
                salida(null,"Disculpe sin conexión al servidor",false);
            }
        break;
        default:
        salida($row,"Disculpe debe enviar un evento",false);
    break;
    }
}













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
          }
          else {
              switch($state){
                  case 23505:
                    salida(null,"El registro ya existe, intente de nuevo.",false);
                  break;
                  case '22P02':
                    salida(null,"Ingrese todos los campos obligatorios.",false);
                    
                  break;
                  default:
                    salida(null,"Error en la consulta.",false);
              }
          }
        }  
      }
      salida('',"Disculpe, intente de nuevo",false);


}












function salida($row,$msj_general="",$bueno=true){
    $rowa['success']=$bueno;
    if(!$bueno) header('HTTP/1.1 409 Conflict');
    $rowa['msj_general']=$msj_general;
    $rowa['data']=$row;
    echo json_encode($rowa);
    exit();
}



function cabecera($error="Off"){
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    header("Access-Control-Allow-Headers: content-type, authorization");
    //header('Content-type: text/html; charset=utf-8');
    ini_set('display_errors',$error);
    error_reporting(E_ALL ^E_NOTICE ^E_DEPRECATED);
}
function run(){
    $postdata = file_get_contents("php://input");
    $input = json_decode($postdata);
    if($_GET['id_sesion']){
        session_id($_GET['id_sesion']);
    }
    return $input;
}
function seguro($varb){
    foreach($varb as $id=>$var){
        $_GET[$id]= pg_escape_string(htmlspecialchars(filter_var($var,FILTER_SANITIZE_STRING)));
    }
    return $_GET;
}
?>