miStorage = window.localStorage;
var urlBaseImagen="storage/";
var categoriaActual=null;
var filtroPreIni=0;
var filtroPreFin=50;
cambiarPagina('inicio');
function get(evento,variables="") {
    //alert(variables);
     //alert(url);
     var host=window.location.host;
     var protocol=window.location.protocol;
     var xmlhttp = new XMLHttpRequest();
     let data=new Map();
     data['success']=false;
     data['msj_general']="Intente mas tarde";
     xmlhttp.onreadystatechange = function() {
         if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
            if (xmlhttp.status == 200 || xmlhttp.status == 409) {
               
               procesar(xmlhttp.responseText,evento);
            
            }else {
             procesar(data,evento);
            }
         }
     };
    
     xmlhttp.open("GET", protocol+"//"+host+"/api_rapida.php?evento="+evento+variables, true);
      xmlhttp.send();
 }







get("web_no_login");
function procesar(data,evento){
    switch(evento){
    case 'web_no_login':
   // console.log(data);
    var data = JSON.parse(JXG.decompress(data));

        if(data.success==true){
            var datos=data.data;
            for (var [key, value] of Object.entries(datos)) {
                setLocal(key, value);
            }
            console.log(data);
            listarPublicidad();
            listarCombos();
            listar_categorias_movil_4();
            listar_publicidad_final();
            listar_publicidad_medio();
            productos_home();
            listar_categorias_movil_menu();
        }

        break;
        }
}

function setLocal(key,value){
    localStorage.setItem(key, JSON.stringify(value));
}
function getLocal(key){
    return JSON.parse(localStorage.getItem(key));
}

function listarPublicidad(){
    data=getLocal('listarPublicidadToda');
    console.log(data);
    
    ht='';
    var carrousel=document.getElementById("imagenesCarrousel");
    var tipo='active';
    data['data'].forEach(element => {
        if(element.type=="top"){
        ht+='<div class="carousel-item '+tipo+'"><img class="d-block w-100" src="storage/'+element.image+'" alt="First slide"></div>';
        tipo=''
        }
    });
    carrousel.innerHTML=ht;
}








function cambiarPagina(nombre,tipo,imagen){
    //alert(window.location.hash);
   
    switch(nombre){
        case 'categorias':
            categoriaActual=tipo;
            contenido.innerHTML="<div class='container-fluid'><div class='row'><img width='100%' src='"+urlBaseImagen+imagen+"'></div><div class='row mar'><div class='col-md-3'>"+divIzq()+"</div><div class='col-md-9'>"+divDer()+"</div></div></div>";
        break;
        default:

            contenido.innerHTML=paginaPrincipal();
            listarPublicidad();
            listarCombos();
            listar_categorias_movil_4();
            listar_publicidad_final();
            listar_publicidad_medio();
            productos_home();
            listar_categorias_movil_menu();
        break;
    }
    
}
function divIzq(){
    return divFiltro();
}
function divDer(){
    ht='';
    
    data=procesarProductos('recientes');
    var i=0;
    var total=0;
    datos.forEach(element => {
        i++;
        total++;
        ht+=cajaProductosHorizontal(element,'12');
     }); 
     a=divTopFiltro(i,total);
    return a+'<div id="DerHorizontalPro">'+ht+'</div>';
}
function cambiarDataFiltroHorizontal(tipo){
    var i=0;
    var total=0;
    data=procesarProductos(tipo);
    
    datos.forEach(element => {
        i++;
        total++;
        ht+=cajaProductosHorizontal(element,'12');
     }); 
     DerHorizontalPro.innerHTML=ht;
}
function fitrarRango(){
    if(minRango.value<0){
        minRango.value=0;
    }
    if(maxRango.value>50){
        maxRango.value=0;
    }
    if(minRango.value>=maxRango.value){
        minRango.value=maxRango.value-1;
    }
    //alert(value);
}
function divFiltro(){

   // var checkOfertas='<div class="titulo_filtro_izq_span"><input type="radio" id="check_reciente"> <span>Más recientes</span></div>';





    var html='<div class="row row_filtro_izq"><div class="col-12 tituloFiltroIzqPrincipal"><img src="img/ico_filtro.png"> Filtrado por:</div></div>'+
    '<div class="row"><div class="col-12 tituloFiltroIzq">Precio $:</div></div>'+
    '<div class="row"><div class="col-6"><input id="minRango" onchange="fitrarRango()" max="49" min="0" type="number" class="form-control" value="'+filtroPreIni+'"></div><div class="col-6"><input id="maxRango" onchange="fitrarRango()" max="50" min="1" type="number" value="'+filtroPreFin+'" class="form-control"></div></div>'+
    //'<div class="row"><div class="col-12 tituloFiltroIzq">Ofertas:'+checkOfertas+'</div></div>'+
    '<div class="row mt-3"><div class="col-12 tituloFiltroIzq">Por etiquetas:</div></div>'
    ;
    return html;
}
function divTopFiltro(cant,total){
    return '<div class="row" id="topFiltro"><div class="col-md-8 justify-content-center align-self-center">Mostrando <span id="cantMostrandoFiltro">'+cant+'</span> de <span id="cantTotalFiltro">'+total+'</span> productos</div><div class="col-md-4">'+cuadroOrganizar()+'</div></div>';
}
function cuadroOrganizar(){
    var options='<option value="recientes">Más recientes</option>'+
    '<option value="mas_vendido">Mas vendidos</option>'+
    '<option value="precio">Mejores precios</option>'+
    '<option value="a_z" >Orden alfabético A-Z</option>'+
    '<option value="z_a" >Orden alfabético Z-A</option>';
    return 'Organizar por: '+'<select id="selectOrganizar" onchange="cambiarDataFiltroHorizontal(this.value)" id="optionOrganizar">'+options+'</select>';
}
function listarCombos(){
    ht='';
    data=getLocal('listarCombos'); 
    var div_listarCombos=document.getElementById("listarCombos");
    data['data'].forEach(element => {
        var preD=formatD(element.total_precio_dolar);
        var preB=formatB(element.total_precio);
        divPrecioBolivar='<div class="monto">'+preB+'</div>';
        divPrecioDolar='<div class="monto">'+preD+'</div>';
        ht+='<div class="col-md-3"><div><img class="img_combo" src="'+urlBaseImagen+element.image_web+'"></div><div class="name_combo">'+element.name+'</div>'+divPrecioBolivar+divPrecioDolar+'</div>';
    }); 
    div_listarCombos.innerHTML=ht;
    console.log(data);
}
function productos_homeb(){ //ELIMINAR
   listarProductos('pro_mejor_precio',"div_productos_home")
}

function listarProductosb(tipo,div){
    ht='';
    data=getLocal('productos'); 
    dataTipo=getLocal(tipo); 
    var div=document.getElementById(div);
    
    for( let a in dataTipo ){
        
      ht+=cajaProductos(data[a]);
        
    };

    div.innerHTML=ht;
    //console.log(data);
}

function cambiar_listado_productos_home(tipo,a){
    listarProductos(tipo,"div_productos_home");
    a_recientes.classList.remove("btnactive");
    a_mas_vendido.classList.remove("btnactive");
    a_precio.classList.remove("btnactive");
    a_a_z.classList.remove("btnactive");
    a_z_a.classList.remove("btnactive");
    a.classList.add("btnactive");
}
function productos_home(){ //ELIMINAR
    listarProductos('recientes',"div_productos_home");
}

function listarProductos(tipo,div){//eliminar

    data=procesarProductos(tipo);
    data.forEach(element => { //decia datos noc porque
      ht+=cajaProductos(element);
   }); 
   var div=document.getElementById(div);
   div.innerHTML=ht;
    console.log(datos);
}

function procesarProductos(tipo){
    ht='';
    data=getLocal('productos'); 
    datos=data['data'];
    switch(tipo){
        case 'precio':
            datos.sort((a, b) => a.price - b.price);
        break;
        case 'a_z':
            datos.sort((a, b) => a.name.localeCompare(b.name));
        break;
        case 'z_a':
            datos.sort((a, b) => b.name.localeCompare(a.name));
        break;
        case 'recientes':
            datos.sort((a, b) => a.id - b.id);
        break;
        case 'mas_vendido':
            datos.sort((a, b) => b.qty_sold - a.qty_sold);
        break;
    }
    if(categoriaActual!=null){
        datos = datos.filter(element => JSON.parse(element.json_subcategories)[0].c ==categoriaActual);
    }
    return datos;
}

function cajaProductos(element,tamano='2'){
    var htm='';
    var preD=formatD(element.total_precio_dolar);
    var preB=formatB(element.total_precio);
    disponible='<div class="monto">('+element.qty_avaliable+' Disponibles)</div>';
    divPrecioBolivar='<div class="monto">'+preB+'</div>';
    divPrecioDolar='<div class="monto">'+preD+'</div>';
    htm+='<div class="col-md-'+tamano+' caja_producto"><div class="cajaImagenProducto"><img width="200px" src="'+urlBaseImagen+element.image+'"></div><div class="name_combo">'+element.name+'</div>'+disponible+divPrecioBolivar+divPrecioDolar+'</div>';
    return htm;
}
function cajaProductosHorizontal(element,tamano='9'){
    var htm='';
    var preD=formatD(element.total_precio_dolar);
    var preB=formatB(element.total_precio);
    disponible='<div class="texto_dere">Disponibles: '+element.qty_avaliable+' en Stock</div>';
    cantidad_carrito='<div class="texto_dere">Cantidad: <span>0</span> en Carrito</div>';
    btnAgregar='<div class="texto_dere button_agregar"><a><img class="ml-1 mr-1" src="/img/carrito.png" width="18" alt="Carrito">Añadir al carrito</a></div>';
    btnAgregarFavorito='<div class="texto_dere "><a ><img class="ml-2 mr-1" src="/img/favorito.png" width="15" alt="Favoritos"> Añadir a favoritos</a></div>';
    btnVerProducto='<div class="texto_dere"><a ><img class="ml-2 mr-1" src="/img/ico_buscar.png" width="18" alt="Buscar"> Ver producto</a></div>';
    divPrecioBolivar='<div class="monto">'+preB+'</div>';
    divPrecioDolar='<div class="monto">'+preD+'</div>';
    htm+='<div class="cajaHorizontalProductos col-md-'+tamano+' "><div class="row"><div class="col-md-3 col-4"><img src="'+urlBaseImagen+element.image+'"></div><div class="col-md-6 col-3 justify-content-center align-self-center"><div class="name_combo">'+element.name+'</div>'+divPrecioBolivar+divPrecioDolar+'</div><div class="col-5 col-md-3 cajitaAgregarHorizontal">'+disponible+cantidad_carrito+btnAgregar+btnAgregarFavorito+btnVerProducto+'</div></div></div>';
    return htm;
}


function listar_categorias_movil_4(){
    var i=0;
    ht='';
    data=getLocal('listar_categorias_movil'); 
    var div_listar_categorias_movil_4=document.getElementById("listar_categorias_movil_4");
    data['data'].forEach(element => {
        if(i<4){
        ht+='<div class="col-md-3"><img class="img_categoria_4" src="'+urlBaseImagen+element.image_grande+'"></div>';
        }
        i++;
    }); 
    div_listar_categorias_movil_4.innerHTML=ht;
    console.log(data);
    
}
function listar_categorias_movil_menu(){
    var i=0;
    hy='';
    ht='';
    conoce='';
 cierraD='</div></li>';
 conoce+='<a class="dropdown-item" href="#">Cultura bio</a>';
 conoce+='<a class="dropdown-item" href="#">Sucursales</a>';
 conoce+='<a class="dropdown-item" href="#">Proveedores</a>';
 conoce+='<a class="dropdown-item" href="#">Contacto</a>';
    datab=getLocal('listar_categorias_movil'); 
    var ULmenuCategorias=document.getElementById("ulmenuCategorias");
    ht+='<li class="nav-item active"><a class="nav-link" id="pagina_inicio_link" onclick="cambiarPagina(\'inicio\')">Inicio <span class="sr-only">(current)</span></a></li>';
   datab['data'].forEach(element => {
        if(i<6){
            //alert(element.name);
        ht+='<li class="nav-item"><a class="nav-link" href="#cate_'+element.id+'" onclick="cambiarPagina(\'categorias\','+element.id+',\''+element.image_b+'\')">'+element.name+' <span class="sr-only">(current)</span></a></li>';
     
        }else{
        hy+='<a class="dropdown-item" href="#cate_'+element.id+'" onclick="cambiarPagina(\'categorias\','+element.id+',\''+element.image_b+'\')">'+element.name+'</a>';
        }
        
        i++;
    }); 
    ht+=abreD('Mas categorias',"navbarDropdownA")+hy+cierraD;
    ht+=abreD('Conoce a bio mercados',"navbarDropdownB")+conoce+cierraD;
    ULmenuCategorias.innerHTML=ht;
    console.log(data);
    
}
function abreD(titulo,id){
    aabreD='<li class="nav-item dropdown">'+
    '<a class="nav-link dropdown-toggle" href="#" id="'+id+'" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
      titulo+
    '</a>'+
   '<div class="dropdown-menu" aria-labelledby="'+id+'">';
   return aabreD;
}
function listar_publicidad_medio(){
    data=getLocal('listarPublicidadToda');
    console.log(data);
    
    ht='';
    var carrousel=document.getElementById("listar_publicidad_medio");
    var tipo='active';
    data['data'].forEach(element => {
        if(element.type=="medio"){
        ht+='<div class="carousel-item '+tipo+'"><img  class="d-block w-100" src="storage/'+element.image+'" alt="First slide"></div>';
        tipo=''
        }
    });
    carrousel.innerHTML=ht;
    
}
function listar_publicidad_final(){
    data=getLocal('listarPublicidadToda');
    console.log(data);
    
    ht='';
    var carrousel=document.getElementById("listar_publicidad_final");
    var tipo='active';
    data['data'].forEach(element => {
        if(element.type=="footer"){
        ht+='<div class="carousel-item '+tipo+'"><img  class="d-block w-100" src="storage/'+element.image+'" alt="First slide"></div>';
        tipo=''
        }
    });
    carrousel.innerHTML=ht;
    
}


function paginaPrincipal(){
    categoriaActual=null;
    var todo='<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">'+
    '<div class="carousel-inner" id="imagenesCarrousel">'+

    '</div>'+
    '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">'+
      '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Atras</span>'+
    '</a>'+
    '<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">'+
      '<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
     '<span class="sr-only">Siguiente</span>'+
    '</a>'+
  '</div>'+


  '<div class="container-fluid">'+


'<br>'+
  '<div class="row">'+
    '<div class="col-md-12 tituloPrincipal">'+
      'Mi Compra Fácil'+
    '</div>'+
  '</div>'+
 '</div>'+

  '<div class="row mar" id="listarCombos">'+
    
  '</div>'+
  '<div class="row mar" id="listar_categorias_movil_4">'+
    
  '</div>'+


  '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">'+
    '<div class="carousel-inner" id="listar_publicidad_medio">'+

    '</div>'+
    '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">'+
     '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Atras</span>'+
    '</a>'+
    '<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">'+
      '<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Siguiente</span>'+
    '</a>'+
  '</div>'+

  '<div class="container-fluid">'+
  '<div class="row">'+
    '<div class="col-md-12 tituloPrincipal">'+
    'Nuestros productos'+
    '</div>'+
  '</div>'+
  '<div class="row" id="div_btn_filtros_home">'+
    '<div class="mx-auto">'+
    '<a id="a_recientes" class="btn button btnactive" onclick="cambiar_listado_productos_home(\'recientes\',this)"><span>Más recientes </span></a>'+
    '<a id="a_mas_vendido" class="btn button" onclick="cambiar_listado_productos_home(\'mas_vendido\',this)"><span>Mas vendidos </span></a>'+
    '<a id="a_precio" class="btn button" onclick="cambiar_listado_productos_home(\'precio\',this)"><span>Mejores precios</span></a>'+
    '<a id="a_a_z" class="btn button" onclick="cambiar_listado_productos_home(\'a_z\',this)"><span>Orden alfabético A-Z </span></a>'+
    '<a id="a_z_a" class="btn button" onclick="cambiar_listado_productos_home(\'z_a\',this)"><span>Orden alfabético Z-A </span></a>'+
  '</div>'+
  '</div>'+
  '<div class="row mar" id="div_productos_home">'+
    

  '</div>'+



  '</div>'+


  '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">'+
    '<div class="carousel-inner" id="listar_publicidad_final">'+

    '</div>'+
    '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">'+
      '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Atras</span>'+
    '</a>'+
    '<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">'+
      '<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Siguiente</span>'+
    '</a>'+
  '</div>';
  return todo;
}



function formatB(amount){
    return formatMoney(amount,2, ",", ".")+" Bs";
}
function formatD(amount){
    return "$"+formatMoney(amount,2, ".", ",");
}
function formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
    try {
      decimalCount = Math.abs(decimalCount);
      decimalCount = isNaN(decimalCount) ? 2 : decimalCount;
  
      const negativeSign = amount < 0 ? "-" : "";
  
      let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
      let j = (i.length > 3) ? i.length % 3 : 0;
  
      return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    } catch (e) {
      console.log(e)
    }
  };