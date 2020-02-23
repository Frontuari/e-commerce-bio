<?php
cabecera('On');

$a=extraer_datos_db();
conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);
$datos=run();
session_start();
$_GET=seguro($_GET);
$_POST=seguro($_POST);
switch($_GET['evento']){


    case 'login':
        $email=$_GET['email'];
        $clave=$_GET['password'];
        
        $row=q("SELECT s.id,s.password,s.email,s.name,s.peoples_id,p.sex,p.birthdate,c.id as city_id,c.name as ciudad
        FROM users s
        INNER JOIN peoples p on p.id = s.peoples_id
        INNER JOIN cities c on c.id = p.cities_id
        WHERE s.email='$email'")[0];
       if($row['email']){
            if(password_verify($clave,$row['password'])){
                unset($row["password"]);
                $_SESSION["usuario"]=$row;
                $row['id_sesion']=session_id();
                salida($row,"Bienvenido",true);
            }else{
                salida($row,"Contraseña no válida",false);
            }
       }else{
        salida($row,"Correo electrónico no valido",false);
    }
    break;

    case 'logout':
        session_destroy();
        salida($row,"Hasta pronto",true);
    break;

}
salida($row,"Disculpe debe enviar un evento",false);




function salida($row,$msj_general="",$bueno=true){
    $row['success']=$bueno;
    if(!$bueno) header('HTTP/1.1 409 Conflict');
    $row['msj_general']=$msj_general;
    echo json_encode($row);
    exit();






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
}
function q($sql){
    $result = pg_query($sql) or die(false);
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        $arr[]=$line;
    }
    return $arr;
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
