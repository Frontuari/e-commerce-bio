


if(document.getElementById("div_fecha")){
    
    div_fecha.innerHTML="Cargando...";
    get('horasDisponiblesEntrega');
}

if(document.getElementById("div_direccion_entrega")){
    
    div_direccion_entrega.innerHTML="Cargando...";
    get('getAdreess');
}

if(document.getElementById("div_resumen_compra")){
    div_resumen_compra.innerHTML="<div class='loaderb'><div>";
    get('web_no_login');
}

var activar_envio=false;
var direccionOrden=0;
var horaEntregaOrden="NULL";






function procesar(data,evento){
    
    switch(evento){
        case 'crearOrden':
            var data = JSON.parse(data);

            if(data.success==true){

                alert("Su orden fue procesada exitosamente, proceda a realizar el pago.");
                window.location="/profile";
                vaciarCarrito();
            }else{
                alert(data.msj_general);
            }

        break;
        case 'web_no_login':
      
            var data = JSON.parse(JXG.decompress(data));

            if(data.success==true){
                var datos=data.data;
                for (var [key, value] of Object.entries(datos)) {
                    setLocal(key, value);
                }
                console.log(data);
                actualizarResumenOrden();
            }

        break;
        case 'web_no_logina':
            var data = JSON.parse(JXG.decompress(data));



        break;
        case 'horasDisponiblesEntrega':
            var data = JSON.parse(data);
            var options='';
            if(data.success){
                var datos=data.data;
                for (var [key, value] of Object.entries(datos)) {
                    options+="<option value="+value.time+">"+value.name+"</option>";
                    //console.log(key+" "+value.name);
                }
                div_fecha.innerHTML="<select class='form-control' id='fecha_hora_entrega' name='timepick' v-model='datetime' name='fecha_hora_entrega'>"+options+"</select>";
            }else{
               // alert(data.msj_general);
                return false;
            }
        break;
        case 'getAdreess':
            var data = JSON.parse(data);
            var options='';
            if(data.success){
                var datos=data.data;
                options+="<option value='0'>Pick - Up</option>";
                for (var [key, value] of Object.entries(datos)) {
                    options+="<option value="+value.id+">"+value.address+" - "+value.st_name+", "+value.re_name+", "+value.urb+", "+value.sector+",  #"+value.nro_home+"</option>";
                    //console.log(key+" "+value.name);
                }
                div_direccion_entrega.innerHTML="<select onchange='activarEnvio(this)' class='form-control' name='direccion' v-model='selectedDirection' >"+options+"</select><br><a href='/profile'>Agregar nueva dirección</a>";
            }else{
                //alert(data.msj_general);
                return false;
            }
           
        break;

    }

}
function procesarOrden(){
    if(confirm("A partir de este momento no podra modificar su carrito, esta seguro de continuar?")){
        var datos=getLocal('cartNew');
        var orden=new Object();
        var arrProductos=new Object();
      

        if(direccionOrden==0 || direccionOrden=='0'){
          // orden['direccion']= "NULL";
           //orden="direccion:NULL";
           orden.direccion='NULL';
          //orden.push('direccion: '+'NULL');
        }else{
            //orden['direccion']= direccionOrden;
            //orden.push('direccion: '+direccionOrden);
            orden.direccion=direccionOrden;
            //orden.set("direccion",direccionOrden);
            //orden.add
        }
        
        orden.hora_entrega=fecha_hora_entrega.value;
       // orden.push('hora_entrega: '+fecha_hora_entrega.value);
       //orden.set("hora_entrega",fecha_hora_entrega.value);
        
        for (var [key, value] of Object.entries(datos)) {
            var id       =value.product.id;
            var cant        =value.cant;
            
           arrProductos[id]=cant;
           //arrProductos.set("cant",id);
        }
        //orden.push('productos:{'+arrProductos+'}');
        orden.productos=arrProductos;
        //orden.set("productos",arrProductos);
        //orden.push('productos: '+fecha_hora_entrega.value);
        var json=JSON.stringify(orden);
        console.log(json);
        get('crearOrden','&json='+json);
       

       // alert(orden);
    }else{
        return false;
    }

}
function activarEnvio(a){
    if(a.value==0){
        activar_envio=false;
        direccionOrden=null;
    }else{
        direccionOrden=a.value;
        activar_envio=true;
    }
    actualizarResumenOrden();
}

function actualizarResumenOrden(){
        
        var h='';
        var productos=getLocal('productosb');
        var d_envio=getLocal('envio').data[0];
        console.log(d_envio);


      
        var detalle='';
        var totalB=0.00;
        var totalD=0.00;
        var totalPeso=0.00;
        var totalEnvioB=0.00;
        var totalEnvioD=0.00;
        var datos=getLocal('cartNew');
        console.log(datos);
        for (var [key, value] of Object.entries(datos)) {
            var p       =productos[value.product.id];
            if(p!=null){
            var cant        =value.cant;
            var peso        =p.peso;
            var precio_con_iva=(p.total_precio*cant);
            var precio_dolar=(p.total_precio_dolar*cant);
            var nombre      =p.name;
            totalB+=precio_con_iva;
            totalD+=precio_dolar;
            totalPeso+=peso;

            detalle+='<div class="row" style="margin-bottom:5px; border-bottom:1px solid #ddd "><div class="col-md-1" style="margin:0"><img width="30px" src="storage/'+p.image+'"></div><div class="col-md-5" style="font-size:13px">'+nombre+' <span style="color:red"> X '+cant+'</span></div><div class="col-md-5" style="text-align:right">'+formatB(precio_con_iva)+'<br>'+formatD(precio_dolar)+'</div></div>';
            }
        }

        var peso_max=d_envio.peso_max;
        var precioEnvioB=d_envio.precio_b;
        var precioEnvioD=d_envio.precio_d;
        var peso_cargado=peso_max;
        var multiplo_peso=1;

        while(totalPeso>peso_cargado) {
          multiplo_peso++;
         
            peso_cargado+=(peso_max+peso_cargado);
         
        }
        if(activar_envio==false){
            multiplo_peso=0;
        }
        totalEnvioB=precioEnvioB*multiplo_peso;
        totalEnvioD=precioEnvioD*multiplo_peso;
        totalPagarB=totalEnvioB+totalB;
        totalPagarD=totalEnvioD+totalD;






        h='<div class="detalleOrdenProducts">'+detalle+'</div><br>'+
        '<div class="row"><div class="col-md-4">Sub total:</div><div class="col-md-8" style="text-align:right">'+formatB(totalB)+' / '+formatD(totalD)+'</div></div>'+
        '<div class="row"><div class="col-md-4">Envío:</div><div class="col-md-8" style="text-align:right">'+formatB(totalEnvioB)+' / '+formatD(totalEnvioD)+'</div></div>'+
        '<div class="row"><div class="col-md-4" style="font-size:17px">TOTAL:</div><div class="col-md-8" style="font-size:17px; text-align:right">'+formatB(totalPagarB)+' / '+formatD(totalPagarD)+'</div></div>'+
        '<div class="row"><div class="col-md-12" style="color:red; text-align:right">(impuestos incluidos)</div></div><br>'+
        ''+
        '';

        if(document.getElementById("div_resumen_compra")){
            div_resumen_compra.innerHTML=h;
        }
        if(document.getElementById("div_resumen_compra2")){
            div_resumen_compra2.innerHTML=h;
        }
   
}
function actualizarStore(){
        get('web_no_login');
}


setInterval('actualizarStore()',3000);






























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

 function post(evento,datai) {
    //var datai = new FormData(document.getElementById(idFormulario));
    
    datai.append("evento", evento);


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
     
     xmlhttp.open("POST", protocol+"//"+host+"/api_rapida.php", true);

      xmlhttp.send(datai);
 }

 function setLocal(key,value){
    localStorage.setItem(key, JSON.stringify(value));
}
function getLocal(key){
    return JSON.parse(localStorage.getItem(key));
}
function delLocal(key){
    localStorage.removeItem(key);
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
  function vaciarCarrito(){
    localStorage.clear();
    localStorage.setItem('ModalPrincipal','visto');
  }