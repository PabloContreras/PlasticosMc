@extends('plantilla')

@section('titulo')
Nosotros
@endsection

@section('contenido')
<!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/backgrounds/{{ getRandomBackground() }}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<font face="Encode Sans"><h1 class="mb-2 bread">Nuestra Filosofía</h1></font>
			</div>
		</div>
	</div>
</section>
<!-- <center>
	<div class="col-md-8 wrap-about py-5 ftco-animate">
		<div class="heading-section mb-5">
			<h2 class="mb-4">Nuestra filosofía</h2>
		</div>
		<div class="">
			<p class="mb-5" style="text-align: justify;">En <strong>Grupo MC</strong>, estamos comprometidos con nuestros clientes a brindar productos y  servicios de calidad que cumplan con las  especificaciones requeridas. Trabajamos con colaboradores enfocados al cumplimiento de los objetivos de calidad. Nos esforzamos por la mejora continua en nuestros procesos y nos aseguramos de cumplir con los requisitos legales y reglamentarios.</p>
		</div>
	</div>
</center> -->
<!-- <section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 d-flex">
					<div class="text d-flex align-items-center">
						<strong class="number" data-number="45">0</strong>
					</div>
					<div class="text-2">
						<span>Años de <br>Experiencia</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 d-flex">
					<div class="text d-flex align-items-center">
						<strong class="number" data-number="1500">0</strong>
					</div>
					<div class="text-2">
						<span>Artículos <br> que se <br>producen</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 d-flex">
					<div class="text d-flex align-items-center">
						<strong class="number" data-number="100">0</strong>
					</div>
					<div class="text-2">
						<span>Empleados <br>Capacitados</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="ftco-section" style="padding-bottom: 20px; padding-top: 20px;">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/mision1.jpg);">
			</div>
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans ">Misión</font></h2>
				</div>
				<div class="" style="text-align: justify; " >
					<font face="Verdana">
						<p>Ser la mejor propuesta de valor para nuestros clientes a través del cumplimiento de sus necesidades y expectativas, que generen beneficios económicos para nuestros socios comerciales, nuestro personal y la comunidad buscando siempre la excelencia en todo lo que hacemos.</p>
					</font>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section" style="padding-bottom: 30px; padding-top: 20px;">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans ">Visión</font></h2>
				</div>
				<div class="">
					<font face="Verdana">
						<p style=" text-align: justify;" >Ser la empresa líder en la transformación del plástico a nivel mundial en componentes para la industria cosmética y de cuidado personal, a través de la ejecución de procesos primarios y secundarios, adquiriendo continuamente tecnología de punta que nos ayude a incursionar en nuevos mercados, siempre siendo responsables de nuestro entorno.</p>
					</div>
				</font>
			</div>
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/bg_4.jpg);">
			</div>
		</div>
	</div>
</section>






<section class="ftco-intro" style="background-image: url(images/fondoPrincipal.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 text-center">
				<font face="Verdana">
					<h2>¡En MC Plásticos de México vivimos con pasión nuestros valores!</h2>
				</font>
			</div>
		</div>
	</div>
</section>

{{-- <section class="ftco-section" style="padding-bottom: 0; padding-top: 20px;">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-12 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans">NUESTRO SERVICIO DE EXCELENCIA</font></h2>
				</div>
				<div class="">
					<font face="Verdana">
						<p style=" text-align: justify; font-size: 22px" >
							En MC Plásticos brindamos un servicio de excelencia a través de un gran equipo de trabajo, calificado y con vocación de servicio a nuestros socios de negocio.
							<br><br>
							A través de la innovación y de la integración de tecnologías de punta, buscamos brindar a nuestros clientes una oferta competitiva, que cumpla con sus especificaciones y necesidades, mediante un servicio de calidad.
						</p>
					</div>
				</font>
			</div>
		</div>
	</div>
</section> --}}

<section class="ftco-section" style="padding-bottom: 10px;" id="diseño">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<font face="Encode Sans"><h2 class="mb-4" >Nuestros valores</h2></font>
			</div>
		</div>
{{-- 		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/equipo.jpg);"></div>
					</div>
					<div class="text pt-3 text-center" style="background-color: #0d3a5c;">
						<span class="position mb-2" style="color: white;">Trabajo en equipo</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-items-center" style="background-image: url(images/innvalores.jpg);  "></div>
					</div>
					<div class="text pt-3 text-center" style="background-color: #0d3a5c;">
						<span class="position mb-2" style="color: white;">Innovación</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/IMG_0226.JPG);"></div>
					</div>
					<div class="text pt-3 text-center" style="background-color: #0d3a5c;">
						<span class="position mb-2" style="color: white;">Integridad</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style=" background-image: url(images/servicio_excelencia.jpg);"></div>
					</div>
					<div class="text pt-3 text-center" style="background-color: #0d3a5c;">
						<span class="position mb-2" style="color: white;">Servicio de excelencia</span>
					</div>
				</div>
			</div>
		</div> --}}
		<div class="row no-gutters my-5">
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans ">Trabajo en equipo</font></h2>
				</div>
				<div class="">
					<font face="Verdana">
						<p style=" text-align: justify;" ><strong>Trabajar en equipo</strong>, a fin de alcanzar los resultados juntos, respetándonos y comprometiéndonos con nuestros equipos de trabajo.</p>
					</div>
				</font>
			</div>
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fin/tab_equipo.JPG); background-size: cover;  height: 300px">
			</div>
		</div>
		<div class="row no-gutters my-5">
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/innvalores.jpg); background-size: cover;  height: 300px">
			</div>
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans ">Innovación</font></h2>
				</div>
				<div class="">
					<font face="Verdana">
						<p style=" text-align: justify;" ><strong>Innovar</strong>, enfocados siempre en cómo podemos hacer mejor las cosas.</p>
					</div>
				</font>
			</div>
		</div>
		<div class="row no-gutters my-5">
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans ">Integridad</font></h2>
				</div>
				<div class="">
					<font face="Verdana">
						<p style=" text-align: justify;" >Actuamos siempre con <strong>Integridad</strong>, con congruencia, haciendo lo correcto sin afectar los intereses de nuestros compañeros de trabajo ni de la empresa.</p>
					</div>
				</font>
			</div>
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fin/integridad.JPG); background-size: cover;  height: 300px">
			</div>
		</div>
		<div class="row no-gutters my-5 align-items-center">
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/fin/excelencia.JPG); background-size: cover;  height: 300px">
			</div>
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans ">Servicio de excelencia</font></h2>
				</div>
				<div class="">
					<font face="Verdana">
						<p style=" text-align: justify;" >
							Ofrecer en todo momento un <strong>Servicio de Excelencia</strong> a nuestros clientes, tanto para el cliente interno como para el cliente externo.
							En MC Plásticos de México brindamos un servicio de excelencia a través de un gran equipo de trabajo, calificado y con vocación de servicio a nuestros socios de negocio.
							A través de la innovación y de la integración de tecnologías de punta, buscamos brindar a nuestros clientes una oferta competitiva, que cumpla con sus especificaciones y necesidades, mediante un servicio de calidad.
						</p>
					</div>
				</font>
			</div>
		</div>

		<div class="row no-gutters my-5">
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans ">Lealtad</font></h2>
				</div>
				<div class="">
					<font face="Verdana">
						<p style=" text-align: justify;" >Nuestra <strong>Lealtad</strong> nos permite generar una relación de confianza con nuestros clientes y colaboradores.</p>
					</div>
				</font>
			</div>
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/LEALTAD.JPG); background-size: cover;  height: 300px">
			</div>
		</div>
	</div>
</section>


@endsection