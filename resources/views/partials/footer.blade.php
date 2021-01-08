	<footer class="section footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-block">
						<img src="/assets/img/logo-bio-mercados.svg" alt="Bio Mercados">
						
						<p><span>Teléfono:</span> (0241) 335.4101</p>
						<p><span>Correo:</span> contacto@biomercados.com.ve</p>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#enlaces" role="button" aria-expanded="false" aria-controls="enlaces">
							Enlaces Importantes
						</a>
						<div class="collapse" id="enlaces">
							<div class="card card-body">
								<a href="/culture">Cultura bio</a>
								<a href="/sucursal">Sucursales</a>
								<a href="/faq">Preguntas Frecuentes</a>
								<a href="/terminos-condiciones">Términos legales</a>
								<a href="/contact">Contacto</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#apps" role="button" aria-expanded="false" aria-controls="apps">
							Descarga nuestra <br class="on-desktop">app móvil
						</a>
						<div class="collapse" id="apps">
							<div class="card card-body">
								<a href="https://play.google.com/store/apps/details?id=com.bio.biomercados"><img src="/assets/img/descarga-app-android-bio.svg"></a>
								<!-- <a href="#"><img src="/assets/img/descarga-app-ios-bio.svg"></a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#suscripcion" role="button" aria-expanded="false" aria-controls="suscripcion">
						   Suscríbete para recibir notificaciones
						</a>
						<div class="collapse" id="suscripcion">
							<div class="card card-body">
								
								<div class="footer-form">
									<form action="">
										<div class="form-group">
											<div class="input-group">
												<input id="email_subscription" type="text" class="form-control" placeholder="Escribe tu correo aquí..." aria-label="Escribe tu correo aquí...">
												<div class="input-group-append">
													<button class="btn" type="button" id="button-addon2">Suscribirse</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<p>Alimentos FM, C.A. © 2020 Todos los Derechos Reservados <br />J-31721968-6</p>
					</div>
					<div class="col-md-4">
						<ul class="social-icons">							
							<li><a href="https://www.youtube.com/channel/UCV4s57Vi8rw_0aPXNfDJEcw" target="_blank" class="slyoutube"></a></li>
							<li><a href="https://twitter.com/BioMercadosVe/" target="_blank" class="sltwitter"></a></li>
							<li><a href="https://www.instagram.com/biomercadosVE/" target="_blank" class="slinstagram"></a></li>
							<li><a href="https://www.facebook.com/BioMercadosVe/" target="_blank" class="slfacebook"></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</footer>


	<!-- MODAL PRINCIPAL SIEMPRE ACTIVO-->
	<div class="modal modal-principal fade" id="ModalPrincipal" tabindex="-1" role="dialog" aria-labelledby="ModalPrincipalLabel" aria-hidden="true" >
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body" id="modal_popup">
					<!-- <h2>Desde <b>bio mercados</b>, inspirados en servir,<br/> queremos darte la mas cordial bienvenida</h2>
					<p>Pensando en tu comodidad, ahora ponemos a tu disposición nuestra tienda virtual <strong>bio en linea</strong> , la cual puedes visitar ingresando a <a href="" class="enlace-modal">www.biomercados.com.ve</a> donde viviras la mejor experiencia de compra en linea con la variedad, frescura y calidad bio de siempre</p>
					<p>Desde tu teléfono, tablet o Pc podras visitar bio en linea y hacer compras para ti o para tu familia, solo debes <strong>registrar</strong> tus datos una vez</p>
					<p><span class="order-text">Llevamos el mercado hasta la puerta de tu casa o lo retiras</span> lista para llevar, bio en linea, a su servicio con un clic!!!</p> -->
				</div>
			</div>
		</div>
	</div>

	<div class="over toggle-menu"></div>

</main>
	<script type="text/javascript" src="{{ mix('js/app.js') }}&ver=3.0.0"></script>
	@yield('js')
	<script type="text/javascript" src="{{ asset('assets/js/bio-forms.js') }}?ver=3.0.0"></script>
	<script type="text/javascript" src="js/carrito.min.js?ver=3.0.1"></script>
	<script>

		$("span#eye-view-password").click(function(){
			let state = $(this).attr("data-state");
			if(state == 'hidden'){
				$(this).attr("data-state","show");
				$(this).html("<i class='fa fa-eye-slash'></i>");
				$("#password").attr("type","text");
			}else{
				$(this).attr("data-state","hidden");
				$(this).html("<i class='fa fa-eye'></i>");
				$("#password").attr("type","password");
			}
		});

	//******************************************************************
	// Determinar valores de fecha y hora para la recojer el pedido
		hora=new moment().format("HH");

		if (parseInt(hora)>18)
		{
			hoy     =   new moment().add(1,"d").format("DD/MM/YYYY") ;
			m       =   hoy;
            //hoy     =   hoy ;
            minHora =   "08:00";
		}
		else {
			hoy     =   new moment().startOf().add(2, 'hour');
			m       =   new moment().add(1,"d");
			minHora =   new moment().add(2,"h").format("HH:mm");
		}
		maxHora= "20:00";
	//******************************************************************

		jQuery(document).ready(function($){


			$("a#change_store").click(function(){
				window.localStorage.removeItem('cartNew');
			});

			if(!window.localStorage.getItem("ModalPrincipal")) {
				axios.get(URLSERVER+"api/advs/type/Bienvenida").then( res => {
					const srcImage = res.data.data[0].image;
					$("#modal_popup").html(`<img class="img-responsive" style="width: 100%" src="storage/${srcImage}" />`);
					localStorage.setItem("ModalPrincipal", "visto");
					$('#ModalPrincipal').modal('show');
				});
			}else {
				$("#ModalPrincipal").remove();
			}



			$(".select2").select2({
				placeholder: 'Selecccione',
				width: '100%'
			});

			$('.datetimepicker').daterangepicker({
				"singleDatePicker"  : true,
                "timePicker"        : true,
                "locale"            : {format: 'DD/MM/YYYY HH:mm'},
				"minDate"	        : hoy,
				"maxDate"	        : m,
                "startDate"	        : hoy,
			    "endDate"	        : m

			});

            picker=$('input[name="timepick"]');
            picker.attr("min",minHora);
            picker.attr("max",maxHora);


            $('[data-toggle="tooltip"]').tooltip();

			setTimeout(function(){
				$('body').addClass('loaded');
				$('h1').css('color','#222222');
			}, 1200);

			var $range = $(".js-range-slider");
		    var $inputFrom = $(".js-input-from");
		    var $inputTo = $(".js-input-to");
		    var instance;
		    var min = 0;
		    var max = 200;
		    var from = 0;
		    var to = 100;

		    $range.ionRangeSlider({
		        skin: "round",
		        type: "double",
		        min: min,
		        max: max,
		        from: from,
		        to: to,
		        prefix: "$",
		        onStart: updateInputs,
		        onChange: updateInputs,
		        onFinish: updateInputs
		    });
		    instance = $range.data("ionRangeSlider");

		    function updateInputs (data) {
		        from = data.from;
				to = data.to;
				min_range = data.from;
				max_range = data.to;


		        $inputFrom.val(from);
				$inputTo.val(to);

				$('.js-input-from')[0].dispatchEvent(new CustomEvent('input'));
				$('.js-input-to')[0].dispatchEvent(new CustomEvent('input'));
		    }

		    $inputFrom.on("change", function () {
		        var val = $(this).val();

		        // validate
		        if (val < min) {
		            val = min;
		        } else if (val > to) {
		            val = to;
		        }

		        instance.update({
		            from: val
		        });

		        $(this).val(val);
		    });

		    $inputTo.on("change", function () {
		        var val = $(this).val();

		        // validate
		        if (val < from) {
		            val = from;
		        } else if (val > max) {
		            val = max;
		        }

		        instance.update({
		            to: val
		        });

				$(this).val(val);

		    });

			

			
			$(window).on('load',function(){
		        

		        width_window = parseInt($(window).width());
		        if(width_window<=990)
		        {
		        	$(".container-movil").removeClass("container-fluid").addClass("container");
		        }else{
		        	$(".container-movil").removeClass("container").addClass("container-fluid");
		        }
			 });
			 $(window).resize(function()
			 {
			 		width_window = parseInt($(window).width());
			        if(width_window<=990)
			        {
			        	$(".container-movil").removeClass("container-fluid").addClass("container");
			        }else{
			        	$(".container-movil").removeClass("container").addClass("container-fluid");
			        }
			 });

			$(".toggle-menu").click(function(){
				$(".over").toggle();
				$(".navbar").toggleClass("navbar-translate");
			});



			/*Elementos a usar al momento de incrementar el valor*/
			$(document).on('click','.increaseValue',function()
			{
				quantity = parseInt($(this).parent().parent().find('input[name=quantity]').val());

				if($(this).parent().find('span.max-stock').text()!=''){
					max_stock = parseInt($(this).parent().find('span.max-stock').text());
					if(quantity < max_stock){
						//incrementa 1
						quantity = quantity + 1;
						$(this).parent().parent().find('input[name=quantity]').val(quantity);
					}
				}else{
					quantity = quantity + 1;
					$(this).parent().parent().find('input[name=quantity]').val(quantity);
				}
			});

			//reducir el valor
			$(document).on('click','.decreaseValue',function()
			{
				quantity = parseInt($(this).parent().parent().find('input[name=quantity]').val());
				if(quantity>1)
				{
					quantity = quantity - 1;
					$(this).parent().parent().find('input[name=quantity]').val(quantity);
				}
			});

		});

		$(window).scroll(function() {
		    var scroll = $(window).scrollTop();

		     //>=, not <=
		    if (scroll >= 1) {
		        //clearHeader, not clearheader - caps H
		        height_header = $("#myHeader").height();

		        //$("#myHeader").addClass("fixed-top");
		        //$(".jumbotron").css({'margin-top':(height_header)+'px'});
		        //$("#main-slider").css({'margin-top':(height_header)+'px'});
		        //$("#combos-bio").css({'margin-top':(height_header)+'px'});

		    }

		    if(scroll == 0){
		    	//$("#myHeader").removeClass("fixed-top");
		       // $(".jumbotron").css({'margin-top':'0px'});
		        //$("#main-slider").css({'margin-top':'0px'});
		        //$("#combos-bio").css({'margin-top':'0px'});

		    }
		}); //missing );
		// $(".check-box").click(function(event){
		// 	if(event.target.checked){
		// 		var li = "Oferta: "+$(this).attr("title");
		// 		$("#selected-filters").append("<li id='sel_"+$(this).attr('id')+"'>"+li+"&nbsp; &nbsp;<a href='#' data-id='sel_"+$(this).attr('id')+"' class='remove-filter-selected'>X</a></li>");
		// 	}else{
		// 		var element = $(this).attr("id");
		// 		$("#sel_"+element).remove();
		// 	}
		// });

		$('body').on('click','.remove-filter-selected', function(){
			var seleccionado = $(this).attr('data-id').split('_')[1];
			$("#"+seleccionado).prop('checked',false);
			$(this).parent().remove();
		});

		$('#entrar').click(function(){
			document.location.href="{{ url('/profile') }}";
		});

		$(".navbarLogin").click(function(){
			if($(".login_navbar").hasClass('show')===true)
			{
				$(".login_navbar").removeClass('show');
			}else{
				$(".login_navbar").addClass('show');
			}
		});

		//Elementos que se ejecutaran en el carro de compras
		$(".btn.btn-submit.next.action-button,btn.btn-link.previous.action-button").click( () => {
			$(window).scrollTop(parseInt($(".jumbotron").offset().top));
		});

		$("#button-addon2").on("click",function() {
			const email = $("#email_subscription").val();
			const formdata = new FormData;
			formdata.append("email",email)
			axios.post(URLSERVER+"api/subscribe",formdata).then( (resp) => {
				console.log("resp::> ",resp.data);
				if(resp.data.code == "409"){
					Swal.fire("Bio en línea","Su correo ya existe en nuestros registros","warning");
				}else {
					Swal.fire("Bio en línea","Suscripción realizada con éxito","success");
				}
				
			});
		});
		<?php if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])): ?>
			setInterval(() => {
				axios.get(URLSERVER+"api_rapida.php?evento=obtenerTodo");
			},120000);
		<?php endif; ?>
	</script>
</body>
<script src="js/jsxcompressor.min.js?ver={{ strtotime(now()) }}" type="text/javascript"></script>
<script type="text/javascript">
	$("span.oferta").click(function(){
		var url = $(this).attr("data-url");
		location.href=url;
	});
</script>
<style>

<?php
if(isset($_GET['cat']) and !empty($_GET['cat'])){
	?>
		strong#cat_<?=$_GET['cat']?>{
			text-decoration: underline !important;
			color: #ed3928;
		}
	<?php
}
?>

.loaderb {
		margin: 0 auto;
		border: 8px solid #f3f3f3; /* Light grey */
  border-top: 8px solid #67BE5A; /* Blue */
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: spin 2s linear infinite;
  margin-bottom: 10px;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.celda:nth-child(even) {background: #F2F2F2}
.celda:nth-child(odd) {background: #FFF}
	</style>
</html>
