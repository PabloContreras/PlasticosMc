@extends('plantilla')

@section('titulo')
Inicio
@endsection

@section('contenido')
	    <!--<div class="bg-top navbar-light">
	    	<div class="container">
	    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
	    			<div class="col-md-4 d-flex align-items-center py-4">
	    				<img src="images/mc.png" width="80" height="80" class="d-inline-block align-top" alt="Grupo MC"><a class="navbar-brand" href="index.html">MC Plásticos</a>
	    			</div>
		    		<div class="col-lg-8 d-block">
			    		<div class="row d-flex">
						    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4" style="top: 15px;">
						    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    	<div class="text d-flex align-items-center">
							    	<span>info@mcplasticos.com</span><br>
							    </div>
						    </div>
						    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4"  style="top: 15px; padding-bottom: 20px;">
						    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							    <div class="text d-flex align-items-center">
							    	<span>Llámanos: <br>01 (722) 2766570</span>
							    </div>
						    </div>
					    </div>
				    </div>
			    </div>
			  </div>
			</div>-->

			<!-- END nav -->
			<!-- Carrousel -->

			<!-- End carrousel -->

			<section id="carousel">
				<div class="container-fluid">
					<div class="row justify-content-center" >
						<div class="col-10">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators ">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="images/slider/s1.png"  alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/slider/s2.png" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/slider/s3.png" alt="Third slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/slider/s4.png" alt="Third slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images/slider/s5x3.png" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<br><br><br><br>
			<!-- Frase -->
			<section class="ftco-intro" style="background-image: url(images/fondoPrincipal.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<font face="Verdana">
								{{-- 								<h2>MC Plásticos es el resultado de una historia de más de 40 años de esfuerzo y dedicación...</h2> --}}
								<h2>MC Plásticos es una empresa consolidada con presencia nacional e internacional, que ofrece a sus clientes soluciones integrales dentro de la industria de la transformación del plástico. </h2>
							</font>
						</div>
					</div>
				</div>
			</section>
			<br><br>
			<!-- End frase -->

			<section class="ftco-section " style="padding-bottom: 30px; padding-top: 20px; padding-left: 40px; padding-right: 40px;">
				<div class="container justify-content-center">
					<div class="row justify-content-center	">
						<div class="col-md-7 wrap-about py-5 px-4 px-md-4 ftco-animate" >
							<div class="heading-section mb-5">
								<h2 class="mb-4"><font face="Encode Sans">Nuestra Compañía</font></h2>
							</div>
							<div class="col-md-12" style="text-align: justify; ">
								<font face="Verdana">
									<p><strong>MC Plásticos</strong> es una empresa consolidada al 100%, que ofrece a sus clientes soluciones integrales dentro de la industria del plástico, a nivel internacional</p>
								</font>
							</div>
						</div>
						<div  class="col-md-4 p-md-5 img img-2 mt-6 mt-md-0" style="background-image: url(images/fin/nuestra_compañia.png);">
						</div>
					</div>
				</div>
			</section>
			<!-- Our Products -->

{{--
			<section class="ftco-section ftco-no-pt ftco-no-pb">
				<div class="container-fluid p-0">
					<div class="row no-gutters justify-content-center mb-5 pb-2">
						<div class="col-md-6 text-center heading-section ftco-animate">
							<br><br>
							<h2 class="mb-4"><font face="Encode Sans">Nuestros productos</font></h2>
							<!<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>>
						</div>
					</div>
			</section>
			<section id="carousel" >
				<div class="container-fluid" >
					<div class="row justify-content-center" >
						<div class="col-10">
							<div id="carouselTiempo" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" >
									<div class="carousel-item active">
										<img class="d-block w-100"  style="height: 566px;"  src="images/productos_marca-Agua/collage productos-02.png">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100"  style="height: 566px;" src="images/productos_marca-Agua/collage productos-03.png" >
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" style="height: 566px;" src="images/productos_marca-Agua/collage productos-04.png" >
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" style="height: 566px;" src="images/productos_marca-Agua/collage productos-05.png" >
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" style="height: 566px;" src="images/productos_marca-Agua/collage productos_Mesa de trabajo 1.png" >
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> --}}

			<section class="ftco-section ftco-no-pt ftco-no-pb">
				<div class="container-fluid p-0">
					<div class="row no-gutters justify-content-center mb-5 pb-2">
						<div class="col-md-6 text-center heading-section ftco-animate">
							<br><br>
							<h2 class="mb-4"><font face="Encode Sans">Nuestros productos</font></h2>
						</div>
					</div>
				</div>
				<img src="{{ asset('images/splashPlasticos.png') }}" alt="" style="width: 100%">
			</section>

			<section class="ftco-section ftco-no-pt ftco-no-pb">
				<div class="container-fluid p-0">
					<div class="row no-gutters justify-content-center mb-5 pb-2">
						<div class="col-md-6 text-center heading-section ftco-animate">
							<br><br>
							<h2 class="mb-4"><font face="Encode Sans">Algunos de nuestros clientes</font></h2>
						</div>
					</div>
					<div id="clientesCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="{{ asset('images/slideClientes/clientes1.png') }}" alt="">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('images/slideClientes/clientes2.png') }}" alt="">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('images/slideClientes/clientes3.png') }}" alt="">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('images/slideClientes/clientes4.png') }}" alt="">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('images/slideClientes/clientes5.png') }}" alt="">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{ asset('images/slideClientes/clientes6.png') }}" alt="">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</section>



			<!-- Contacto -->
{{-- 			<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
				<div class="container">
					<div class="row d-flex align-items-stretch no-gutters">
						<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
							<h2 class="pull-right"><font face="Encode Sans ">Tu opinión es importante</font></h2>
							<form action="#">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Asunto">
								</div>
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
								</div>
							</form>
						</div>
						<br><br>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.913598872037!2d-99.57222699764404!3d19.372893475459726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2b07012dbd093%3A0x8e75b555c71c1a31!2sMC+Pl%C3%A1sticos+de+M%C3%A9xico+SA+de+CV!5e0!3m2!1ses-419!2smx!4v1555362423348!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0; margin-top: 100px; margin-bottom: 50px;" allowfullscreen></iframe>
					</div>
				</div>
			</section> --}}
			@endsection

@section('scripts')
	<script type="text/javascript">
		$('#carouselTiempo').carousel({
			interval: 1500,
			pause: false
		});

		$('#clientesCarousel').carousel({
			interval: 1500,
			pause: false
		});
	</script>
@endsection