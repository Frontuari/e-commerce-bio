var aPagarBs = 0;
var aPagarUsd = 0;
var paymentDataip;
var checkDeliveryType=0;

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

if(document.getElementById("factura")){
	factura.innerHTML="<div class='loaderb'><div>";
	
	get('consultarOrden','&id='+orders_id);
}


var id_orders="";
if(typeof(orders_id) !== "undefined") {
	id_orders = orders_id;
}
var activar_envio=false;
var direccionOrden=0;
var horaEntregaOrden="NULL";

var limite_max_pagos_alcanzado=false;
var ordenPagada=false;

//var aPagarBs = 0;
//var aPagarUsd = 0;


function refrescar(){
	location.reload();
}
function procesarPago(){
	var amount=input_amount.value;
	
	var coins_id=input_coins_id.value;
	var rate=input_rate.value;
	var bank_datas_id=input_bank_datas_id.value;
	var mega_amount='';
	var ref='';

	if(coins_id==2) { //bolivares
		if(amount > aPagarBs) {
			Swal.fire("Bio en Línea","El monto a pagar en Bolivares debe ser exacto","warning");
			throw new Error("El monto a pagar debe ser exacto");
			return false;
		}
		amount=parseFloat(formato_moneda(amount))*rate;
		mega_amount=amount.toFixed(2);
	}
	if(coins_id==1) { //dolares
		// if(amount > aPagarUsd) {
		//     Swal.fire("Bio en Línea","El monto a pagar en Dolares debe ser exacto","warning");
		//     throw new Error("El monto aa pagar debe ser exacto");
		//     return false;
		// }
		amount=amount*rate;
	}

	if(bank_datas_id==3){
		datosBancarios.innerHTML=`
		<div class="row"><div class="col-md-12 text-center"><br>Luego de procesar su pago exitoso en TDC se refrescará esta ventana</div></div>
		`;

		url_popup = url_base+"/mega/PreRegistro.php?nro_orden="+id_orders+"&total="+mega_amount;

		ventana = window.open(url_popup, "myWindow", "width=400,height=450"); 
		var winTimer = window.setInterval(function() {
			if (ventana.closed !== false) {
				window.clearInterval(winTimer);
				refrescar();
			}
		}, 200);
		return false;
	}

	if(bank_datas_id==6){
		datosBancarios.innerHTML=`
		<div class="row"><div class="col-md-12 text-center"><br>Luego de procesar su pago exitoso en TDD se refrescará esta ventana</div></div>
		`;

		url_popup = url_base+"/mercantil/index.php?evento=inicio&nroFactura="+id_orders+"&amount="+mega_amount;
		ventana = window.open(url_popup, "myWindow", "width=400,height=550"); 
		var winTimer = window.setInterval(function() {
			if (ventana.closed !== false) {
				window.clearInterval(winTimer);
				refrescar();
			}
		}, 200);
		return false;
	}

	if(document.getElementById('input_ref')){
		ref=input_ref.value;
	}else{
		ref='';

	}

	div_btn_guardar_pago.innerHTML="<div class='loaderb'><div>";
		
	get('guardarPago','&amount='+amount+'&ref='+ref+'&coins_id='+coins_id+'&orders_id='+id_orders+'&bank_datas_id='+bank_datas_id);
	return false;
}

function elegidoMetodo(id,name){
	// window.location.href="#bancosDelMetodo";
	bancosDelMetodo.innerHTML="<div class='loaderb'><div>";
	get("listarBancosdelMetododePago","&payment_methods_id="+id);
	location.href="#utlimo_metodo_pago";
}
function elegidoBanco(id,name,titular,descripcion,moneda,coins_id,rate) {
	//console.log("id::> ",id);

	var div_referencia=`<div class="col-md-6">
	<label>Referencia Bancaria:</label>
	<input id="input_ref" name="ref" class="form-control" type="text">
		</div>`;
	var otro_ancho='';
	var txt_btn_pagar='Pagar';
	var monto_total = 0;
	var html_boton = "<button onclick='return procesarPago();' class='btn btn-success'>"+txt_btn_pagar+"</button>";
	
	if(id==3 || id==2  || id==6 || id==7 || id==10 || id==12 || id==15 || id==13) {
		div_referencia='';
		otro_ancho='<div class="col-md-3"></div>';
	}

	if(id==3) {
		txt_btn_pagar='Procesar TDC';
	}

	if(id==6) {
		txt_btn_pagar='Procesar TDD';
	}

	html_boton = "<button onclick='return procesarPago();' class='btn btn-success'>"+txt_btn_pagar+"</button>";

	if(id==15) {
		var udata = user_data.split(",");
		var cedula = udata[0].split("-")[1];
		var nombre = udata[1].split(" ")[0];
		var apellido = udata[1].split(" ")[1];
		var orderNo = orders_id;
		var email = udata[2];

		monto_total = up(aPagarUsd,2);

		url_popup = url_base+"/international-payment-button/"+nombre+"/"+apellido+"/"+cedula+"/"+orderNo+"/"+monto_total+'/'+email;
		html_boton = "<iframe src='"+url_popup+"' width='250' height='250' frameborder='0'></iframe>";
	}

	if(coins_id==1){
		var patron="^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$";
		var msj="Use punto (.) para decimales";
		monto_total = up(aPagarUsd,2);
	}else{
		var patron="^\\$?(([1-9](\\d*|\\d{0,2}(\.\\d{3})*))|0)(,\\d{1,2})?$";
		var msj="Use coma (,) para decimales";
		monto_total = aPagarBs;
	}

	var mensaje = "Ingrese el monto en "+moneda+":";

	if(name == 'bio wallet'){
		mensaje = "Introduzca el monto que desea usar de su saldo disponible en bio wallet";
	}

	datosBancarios.innerHTML=`
	<div class='row text-center h5'>
	<div class="col-md-12">
	Banco: `+name+`
	</div>
</div>
	<div class='row text-center h5'>
		<div class="col-md-12">
Titular: `+titular+`
		</div>
 
	</div>
	<div class='row text-center h5'>
		<div class="col-md-12">
		Datos: `+descripcion+`
		</div>
	</div>
	<div class='row text-center h5'>
		<div class="col-md-12">
		Moneda: `+moneda+`
		</div>
	</div>
<form onsubmit="return false;" autocomplete="off">
	<div class='row'>
		`+otro_ancho+`
		<div class="col-md-6">
			<label>`+mensaje+`:</label>
			<input id="input_amount" title="`+msj+`" pattern="`+patron+`" name="amount" value="`+monto_total.toFixed(2)+`" required class="form-control" type="text">
			<input id="input_coins_id" type="hidden" name="coins_id" value="`+coins_id+`">
			<input id="input_rate" type="hidden" name="rate" value="`+rate+`">
			<input id="input_bank_datas_id" type="hidden" name="bank_datas_id" value="`+id+`">
		</div>
		`+div_referencia+`
	</div>
	<div class='row text-center'>
		<div class="col-md-12">
		<br>
			<div id="div_btn_guardar_pago">
				`+html_boton+`
			 </div>
		</div>
	</div>
   </form> 
	
	`;
 
}

function procesar(data,evento){
	
	switch(evento){
		case 'guardarPago':
			var data = JSON.parse(data);
			if(data.success==true){
				Swal.fire("Bio en casa","Su pago ha sido procesado","success");
				location.reload();
				
			}else{
				Swal.fire("Bio en casa",data.msj_general,"danger");
				div_btn_guardar_pago.innerHTML='<button class="btn btn-success">Pagar</button>';
			}
			
	

		break;
		case 'listarBancosdelMetododePago':
			var data = JSON.parse(data);
			//console.log(data);
			if(data.success==true){
				var h='<hr>';
				var datos=data.data;
				for (var [key, value] of Object.entries(datos)) {
					var descrip=''
					if(value.description!=null){
						descrip=value.description.replace(/(\r\n|\n|\r)/gm, "");
					}else{
						descrip='megasoft';
					}
					h+='<div class="row"><div class="col-md-1 col-1"></div><div class="col-md-1 col-1"><input name="b"  class="form-controld" type="radio" onclick="elegidoBanco(\''+value.id+'\',\''+value.b_name+'\',\''+value.titular+'\',\''+descrip+'\',\''+value.c_name+'\',\''+value.coins_id+'\',\''+value.rate+'\')" value="'+value.id+'"></div><div class="col-md-10 col-10">'+value.b_name+' ('+value.c_name+')</div></div><hr>';
				}
				
				bancosDelMetodo.innerHTML=h+"<div id='datosBancarios'></div>";
			}

		break;
		case 'listarMetodosDePago':
			if(limite_max_pagos_alcanzado==true){
				metodosPago.innerHTML="<div class='text-danger center'><br>Disculpe, ya agoto sus 2 pagos máximos, deber ir a nuestra tienda biomercados más cercana para reportar su situación.</div>";
			}else{
				var data = JSON.parse(data);
				if(data.success==true){
					var h='<hr>';
					var datos=data.data;
					var ultimo = "";
					
					for (var [key, value] of Object.entries(datos)) {
						
						if(key == 0){
							ultimo = "id='utlimo_metodo_pago'";
						}

						h+='<div class="row"><div class="col-md-1 col-1"><input name="a" '+ultimo+'  class="form-controld" type="radio" onclick="elegidoMetodo(\''+value.id+'\',\''+value.name+'\')" value="'+value.id+'"></div><div class="col-md-11 col-11">'+value.name+'</div></div><hr>';
					}
					
					metodosPago.innerHTML=h+"<div id='bancosDelMetodo'></div>";
				}
			}
		break;
		case 'totalPagar':

			var data = JSON.parse(data);
			//console.log("Datos Sacados ==> "+JSON.stringify(data));
			if(data.success==true){
				ra=data.data[0];

				var rateb=JSON.parse(ra.rate_json);
				for (var i = 0; i < rateb.length; i++) {
				  
					var id_rateb = (+rateb[i]['id']);
					_rateb = parseFloat(rateb[i]['rate']);
					if (id_rateb == 1) break;
				  }

				  var htotalD=parseFloat(ra.total_pay)/_rateb;
				  htotalD = up(htotalD,2);
				var pagado=0.00;
				if(ra.cant_pagos!='0'){

					var pj=JSON.parse(ra.pago_json);
					for (var i = 0; i < pj.length; i++) {
					
						
						pagado+= parseFloat(pj[i]['amount']);
						
					}
					//validar la cantidad maxima de pagos.
					// if(parseFloat(ra.cant_pagos)>1 &&  pagado<parseFloat(ra.total_pay)){
					//     limite_max_pagos_alcanzado=true;
					// }
					//alert(pagado.toFixed(2));

					//console.log("Esto es para carlitos ==> "+pagado.toFixed(2)+" ==> "+parseFloat(ra.total_pay));

					if( pagado.toFixed(2)>=parseFloat(ra.total_pay)){
						ordenPagada=true;
						div_image_top.innerHTML='<img style="margin:0 auto" src="img/topPagado.png">';
						div_completo_metodo_pago.innerHTML='<div class="row mt-4"><div class="col-md-12 center h3 text-center" style="color:#67BE5A"><br><br><br><br>Desde bio mercados agradecemos su preferencia, nuestra prioridad es ofrecer el mejor servicio siempre. ¡Inspirados en servir!!</div></div>';
					}

				}
				var pagadoD=pagado/_rateb;
			   
				var resta=parseFloat((parseFloat(ra.total_pay)-pagado).toFixed(2));
				var restaD=resta/_rateb;
				restaD = up(restaD, 2);

				aPagarBs = resta;
				aPagarUsd = restaD;

				var mostrar = "";
				var titulopago = "Debes Pagar";

if(aPagarBs <= 0){
	mostrar = "style='display:none'";
	titulopago = "Has pagado";
}

if(resta>0){
	var colorFalta='text-danger';
}else{
	var colorFalta='';
}

//console.log(ra);
				
			cuadroPagado.innerHTML=`
			<div class="row">
			<div class="col-md-6 text-left"><b>`+titulopago+`</b></div><div class="col-md-6 text-right"><b>`+formatB(ra.total_pay)+` / `+formatD(htotalD)+`</b></div>
		</div>
		<div class="row" `+mostrar+`>
			<div class="col-md-6 text-left"><b>Has pagado</b></div><div class="col-md-6 text-right"><b>`+formatB(pagado)+` / `+formatD(pagadoD)+`</b></div>
		</div>
		<div class="row `+colorFalta+`" `+mostrar+`>
			<div class="col-md-6 text-left "><b>Saldo restante</b></div><div class="col-md-6 text-right"><b>`+formatB(resta)+` / `+formatD(restaD)+`</b></div>
		</div>   
			`;
			}
		break;
		case 'consultarOrden':
			var data = JSON.parse(data);

			if(data.success==true){
				r=data.data[0];
				var subTotal=parseFloat(r.total_transport)+parseFloat(r.sub_total);
				var rate=JSON.parse(r.rate_json);
				for (var i = 0; i < rate.length; i++) {
				  
					var id_rate = (+rate[i]['id']);
					_rate = parseFloat(rate[i]['rate']);
					if (id_rate == 1) break;
				  }

				  var totalD=up((parseFloat(Math.ceil(r.total_pay))/_rate), 2);		

				  _totalProductoB= new Object();
				  _totalProductoD= new Object();
				  _totalProductoBConFormato= new Object();
				  _totalProductoDConFormato= new Object();
				  res = JSON.parse(r.productos);
				  var p_totalB=0.00;
				  var p_totalD=0.00;
				  var detalles='';


				for (var i = 0; i < res.length; i++) {
					var name=res[i]['name'];
					var cant=res[i]['cant'];
					var precio=res[i]['price'];
					_totalProductoB[i] = parseFloat(precio) * parseFloat(cant);
					_totalProductoBConFormato[i] =formatB(_totalProductoB[i]);
					p_totalB += _totalProductoB[i];
		  
					_totalProductoD[i] = _totalProductoB[i] / _rate;
					_totalProductoDConFormato[i] = formatD(_totalProductoD[i]);
					p_totalD += _totalProductoD[i];
					
					
					detalles+=`
					<div class="row celda" style="font-size:10px; border-bottom:1px solid #ddd">
						<div class="col-md-5 text-left">`+name+`</div>
						<div class="col-md-3 text-right">`+formatB(precio)+`</div>
						<div class="col-md-1 text-right">`+cant+`</div>
						<div class="col-md-3 text-right">`+formatB(_totalProductoB[i])+`</div>
					</div>`;
				}

				factura.innerHTML=`
				<div class="row">
					<div class="col-md-12 text-center h4" style="color:#67BE5A">Detalles de la orden #${id_orders}</div>
				</div>

				<div id="cuadroPagado"></div>
		   
				<hr>                      
				<div class="row" style="font-size:12px">
					<div class="col-md-5 text-left"><b>Producto</b></div>
					<div class="col-md-3 text-right"><b>Precio Und.</b></div>
					<div class="col-md-1 text-right"><b>Cant.</b></div>
					<div class="col-md-3 text-right"><b>Total</b></div>
				</div>
				<div >`+detalles+`</div>
			   <div class="row">
					<div class="col-md-6 text-left">Productos</div><div class="col-md-6 text-right">`+formatB(r.sub_total)+`</div>
				</div>
				<div class="row">    
					<div class="col-md-6 text-left">Envío</div><div class="col-md-6 text-right">`+formatB(r.total_transport)+`</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-left">Sub total</div><div class="col-md-6 text-right">`+formatB(subTotal)+`</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-left">Exento</div><div class="col-md-6 text-right">`+formatB(r.exento)+`</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-left">BI.</div><div class="col-md-6 text-right">`+formatB(r.bi)+`</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-left">Impuestos</div><div class="col-md-6 text-right">`+formatB(r.total_tax)+`</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6 text-left"><b>TOTAL A PAGAR</b></div><div class="col-md-6 text-right"><b>`+formatB(r.total_pay)+` / `+formatD(totalD)+`</b></div>
			   </div>

				`;

				if(document.getElementById("cuadroPagado")){
					cuadroPagado.innerHTML="<div class='loaderb'><div>";
					
					get('totalPagar','&orders_id='+id_orders);
				}
				if(document.getElementById("metodosPago")){
					cuadroPagado.innerHTML="<div class='loaderb'><div>";
					
					get('listarMetodosDePago');
				}
			}else{
				Swal.fire("Bio en Línea",data.msj_general);
			}

		break;
	   
		case 'crearOrden':
			//console.log(data);
			var data = JSON.parse(data);


			if(data.success==true){
				var orders_id=data.data[0].id;
				// alert("Su orden fue procesada exitosamente, proceda a realizar el pago.");
				window.location="/profile?orders_id="+orders_id;
			   
				vaciarCarrito();
			}else{
				Swal.fire("Bio en Línea",data.msj_general);
			}

		break;
		case 'web_no_login':
			var data = JSON.parse(JXG.decompress(data));

			if(data.success==true){
				let datos=data.data;
				for (var [key, value] of Object.entries(datos)) {
					setLocal(key, value);
				}
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
			//console.log("data getAddress::> ",data);
			var options = "";
			if(data.success){
				var datos=data.data;

				if(storeId != 6){
					options+="<option value='-1' id='one_value'>Pick - Up</option>";
				}
				
				for (var [key, value] of Object.entries(datos)) {
					options+="<option value="+value.id+">"+value.address+" - "+value.st_name+", "+value.re_name+", "+value.urb+", "+value.sector+",  #"+value.nro_home+"</option>";
					//console.log(key+" "+value.name);
				}

				div_direccion_entrega.innerHTML="<select onchange='activarEnvio(this)' class='form-control' id='direccion_selected' name='direccion' v-model='selectedDirection' >"+options+"</select><br><a href='/profile?tab=my-address'>Agregar nueva dirección</a>";
			}else{
				if(storeId != 6){
					div_direccion_entrega.innerHTML="<select class='form-control' id='direccion_selected' name='direccion' v-model='selectedDirection'><option value='-1'>Pick - Up</option></select><br><a href='/profile?tab=my-address'>Agregar nueva dirección</a>";
				}else{
					div_direccion_entrega.innerHTML="<select class='form-control' id='direccion_selected' name='direccion' v-model='selectedDirection'><option value='0'>Sin Direcciones</option></select><br><a href='/profile?tab=my-address'>Agregar nueva dirección</a>";
				}
				//alert(data.msj_general);
				return false;
			}
		   
		break;

	}

}
function procesarOrden() {
	if(document.getElementById("direccion_selected") && document.getElementById("direccion_selected").value != '0') {

		if(checkDeliveryType == 2 && aPagarUsd < 3){
			Swal.fire("Bio en Línea","Para este tipo de delivery el monto debe ser al menos de 3$","error");
		}else{
			Swal.fire({
				title: 'Bio en Línea',
				text: "A partir de este momento no podra modificar su carrito, esta seguro de continuar?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Aceptar',
				cancelButtonText: 'Cancelar'
			}).then((result) => {
				if (result.value) {
					
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
						orden.delivery_type = document.getElementById('dvy_type').value;
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
					// console.log(json);
					get('crearOrden','&json='+json);
				}
			});
		}
	}else {
		Swal.fire("Bio en Línea","No hay direcciones registradas","error");
	}

}
function activarEnvio(a){

	var dataOption = document.getElementById("direccion_selected").value;

	if(a.value==0){
		activar_envio=false;
		direccionOrden=null;
	}else if(a.value == 1){
		direccionOrden=dataOption;
		activar_envio=true;
	}else if(a.value == 2){
		activar_envio=false;
		direccionOrden=dataOption;
	}
	actualizarResumenOrden();
}
function getOrder(id){
	window.location="/profile?orders_id="+id.value;
}

function actualizarResumenOrden(){
		
		var h='';
		var productos=getLocal('productosb');
		
		var d_envio=getLocal('envio').data[0];


		// console.log(d_envio);


	  
		var detalle='';
		var totalB=0.00;
		var totalD=0.00;
		var totalPeso=0.00;
		var totalEnvioB=0.00;
		var totalEnvioD=0.00;
		var datos=getLocal('cartNew');
		// console.log(datos);
		if(datos){
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

				detalle+='<div class="row" style="margin-bottom:5px; border-bottom:1px solid #ddd "><div class="col-md-1" style="margin:0"><img width="30px" src="storage/'+p.image+'"></div><div class="col-md-5" style="font-size:13px">'+nombre+' <span style="color:red"> X '+cant+'</span></div><div class="col-md-5" style="text-align:right">'+formatB(precio_con_iva)+'<br>'+formatD(up(precio_dolar,2))+'</div></div>';
				}
			}


			var peso_max=(d_envio) ? d_envio.peso_max : 0;
			var precioEnvioB=(d_envio) ? d_envio.precio_b : 0;
			var precioEnvioD=(d_envio) ? d_envio.precio_d : 0;
			var peso_cargado=peso_max;
			var multiplo_peso=1;

			while(totalPeso>=peso_cargado) {
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

		aPagarUsd = totalPagarD; 



		h='<div class="detalleOrdenProducts">'+detalle+'</div><br>'+
		'<div class="row"><div class="col-md-4">Sub total:</div><div class="col-md-8" style="text-align:right">'+formatB(totalB)+' / '+formatD(up(totalD,2))+'</div></div>'+
		'<div class="row"><div class="col-md-4">Envío:</div><div class="col-md-8" style="text-align:right">'+formatB(totalEnvioB)+' / '+formatD(up(totalEnvioD, 2))+'</div></div>'+
		'<div class="row"><div class="col-md-4" style="font-size:17px">TOTAL:</div><div class="col-md-8" style="font-size:17px; text-align:right">'+formatB(totalPagarB)+' / '+formatD(up(totalPagarD, 2))+'</div></div>'+
		'<div class="row"><div class="col-md-12" style="color:red; text-align:right">(impuestos incluidos)</div></div><br>'+
		''+
		'';
  }
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

window.onload = function() {
	setInterval('actualizarStore()',5000);
	//actualizarStore();
}


function get(evento,variables="") {
	var host=window.location.host;
	var protocol=window.location.protocol;
	var xmlhttp = new XMLHttpRequest();
	let data=new Map();
	data['success']=false;
	data['msj_general']="Intente mas tarde";
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
			//if (xmlhttp.status == 200 || xmlhttp.status == 409) {
			if (xmlhttp.status == 200 || xmlhttp.status == 409) {
				procesar(xmlhttp.responseText,evento);
			}else {
				procesar(data,evento);
			}
		}
	};
	
	xmlhttp.open("GET", protocol+"//"+host+"/api_rapida.php?id_tienda="+storeId+"&evento="+evento+variables, true);
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
	  //console.log(e)
	}
}
function vaciarCarrito(){
	localStorage.clear();
	localStorage.setItem('ModalPrincipal','visto');
}

function formato_moneda(value){
	var listo='';
	var b=value.trim();
	var c;
	// b=b.replaceAll(RegExp(r'\s'), '');
	// b=b.replaceAll(RegExp(r',\.'), ' ');
	b=b.split(' ').join('');
	b=b.split('.').join(' ');
	b=b.split(',').join(' ');
	//b=b.replaceAll(' ', '');
	//b=b.replaceAll('.', ' ');
	//b=b.replaceAll(',', ' ');
	c=b.split(' ');

	var total=c.length;

	if(total>1){
		c[total-1]="."+c[total-1];

		//  for(int i=0; i<c.length; i++){
		//  listo=listo+c[i];
		// }
		c.forEach((element) =>listo=listo+element);
	}else{
		listo=b;
	}
	return listo;
}

function getPaymentData(paymentData){
	paymentDataip = paymentData;
	if(!paymentDataip){
		Swal.fire("Bio en Línea","Su pago no se ha podido procesar, intente nuevamente!!","error");
		document.getElementById("div_btn_guardar_pago").innerHTML="<div class='loaderb'><div>";
		location.reload();
	}
}

function successPayment(){
	/*data = paymentDataip;
	if(data.status == 'ok'){
		procesarPago();
	}else{
		Swal.fire("Bio en Línea","Su pago no se ha podido procesar, intente mas tarde!!","error");
		document.reaload();
	}*/
	document.getElementById("div_btn_guardar_pago").innerHTML="<div class='loaderb'><div>";
	location.reload();
}

function deli_type(e){
	var column = document.getElementById('select_address');
	checkDeliveryType = e.value;
	if(parseInt(e.value) > 0){
		column.style.display = 'block';
		if(document.getElementById('one_value')){
			document.getElementById('one_value').style.display = 'none';
			document.getElementById('direccion_selected').selectedIndex = 1;
		}else{
			document.getElementById('direccion_selected').selectedIndex = 0;
		}
		
	}else{
		column.style.display = 'none';
		if(document.getElementById('one_value')){
			document.getElementById('one_value').style.display = 'block';
		}
		document.getElementById('direccion_selected').selectedIndex = 0;
	}

	if(parseInt(e.value) == 2 || parseInt(e.value) == 1){
		document.getElementById("div_contenedor_fecha").style.display = 'none';
	}else{
		document.getElementById("div_contenedor_fecha").style.display = 'block';
	}

	document.getElementById('dvy_type').value = e.value;
	activarEnvio(e);
}

function up(v, n) {
    return Math.ceil(v * Math.pow(10, n)) / Math.pow(10, n);
}


//Modificaciones
if(document.getElementById("pickout-contenedor")){
	if(storeId == 6){
		document.getElementById("pickout-contenedor").style.display = "none";
		document.getElementById('div_contenedor_fecha').style.display = "none";
		document.getElementById("select_address").style.display = "block";
		document.getElementById("auto-checked").checked = true;
	}
}