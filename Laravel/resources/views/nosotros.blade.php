@extends('plantilla')

@section('titulo')
Nosotros
@endsection

@section('contenido')
<!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Nuestra compañía</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Nuestra compañía<i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>
<center>
	<div class="col-md-8 wrap-about py-5 ftco-animate">
		<div class="heading-section mb-5">
			<h2 class="mb-4">Nuestra filosofía</h2>
		</div>
		<div class="">
			<p class="mb-5" style="text-align: justify;">En Grupo MC, estamos comprometidos con nuestros clientes a brindar productos y  servicios de calidad que cumplan con las  especificaciones requeridas. Trabajamos con colaboradores enfocados al cumplimiento de los objetivos de calidad. Nos esforzamos por la mejora continua en nuestros procesos y nos aseguramos de cumplir con los requisitos legales y reglamentarios.</p>
		</div>
	</div>
</center>
<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
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
</section>

<section class="ftco-section" style="padding-bottom: 20px; padding-top: 20px;">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/mision.JPG);">
			</div>
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans Black">Misión</font></h2>
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
					<h2 class="mb-4"><font face="Encode Sans Black">Visión</font></h2>
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
<section class="ftco-section" style="padding-bottom: 20px; padding-top: 20px;">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/inicio1.png); ">
			</div>
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4"><font face="Encode Sans Black">Innovación</font></h2>
				</div>
				<font face="Verdana">
				<div class=""  style=" fac text-align: justify;  ">
					<p>MC Plásticos tiene diferentes productos, trabajamos de la mano con nuestros clientes, basándonos en sus diseños, especificaciones y muestras para la elaboración de cada producto, anteponiendo la innovación en nuestros procesos y la más alta tecnología en plástico.</p>
				</div>
				</font>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container p-0">
		<div class="row justify-content-center my-4">
			<div class="col-12">
				<img src="{{ asset('images/POLITCA-DE-CALIDA-MC-WEB.jpg') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="70%">
			</div>
		</div>
	</div>
</section>




<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 text-center">
				<h2>En MC Plásticos vivimos con pasión nuestros valores</h2>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" style="padding-bottom: 10px;" id="diseño">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4">Nuestros valores</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/team-1.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
						<span class="position mb-2">Trabajo en equipo</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/team-2.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
						<span class="position mb-2">Innovación</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/team-3.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
						<span class="position mb-2">Integridad</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(images/team-4.jpg);"></div>
					</div>
					<div class="text pt-3 text-center">
						<span class="position mb-2">Servicio de excelencia</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


@endsection