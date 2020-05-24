if(document.getElementById("div_fecha")){
    
    div_fecha.innerHTML="Cargando...";
    get('horasDisponiblesEntrega');
}

if(document.getElementById("div_direccion_entrega")){
    
    div_direccion_entrega.innerHTML="Cargando...";
    get('getAdreess');
}







function procesar(data,evento){
    
    switch(evento){
    case 'web_no_login':
   // console.log(data);
    var data = JSON.parse(JXG.decompress(data));

        break;
        case 'horasDisponiblesEntrega':
            var data = JSON.parse(data);
            var options='';
            if(data.success){
                var datos=data.data;
                for (var [key, value] of Object.entries(datos)) {
                    options+="<option value"+value.time+">"+value.name+"</option>";
                    //console.log(key+" "+value.name);
                }
                div_fecha.innerHTML="<select class='form-control' name='timepick' v-model='datetime' name='fecha_hora_entrega'>"+options+"</select>";
            }else{
                alert(data.msj_general);
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
                    options+="<option value"+value.id+">"+value.address+" - "+value.st_name+", "+value.re_name+", "+value.urb+", "+value.sector+",  #"+value.nro_home+"</option>";
                    //console.log(key+" "+value.name);
                }
                div_direccion_entrega.innerHTML="<select class='form-control' name='direccion' v-model='selectedDirection' name='fecha_hora_entrega'>"+options+"</select><br><a href='/profile'>Agregar nueva dirección</a>";
            }else{
                alert(data.msj_general);
                return false;
            }
           
        break;

    }

}

































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