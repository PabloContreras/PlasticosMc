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
				<h1 class="mb-2 bread">Acerca de nosotros</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Acerca de nosotros <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 d-flex">
					<div class="text d-flex align-items-center">
						<strong class="number" data-number="45">0</strong>
					</div>
					<div class="text-2">
						<span>Años de <br>Experiencia</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 d-flex">
					<div class="text d-flex align-items-center">
						<strong class="number" data-number="1500">0</strong>
					</div>
					<div class="text-2">
						<span>Artículos <br> que se <br>producen</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 d-flex">
					<div class="text d-flex align-items-center">
						<strong class="number" data-number="100">0</strong>
					</div>
					<div class="text-2">
						<span>Empleados <br>Capacitados</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 d-flex">
					<div class="text d-flex align-items-center">
						<strong class="number" data-number="300">0</strong>
					</div>
					<div class="text-2">
						<span>Clientes <br>Felices</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" style="padding-bottom: 20px; padding-top: 20px;">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/bg_2.jpg);">
			</div>
			<div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
				<div class="heading-section mb-5">
					<h2 class="mb-4">Misión</h2>
				</div>
				<div class="">
					<p>Ser la mejor propuesta de valor para nuestros clientes a través del cumplimiento de sus necesidades y expectativas, que generen beneficios económicos para nuestros socios comerciales, nuestro personal y la comunidad buscando siempre la excelencia en todo lo que hacemos.</p>
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
					<h2 class="mb-4">Visión</h2>
				</div>
				<div class="">
					<p style="color: black">Ser la empresa líder en la transformación del plástico a nivel mundial en componentes para la industria cosmética y de cuidado personal, a través de la ejecución de procesos primarios y secundarios, adquiriendo continuamente tecnología de punta que nos ayude a incursionar en nuevos mercados, siempre siendo responsables de nuestro entorno.</p>
				</div>
			</div>
			<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/bg_4.jpg);">
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

<section class="ftco-section" style="padding-bottom: 10px;">
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
<center>
	<div class="col-md-8 wrap-about py-5 ftco-animate">
		<div class="heading-section mb-5">
			<h2 class="mb-4">Nuestra filosofía</h2>
		</div>
		<div class="">
			<p class="mb-5">En MC Plásticos S.A. de C.V. ofrecemos a nuestros clientes productos de calidad, fabricados de acuerdo a sus específicaciones, con un alto nivel de servicio y precios competitivos, empleando tecnología de vanguardia.</p>
		</div>
	</div>
</center>
@endsection