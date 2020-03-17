<?php
cabecera('On');

$a=extraer_datos_db();
$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);
$datos=run();
session_start();
$_GET=seguro($_GET);
$_POST=seguro($_POST);

switch($_GET['evento']) {
    case 'obtenerTodo':

        $row_usuario=q("SELECT s.id,s.email,p.name,s.peoples_id,p.sex,p.birthdate,c.id as city_id,c.name as ciudad,p.phone,p.phone_home
        FROM users s
        INNER JOIN peoples p on p.id = s.peoples_id
        INNER JOIN cities c on c.id = p.cities_id
        WHERE s.email='".$_SESSION['usuario']['email']."'")[0];

        $row_direccions=q("SELECT o.*,c.id as city_id,c.name as ciudad FROM order_address as o
        INNER JOIN cities c on c.id = o.cities_id
        WHERE o.users_id = ".$_SESSION['usuario']['id']." and o.status = 'A'
        ");
        $_SESSION["usuario"]=$row_usuario;
        $_SESSION["usuario"]["directions"] = $row_direccions;

        salida($row_usuario,"Datos actualizados",true);
    break;
    case 'obtenerDireccion':
        $row = q("SELECT o.*,c.id as city_id,c.name as ciudad FROM order_address as o
        INNER JOIN cities c on c.id = o.cities_id
        WHERE o.users_id = ".$_SESSION['usuario']['id']." and o.status = 'A'
        ");
        $_SESSION["usuario"]["directions"] = $row;
        salida($row,"Direcciones actualizadas",true);
    break;
    case 'login':
        $email=$_GET['email'];
        $clave=$_GET['password'];
        
        $row=q("SELECT s.id,s.password,s.email,p.name,s.peoples_id,p.sex,p.birthdate,c.id as city_id,c.name as ciudad,p.phone,p.phone_home
        FROM users s
        INNER JOIN peoples p on p.id = s.peoples_id
        INNER JOIN cities c on c.id = p.cities_id
        WHERE s.email='$email'")[0];

        $directions=q("SELECT o.*,c.id as city_id,c.name as ciudad FROM order_address as o
            INNER JOIN cities c on c.id = o.cities_id
            WHERE o.users_id = ".$row['id']." and o.status = 'A'
        ");

       if($row['email']){
            if(password_verify($clave,$row['password'])){
                unset($row["password"]);
                $_SESSION["usuario"]=$row;
                $_SESSION["usuario"]["directions"]=$directions;
                $row['id_sesion']=session_id();
                salida($row,"Bienvenido",true);
            }else{
                $row=null;
                salida($row,"Contraseña no válida",false);
            }
       }else{
        salida($row,"Correo electrónico no valido",false);
    }
    break;
    case 'listar_categorias_movil':
        $row=q("SELECT name,image,id FROM categories");
        $row=recortar_imagen($row);
        salida_movil($row,"Listado de categorias",true);
    break;
    case 'registrarUsuario':
        echo registrarUsuario();
    break;
    case 'confirmarCorreo':
        echo confirmarCorreo();
    break;
    case 'enviarCodRecuperacion':
        echo enviarCodRecuperacion();
    break;
    case 'confirmarCodRecuperacion':
        echo confirmarCodRecuperacion();
    break;
    case 'cambiarClavePublico':
        echo cambiarClavePublico();
    break;
    case 'logout':
        session_destroy();
        salida($row,"Hasta pronto",true);
    break;
    default:
        salida($row,"Disculpe debe enviar un evento",false);
}
function cambiarClavePublico(){
    $email  =$_POST['email'];
    $codigoCorreo=$_POST['codigoCorreo']; 
    $password   =password_hash($_POST['password'],PASSWORD_BCRYPT);
    q("UPDATE users SET password='$password' WHERE email='$email' AND validateemail='$codigoCorreo'");
    salida(null,"Su cuenta ha sido recuperada.");
}
function confirmarCodRecuperacion(){
    $email  =$_POST['email'];
    $codigoCorreo=$_POST['codigoCorreo'];
    $res=q("SELECT 1 FROM users WHERE validateemail='$codigoCorreo' AND email='$email'");
    if(is_array($res)){
        salida(null,"Código Verificado correctamente.");
    }else{
        salida(null,"Código invalido, intente nuevamente.",false);
    }

}
function enviarCodRecuperacion(){
    $email  =$_GET['email'];
    $res=q("SELECT 1 FROM users WHERE email='$email'");
    $codigoCorreo=rand(0,999999);
    if(is_array($res)){
        q("UPDATE users SET validateemail='$codigoCorreo' WHERE email='$email'");
        //ENVIAR CORREO
        salida(null,"Verifique su correo electrónico.");
    }else{
        salida(null,"El correo no existe, intente nuevamente.",false);
    }
}
function confirmarCorreo(){
    $email  =$_POST['email'];
    $codigoCorreo=$_POST['codigoCorreo'];
    $res=q("SELECT 1 FROM users WHERE validateemail='$codigoCorreo' AND email='$email'");
    if(is_array($res)){
        q("UPDATE users SET email_verified_at=NOW() WHERE validateemail='$codigoCorreo' AND email='$email'");
        salida(null,"Código Verificado correctamente.");
    }else{
        salida(null,"Código invalido, intente nuevamente.".$_SESSION['email'],false);
    }

}
function registrarUsuario(){
   
    $name       =$_POST['name'];
    $rif        =$_POST['rif'];
    $email      =$_POST['email'];
    $password   =password_hash($_POST['password'],PASSWORD_BCRYPT);
    $sex        =$_POST['sex'];
    $cities     =1;
    
    $codigoCorreo=generarCodigoVerificacion($email);

$res=q("SELECT validateemail FROM users WHERE email='$email' and email_verified_at IS NULL");
if(is_array($res)){
    enviarCorreo($correo);
    $_SESSION['email']=$email;
    q("UPDATE users SET password='$password' WHERE email='$email' and email_verified_at IS NULL");
    salida(null,"Le hemos enviado nuevamente un email de confirmación.");
}



    $res=q("INSERT INTO peoples (name,rif,sex,cities_id) VALUES ('$name','$rif','$sex','$cities') RETURNING id");
    if(is_array($res)){
        $peoples_id=$res[0]['id'];
        $res=q("INSERT INTO users (password,email,peoples_id,name,validateemail) VALUES ('$password','$email','$peoples_id','$name','$codigoCorreo')");
        if($res){
            enviarCorreo($correo);
            salida(null,"Le hemos enviado un email de confirmación.");
        }else{
            salida(null,"Intente de nuevo",false);
        }
    }else{
        salida(null,"Intente de nuevo",false);
    }
    
}
function enviarCorreo($correo){
    
}
function generarCodigoVerificacion($data){
return hexdec( substr(sha1($data), 0, 5) );
}
function recortar_imagen($row){
    foreach($row as $id=>$value){
        $arr=explode(".",$value['image']);

        $row[$id]['image']=$arr[0].'-cropped.'.$arr[1];
        $row[$id]['name']=substr($value['name'],0,21);
    }
     return $row;
    
}
function salida($row,$msj_general="",$bueno=true){
    $row['success']=$bueno;
    if(!$bueno) header('HTTP/1.1 409 Conflict');
    $row['msj_general']=$msj_general;
    echo json_encode($row);
    exit();
}
function salida_movil($row,$msj_general="",$bueno=true){
    if(!$bueno) header('HTTP/1.1 409 Conflict');
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
      salida_movil('',"Disculpe, intente de nuevo",false);


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