miStorage = window.localStorage;
var urlBaseImagen="storage/";
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
function productos_home(){
    ht='';
    data=getLocal('productos'); 
    var div_listarCombos=document.getElementById("div_productos_home");
    data['data'].forEach(element => {
        var preD=formatD(element.total_precio_dolar);
        var preB=formatB(element.total_precio);
        divPrecioBolivar='<div class="monto">'+preB+'</div>';
        divPrecioDolar='<div class="monto">'+preD+'</div>';
        ht+='<div class="col-md-2 caja_producto"><div class="cajaImagenProducto"><img width="200px" src="'+urlBaseImagen+element.image+'"></div><div class="name_combo">'+element.name+'</div>'+divPrecioBolivar+divPrecioDolar+'</div>';
    }); 
    div_listarCombos.innerHTML=ht;
    console.log(data);
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