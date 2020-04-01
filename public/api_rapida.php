<?php
cabecera('On');

$a=extraer_datos_db();
$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);
$datos=run();
session_start();

$json=$_GET['json'];
$_GET=seguro($_GET);
$_POST=seguro($_POST);

switch($_GET['evento']) {
    case 'obtenerTodo':

        $row_usuario=q("SELECT p.rif, split_part(p.rif, '-', 1) as nacionalidad,split_part(p.rif, '-', 2) as nro_rif , s.id,s.email,p.name,s.peoples_id,p.sex,p.birthdate,c.id as city_id,c.name as ciudad,p.phone,p.phone_home
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
        
        $row=q("SELECT p.rif, split_part(p.rif, '-', 1) as nacionalidad,split_part(p.rif, '-', 2) as nro_rif, s.id,s.password,s.email,p.name,s.peoples_id,p.sex,p.birthdate,c.id as city_id,c.name as ciudad,p.phone,p.phone_home
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
        listar_categorias_movil();
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
    case 'cambiarClave':
        echo cambiarClave();
    break;
    case 'getCities':
        echo getCities();
    break;
    case 'getRegions':
        echo getRegions();
    break;
    case 'getStates':
        echo getStates();
    break;
    case 'guardarDireccion':
        echo guardarDireccion();
    break;
    case 'getAdreess':
        echo getAdreess();
    break;
    case 'eliminarDireccion':
        echo eliminarDireccion();
    break;
    case 'listarFavoritos':
        $users_id=$_SESSION['usuario']['id'];
        $join="INNER JOIN  favorites f ON f.products_id=p.id";
        $where="AND f.users_id='$users_id'";
        $sql=getSqlListarProductos($join,$where);
        listarProductos($sql);
    break;
    case 'listarProductosFiltrados':
        $precioInicial=$_GET['precioInicial'];
        $precioFinal=$_GET['precioFinal'];
        $tipo=$_GET['tipo'];
       
        switch($tipo){
            case 'Mas vendidos':
                $order='ORDER BY qty_sold DESC';
                $sql=getSqlListarProductos('','',$order);
            break;
            case 'Mejores precios':
                $order='ORDER BY p.price ASC';
                $sql=getSqlListarProductos('','',$order);
            break;
            default:
            
            $sql=getSqlListarProductos();
        }
        
        
        $sql="SELECT * FROM ($sql) as consulta WHERE total_precio_dolar>'$precioInicial' AND total_precio_dolar<'$precioFinal'";
        //exit($sql);
        listarProductos($sql);
    break;
    case 'listarProductosPorCategoria':
        $categories_id=$_GET['categories_id'];
        $join="INNER JOIN det_sub_categories dsc ON dsc.products_id=p.id INNER JOIN sub_categories sc ON sc.id=dsc.sub_categories_id";
        $where="AND sc.categories_id='$categories_id'";
        $sql=getSqlListarProductos($join,$where);
        listarProductos($sql);
    break;
    case 'listarProductos':
        $sql=getSqlListarProductos();
        listarProductos($sql);
    break;
    case 'guardarFavorito':
        guardarFavorito();
    break;
    case 'consultarFavorito':
        consultarFavorito();
    break;
    case 'listarProductosIA':
        listarProductosIA();
    break;
    case 'guardarCalificacion':
        guardarCalificacion();
    break;
    case 'guardarOpinion':
        guardarOpinion();
    break;
    case 'guardarVisitaProducto':
        guardarVisitaProducto();
    break;
    case 'buscarProducto':
        buscarProducto();
    break;
    case 'listarProductosPorBusqueda':
        listarProductosPorBusqueda();
    break;
    case 'listarProductosCarrito':
        listarProductosCarrito($json);
    break;
    case 'listarMetodosDePago':
        $arr=q("SELECT id,name,description,image FROM payment_methods WHERE status='A'");
        if(is_array($arr)){
            salidaNueva($arr,"Listando metodos de pago");
        }else{
            salidaNueva(null,"Disculpe, intente de nuevo",false);
        }
    break;
    case 'listarOrdenes':
        $arr=q("SELECT o.*,TO_CHAR(o.created_at :: DATE, 'dd/mm/yyyy') AS fecha,os.name status_tracking,t.orders_status_id FROM (SELECT o.*,MAX(t.id) as t_id FROM orders o INNER JOIN order_address oa ON oa.id=o.order_address_id INNER JOIN trackings t ON t.orders_id=o.id GROUP BY o.id) o INNER JOIN trackings t ON t.id=o.t_id INNER JOIN orders_status os ON os.id=t.orders_status_id ORDER BY o.id DESC");
        if(is_array($arr)){
            salidaNueva($arr,"Listando ordenes");
        }else{
            salidaNueva(null,"Disculpe, intente de nuevo",false);
        }
    break;
    case 'crearOrden':
        crearOrden($json);
    break;
    case 'consultarOrden':
        $id=$_GET['id'];
        $arr=q("SELECT (SELECT json_agg(
            json_build_object(
            'id', op.products_id, 
            'cant', op.cant,
            'image',p.photo,
            'name',p.name,
            'price',op.price
        )
        
) FROM order_products op INNER JOIN products p ON p.id=op.products_id WHERE op.orders=o.id) productos,(SELECT rate FROM coins WHERE id='1') rate,oa.address, p.name as nombre_usuario, o.*,TO_CHAR(o.created_at :: DATE, 'dd/mm/yyyy') AS fecha,TO_CHAR(o.delivery_time_date :: DATE, 'dd/mm/yyyy') AS fecha_entrega,os.name status_tracking,t.orders_status_id FROM (SELECT o.*,MAX(t.id) as t_id FROM orders o INNER JOIN trackings t ON t.orders_id=o.id GROUP BY o.id) o INNER JOIN trackings t ON t.id=o.t_id INNER JOIN orders_status os ON os.id=t.orders_status_id LEFT JOIN order_address oa ON oa.id=o.order_address_id INNER JOIN users ON o.users_id=users.id INNER JOIN peoples p ON p.id=users.peoples_id WHERE o.id='$id'");
        if(is_array($arr)){
            salidaNueva($arr,"Orden consultada");
        }else{
            salidaNueva(null,"Disculpe, intente de nuevo",false);
        }
    break;
    case 'recargoEnvio':
        $arr[0]['precio']=20000.00000001;
        salidaNueva($arr,"Recargo envio");
    break;
    case 'horasDisponiblesEntrega':
        $horasNoDisponibles=array(20,21,22,23,01,02,03,04,05,06,07);
        $iniciarDespuesDe=2; //Horas
        $timenow = time();
        $index=0;
            for ($i = $iniciarDespuesDe; $i < 24; $i ++) {
                $ago = strtotime("+ $i hours",$timenow);
                $hora=strftime('%H',$ago);
                $diaActual=strftime('%d',$timenow);
              
                if(!in_array($hora,$horasNoDisponibles)){
                    $diaDisponible=strftime('%d',$ago);
                    //$horas[]['id']='A';
                    $horas[$index]['id']=$index;
                    $horas[$index]['time']=$ago;
                    $msjHora=date('h:iA',$ago);
                    if($diaActual==$diaDisponible){
                        $msj="Hoy";
                    }else{
                        $msj="Mañana";
                    }
                    $horas[$index]['name']=$msj." - ".$msjHora;
                    $index++;
                }
             
            }
   
       // array('1','2','3','4','5','6','7','8','9','10');
        //$horas[]['id']='A';
       // $horas[]['id']='B';
        salidaNueva($horas,"Listando horas disponible para entrega");
    break;
    case 'getPerfil':
        $users_id=$_SESSION['usuario']['id'];
        $arr=q("SELECT users.email, split_part(p.rif, '-', 1) as nacionalidad,split_part(p.rif, '-', 2) as nro_rif,p.rif,p.sex,p.name FROM users INNER JOIN peoples p ON p.id=users.peoples_id WHERE users.id='$users_id'");
        if(is_array($arr)){
            salidaNueva($arr,"Perfil");
       }else{
        salidaNueva(null,"Disculpe, intente de nuevo",false);
       }
    break;
    case 'actualizarPerfil':
        $rif=$_POST['rif'];
        $sex=$_POST['sex'];
        $name=$_POST['name'];
        $users_id=$_SESSION['usuario']['id'];
        $sql="UPDATE peoples SET rif='$rif',name='$name',sex='$sex' WHERE id=(SELECT peoples_id FROM users WHERE id='$users_id') RETURNING id";
      //  salidaNueva(null,$sql,false);
       $arr=q($sql);
       if(is_array($arr)){
            salidaNueva($arr,"Perfil actualizado correctamente");
       }else{
        salidaNueva(null,"Disculpe, intente de nuevo",false);
       }
        
    break;
    default:
        salida($row,"Disculpe debe enviar un evento",false);
}
function crearOrden($json){
    exit($json);

}
function listarProductosCarrito($json){

    $productos=json_decode($json);
   
    foreach($productos as $id=>$cant){
        if($cant>0){
        $where.=' p.id='.$id.' OR';
        $arr[$id]=$cant;
        }
        
    }
    $where='AND ('.rtrim($where,' OR').')';
    $sql=getSqlListarProductos('',trim($where));
    listarProductos($sql,$arr);
}
function listarProductosPorBusqueda(){
    $texto=strtolower($_GET['texto']);
    $where="AND LOWER(p.name) LIKE '%$texto%'";

    $sql=getSqlListarProductos('',$where,'');
    //exit($sql);
    listarProductos($sql);    
}
function buscarProducto(){
  
    $texto=strtolower($_GET['texto']);
    $arr=q("SELECT name,price FROM products WHERE LOWER(name) LIKE '%$texto%'");
    if(is_array($arr)){
        salidaNueva($arr,"Coincidencia");
    }else{
        salidaNueva(null,"No se encuentran productos",false);
    }
}
function guardarVisitaProducto(){
    $users_id   =$_SESSION['usuario']['id'];
    $products_id=$_GET['products_id'];
    $arr=q("SELECT 1 FROM user_visit_products WHERE products_id='$products_id' AND users_id='$users_id'");
    if(is_array($arr)){
        q("UPDATE user_visit_products SET updated_at=NOW() WHERE products_id='$products_id' AND users_id='$users_id'");
    }else{
        q("INSERT INTO user_visit_products (products_id,users_id,created_at,updated_at) VALUES ('$products_id','$users_id',NOW(),NOW())");
    }
}
function guardarOpinion(){
    $users_id   =$_SESSION['usuario']['id'];
    $products_id=$_GET['products_id'];
    $opinion=$_GET['opinion'];
    $arr=q("UPDATE rating_products SET opinion='$opinion' WHERE users_id='$users_id' AND products_id='$products_id' RETURNING id");
if(is_array($arr)){
    salidaNueva(null,"Gracias por su comentario.");
}
salidaNueva(null,"Disculpe, intente nuevamente.",false);
}
function guardarCalificacion(){
    $users_id   =$_SESSION['usuario']['id'];
    $products_id=$_GET['products_id'];
    $rating     =$_GET['rating'];
    q("DELETE FROM rating_products WHERE users_id='$users_id' AND products_id='$products_id'");
    $arr=q("INSERT INTO rating_products (users_id,products_id,rating) VALUES('$users_id','$products_id','$rating') RETURNING id");
    
    if(is_array($arr)){
        salidaNueva(null,"Calificado exitosamente");
    }else{
        salidaNueva(null,"Ha fallado la calificación",false);
    }
}
function listarProductosIA(){
    $users_id=$_SESSION['usuario']['id'];
    //$users_id=1;
    $cant_mostrar=20;

    try{
        $arr=q('SELECT p.name, p.description_short, p.keyword, products_id FROM user_visit_products uvp INNER JOIN products p ON p.id=uvp.products_id WHERE uvp.updated_at > NOW() - interval \'1 month\' AND uvp.users_id='.$users_id.' LIMIT 50');
        $string="";
        if(is_array($arr)){
            foreach ($arr as $obj){
                $string.=$obj['name']." ".$obj['description_short']." ".$obj['keyword']." ";
            }
        }else{
            $order='ORDER BY RANDOM()';
            $sql=getSqlListarProductos('','',$order);
            listarProductos($sql);
        }
    }
    catch(\Exception $e){
        salidaNueva(null,"disculpe, intente nuevamente");
    }

   $texto_formateado_para_buscar=str_replace(" "," | ",preg_replace('/\s+/', ' ', trim($string)));
   try{
       $sql="SELECT p.id, p.name, ts_rank_cd(to_tsvector(description_short), query) AS rank
       FROM products p, to_tsquery('$texto_formateado_para_buscar') query
       WHERE query @@ to_tsvector(description_short)
       ORDER BY rank DESC
       LIMIT $cant_mostrar";
      $join="INNER JOIN ($sql) as r ON r.id=p.id";
      $sql=getSqlListarProductos($join);
      listarProductos($sql);
    }
    catch(\Exception $e){
        salidaNueva(null,"disculpe, intente nuevamente 2");
    }
}
function getSqlListarProductos($join='',$where='',$order='ORDER BY p.id DESC',$limit=''){
    $users_id=$_SESSION['usuario']['id'];
    $sql="SELECT p.description_short,coalesce(SUM(t.value),0.000000) total_impuesto,coalesce(((p.price*SUM(t.value)/100)+p.price),p.price) total_precio, p.name,p.photo as image, p.id, p.price,(SELECT 1 FROM rating_products WHERE users_id='$users_id' AND products_id=p.id) as calificado_por_mi, ROUND(p.user_rating) as rating,coalesce(((p.price*SUM(t.value)/100)+p.price),p.price)/(SELECT rate FROM coins WHERE id=1) as total_precio_dolar FROM products p LEFT JOIN det_product_taxes dpt ON dpt.products_id=p.id  LEFT JOIN taxes t ON t.id=dpt.taxes_id and t.status='A' $join  WHERE (p.status='A' AND p.qty_avaliable>0) $where GROUP BY p.id $limit $order";
 
    return $sql;
}
function listarProductos($sql,$agregarCantidad=false){
    
    $row=q($sql);
    if(is_array($row)){
        $row=recortar_imagen($row,$agregarCantidad);
        salidaNueva($row);
    }else{
        salidaNueva(null,"No hay productos disponibles",false);
    }
}
function consultarFavorito(){
    $users_id=$_SESSION['usuario']['id'];
    $products_id=$_GET['products_id'];
    $arr=q("SELECT id FROM favorites WHERE products_id='$products_id' AND users_id='$users_id'");
    if(is_array($arr)){
        salidaNueva($row,"Consulta procesada");
    }else{
        salidaNueva(null,"No es su favorito",false);
    }   
}
function guardarFavorito(){
    $users_id=$_SESSION['usuario']['id'];
    $products_id=$_GET['products_id'];
    $arr=q("SELECT id FROM favorites WHERE products_id='$products_id' AND users_id='$users_id'");
    if(is_array($arr)){
        $id=$arr[0]['id'];
        $arr=q("DELETE FROM favorites WHERE id='$id' RETURNING id");
    }else{
        $arr=q("INSERT INTO favorites (users_id,products_id) VALUES ('$users_id','$products_id') RETURNING id");

    }
    if(is_array($arr)){
        salida(null,"Modificado exitosamente");
    }else{
        salida(null,"Disculpe, intente mas tarde",false);
    }   
}
/*
function listarProductos(){
    //SELECT SUM(t.value) total_impuesto,((p.price*SUM(t.value)/100)+p.price) precio_impuesto, p.name,p.photo as image, p.id, p.price, ROUND(p.user_rating) as rating FROM products p LEFT JOIN det_product_taxes dpt ON dpt.products_id=p.id  LEFT JOIN taxes t ON t.id=dpt.taxes_id and t.status='A'  WHERE p.status='A' AND p.qty_avaliable>0 GROUP BY p.id
    //$row=q("SELECT name,photo as image,id,price,ROUND(user_rating) as rating FROM products WHERE status='A' AND qty_avaliable>0");
    $row=q("SELECT p.description_short,coalesce(SUM(t.value),0.000000) total_impuesto,coalesce(((p.price*SUM(t.value)/100)+p.price),p.price) total_precio, p.name,p.photo as image, p.id, p.price, ROUND(p.user_rating) as rating,coalesce(((p.price*SUM(t.value)/100)+p.price),p.price)/(SELECT rate FROM coins WHERE id=1) as total_precio_dolar FROM products p LEFT JOIN det_product_taxes dpt ON dpt.products_id=p.id  LEFT JOIN taxes t ON t.id=dpt.taxes_id and t.status='A'  WHERE p.status='A' AND p.qty_avaliable>0 GROUP BY p.id");
    $row=recortar_imagen($row);
    salida_movil($row);
}
*/
function listar_categorias_movil(){
    $row=q("SELECT name,image,id FROM categories WHERE status='A'");
    $row=recortar_imagen($row);
    salida_movil($row,"Listado de categorias",true);
}
function eliminarDireccion(){
    $users_id=$_SESSION['usuario']['id'];
    $id=$_GET['id'];
    $arr=q("UPDATE order_address SET status='I' WHERE users_id='$users_id' AND id='$id'");
    salida($row,"Eliminado correctamente");
}
function getAdreess(){
    $users_id=$_SESSION['usuario']['id'];
    $arr=q("SELECT oa.*, st.id states_id, re.id regions_id, st.name st_name,ci.name ci_name,re.name re_name FROM order_address oa INNER JOIN cities ci ON ci.id=oa.cities_id INNER JOIN regions re ON re.id=ci.regions_id INNER JOIN states st ON st.id=re.states_id WHERE oa.users_id='$users_id' AND oa.status='A'");
    if(is_array($arr)){
        salida_list($arr);
    }else{
        salida($row,"Disculpe no hay direcciones.",false);
    }
}
function guardarDireccion(){
    $users_id=$_SESSION['usuario']['id'];
    $cities_id=$_POST['cities_id'];
    $address=$_POST['address'];
    $zip_code=$_POST['zip_code'];
    $urb=$_POST['urb'];
    $sector=$_POST['sector'];
    $nro_home=$_POST['nro_home'];
    $reference_point=$_POST['reference_point'];
    $id=$_GET['id'];
    if($id){//Actualiza
        $arr=q("UPDATE order_address SET cities_id='$cities_id',address='$address',zip_code='$zip_code',urb='$urb',sector='$sector',nro_home='$nro_home',reference_point='$reference_point' WHERE users_id='$users_id' AND id='$id' RETURNING id");
    }else{//Registra
        $sql="INSERT INTO order_address (users_id,cities_id,address,zip_code,urb,sector,nro_home,reference_point) VALUES ('$users_id','$cities_id','$address','$zip_code','$urb','$sector','$nro_home','$reference_point' ) RETURNING id";
   // exit();
        //salida(null,$sql,false);
        $arr=q($sql);
    }
    if(is_array($arr)){
        salida(null,"Guardado exitosamente");
    }else{
        salida(null,"Disculpe, intente mas tarde",false);
    }

}
function getStates(){
    $arr=q("SELECT id,name FROM states WHERE status='A' ORDER BY name");
    if(is_array($arr)){
        salida_list($arr);
    }else{
        salida(null,"No se cargaron los estados",false);
    }
}
function getCities(){
    
    $regions_id=$_GET['regions_id'];
    $arr=q("SELECT id,name,regions_id FROM cities WHERE status='A' AND regions_id='$regions_id' ORDER BY name");
    if(is_array($arr)){
        salida_list($arr);
    }else{
        salida(null,"No se cargaron las parroquias",false);
    }
}
function getRegions(){
    $states_id=$_GET['states_id'];
    $arr=q("SELECT id,name,states_id FROM regions WHERE status='A' AND states_id='$states_id' ORDER BY name");
    if(is_array($arr)){
        salida_list($arr);
    }else{
        salida(null,"No se cargaron los municipios",false);
    }
}
function cambiarClave(){
    $email  =$_SESSION['usuario']['email'];
    $passwordActual=$_POST['passwordActual']; 
    $password   =password_hash($_POST['password'],PASSWORD_BCRYPT);
    $res=q("SELECT password FROM users WHERE email='$email'");
    if(is_array($res)){
        if(password_verify($passwordActual,$res[0]['password'])){
            q("UPDATE users SET password='$password' WHERE email='$email'");
            salida(null,"Su contraseña ha sido cambiada.");
        }else{
            salida(null,"Contraseña actual invalida.",false);
        }
    }else{
        salida(null,"Por favor inicie de nuevo la sesión.",false);
    }
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
function recortar_imagen($row,$cant=null){
    foreach($row as $id=>$value){
        $img=json_decode($value['image']);
        if(is_array($img)){
            $imgLista=$img[0];
        }else{
            $imgLista=$value['image'];
        }
        $arr=explode(".",$imgLista);

        $row[$id]['image']=$arr[0].'-cropped.'.$arr[1];
        $row[$id]['image_grande']=$value['image'];
        $row[$id]['name']=ucwords(mb_strtolower($value['name']));
        $row[$id]['description_short']=ucfirst(mb_strtolower($value['description_short']));
        if(is_array($cant)){
            $row[$id]['cant']=$cant[$value['id']];
        }
        
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
function salidaNueva($row,$msj_general="",$bueno=true){
    $rowa['success']=$bueno;
    if(!$bueno) header('HTTP/1.1 409 Conflict');
    $rowa['msj_general']=$msj_general;
    $rowa['data']=$row;
    echo json_encode($rowa);
    exit();
}
function salida_movil($row,$msj_general="",$bueno=true){
    if(!$bueno) header('HTTP/1.1 409 Conflict');
    echo json_encode($row);
    exit();
}
function salida_list($row,$bueno=true){
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