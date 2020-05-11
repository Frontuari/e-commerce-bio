	<footer class="section footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-block">
						<img src="/assets/img/logo-bio-mercados.svg" alt="Bio Mercados">
						
						<p><span>Teléfono:</span> +58 414 123 4567</p>
						<p><span>Correo:</span> Contacto@Biomercados.com</p>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#enlaces" role="button" aria-expanded="false" aria-controls="enlaces">
							Enlaces Importantes
						</a>
						<div class="collapse" id="enlaces">
							<div class="card card-body">
								<a href="#">Preguntas Frecuentes</a>
								<a href="#">Términos legales</a>
								<a href="#">Soporte</a>
								<a href="/contact">Contacto</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#apps" role="button" aria-expanded="false" aria-controls="apps">
							Descarga nuestras <br class="on-desktop">app's móviles
						</a>
						<div class="collapse" id="apps">
							<div class="card card-body">
								<a href="#"><img src="/assets/img/descarga-app-android-bio.svg"></a>
								<a href="#"><img src="/assets/img/descarga-app-ios-bio.svg"></a>
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
												<input type="text" class="form-control" placeholder="Escribe tu correo aquí..." aria-label="Escribe tu correo aquí...">
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
				<div class="modal-body">
					<h2>Desde <b>bio mercados</b>, inspirados en servir,<br/> queremos darte la mas cordial bienvenida</h2>
					<p>Pensando en tu comodidad, ahora ponemos a tu disposición nuestra tienda virtual <strong>bio en linea</strong> , la cual puedes visitar ingresando a <a href="" class="enlace-modal">www.biomercados.com.ve</a> donde viviras la mejor experiencia de compra en linea con la variedad, frescura y calidad bio de siempre</p>
					<p>Desde tu teléfono, tablet o Pc podras visitar bio en linea y hacer compras para ti o para tu familia, solo debes <strong>registrar</strong> tus datos una vez</p>
					<p><span class="order-text">Llevamos el mercado hasta la puerta de tu casa o lo retiras</span> lista para llevar, bio en linea, a su servicio con un clic!!!</p>
				</div>
			</div>
		</div>
	</div>

	<div class="over toggle-menu"></div>

</main>
	<script id="aaa" type="text/javascript" src="{{ mix('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bio-forms.js') }}"></script>
	@yield('js')
	<script>

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

			var modal_principal = localStorage.getItem("ModalPrincipal");
			if(modal_principal == 'visto')
			{
				$("#ModalPrincipal").remove();
			}else{
				//no pasa nada
				localStorage.setItem("ModalPrincipal", "visto");
			}

			/*$("#ModalPrincipal").removeClass("fade").hide(0).delay(500).fadeIn(500);
			$("#ModalPrincipal").click(function()
			{
				//$("#ModalPrincipal").addClass('fade');
				$('#ModalPrincipal').fadeOut(500,function()
				{
					$("#ModalPrincipal").css({'display':'none'});
				});
			});*/
			 $(window).on('load',function(){
		        $('#ModalPrincipal').modal('show');

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

		        $("#myHeader").addClass("fixed-top");
		        $(".jumbotron").css({'margin-top':(height_header)+'px'});
		        $("#main-slider").css({'margin-top':(height_header)+'px'});
		        //$("#combos-bio").css({'margin-top':(height_header)+'px'});

		    }

		    if(scroll == 0){
		    	$("#myHeader").removeClass("fixed-top");
		        $(".jumbotron").css({'margin-top':'0px'});
		        $("#main-slider").css({'margin-top':'0px'});
		        $("#combos-bio").css({'margin-top':'0px'});

		    }
		}); //missing );
		$(".check-box").click(function(event){
			if(event.target.checked){
				var li = "Oferta: "+$(this).attr("title");
				$("#selected-filters").append("<li id='sel_"+$(this).attr('id')+"'>"+li+"&nbsp; &nbsp;<a href='#' data-id='sel_"+$(this).attr('id')+"' class='remove-filter-selected'>X</a></li>");
			}else{
				var element = $(this).attr("id");
				$("#sel_"+element).remove();
			}
		});

		$('body').on('click','.remove-filter-selected', function(){
			var seleccionado = $(this).attr('data-id').split('_')[1];
			$("#"+seleccionado).prop('checked',false);
			$(this).parent().remove();
		});

		$('#entrar').click(function(){
			document.location.href="{{ url('/profile') }}";
		});

		$("#navbarLogin").click(function(){
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

	</script>
</body>
</html>
