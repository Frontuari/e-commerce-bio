miStorage = window.localStorage;
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
    case 'listarPublicidad':
        listarPublicidad();
        break;
    case 'web_no_login':
    console.log(data);
    var data = JSON.parse(JXG.decompress(data));

        if(data.success==true){
        var datos=data.data;

        // datos.forEach( function(valor, indice, array) {
        //  console.log("En el índice " + indice + " hay este valor: " + valor);
        //});
        //datos.forEach(element => console.log(element));
        //localStorage.setItem('miGato', 'Juan');

        for (var [key, value] of Object.entries(datos)) {
            //console.log(key + ' ' + value);
            localStorage.setItem(key, JSON.stringify(value));

        }
        var cat = JSON.parse(localStorage.getItem('publicidad_top'));
            console.log(cat.data);
        //  console.log(cat.data);

        // console.log(datos);
        }

        break;
        }
}

function listarPublicidad(data){
    ht='';
    var carrousel=document.getElementById("imagenesCarrousel");
    var tipo='active';
    data['data'].forEach(element => {
        ht+='<div class="carousel-item '+tipo+'"><img height="360px" class="d-block w-100" src="storage/'+element.image+'" alt="First slide"></div>';
        tipo=''
    });
    carrousel.innerHTML=ht;
}