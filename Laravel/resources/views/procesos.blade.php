@extends('plantilla')

@section('titulo')
Calidad
@endsection

@section('contenido')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/backgrounds/{{ getRandomBackground() }}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<font face="Encode Sans"><h1 class="mb-2 bread" >Calidad<h1></font>
					<!-- <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Mercados<i class="ion-ios-arrow-forward"></i></span></p> -->
				</div>
			</div>
		</div>
	</section>


	<section id="lista" class="pt-5">
		<div class="container">
			<div class="row" style="font-size: 1.6rem; text-align: justify;">
				<div class="col-12">

					<p>
						Nuestros clientes encuentran en <strong>MC Plásticos de México</strong> a un aliado comercial en la manufactura de componentes plásticos, altamente comprometido con la calidad de los productos y servicios que ofrecemos. <br>
						Nuestro equipo de trabajo está capacitado para ofrecer soluciones que satisfacen las necesidades más exigentes de nuestros clientes en cumplimiento de las especificaciones establecidas. <br>
						<strong>MC Plásticos de México</strong> está alineado a la norma ISO 9001:2015 que facilita el ordenamiento del sistema de gestión con la estrategia de la Organización.
					</p>
				</div>
			</div>
			<div class="row" style="font-size: 1.6rem; text-align: justify;">
				<div class="col-12">Objetivos de calidad</div>
				<div class="col-12">
					<ol>
						<li>Aseguramos la satisfacción de nuestros clientes</li>
						<li>Desarrollamos acciones para la mejora continua</li>
						<li>Alineamos las funciones de nuestros colaboradores a los objetivos de calidad</li>
						<li>Cumpliendo con el marco legal reglamentario</li>
					</ol>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-2 p-md-5 img img-2 mt-5 mt-md-0 mx-2" style="height: 250px; background-image: url({{ asset('images/calidad/calidad1.jpg') }})"></div>
				<div class="col-md-2 p-md-5 img img-2 mt-5 mt-md-0 mx-2" style="height: 250px; background-image: url({{ asset('images/calidad/calidad3.JPG') }})"></div>
				<div class="col-md-2 p-md-5 img img-2 mt-5 mt-md-0 mx-2" style="height: 250px; background-image: url({{ asset('images/calidad/calidad2.jpg') }})"></div>
			</div>
		</div>
	</section>

	<section>
		<center>
			<div class="col-md-11 py-5" style="text-align: justify;">
				<font face="Verdana">
					<h2>
						Estamos comprometidos en cumplir con las expectativas y requerimientos de nuestros clientes. Hacer bien las cosas a la primera a través de la filosofía “Cero defectos”.
					</h2>
				</font>
			</div>
		</center>
	</section>

	<section>
		<center>
			<div class="col-md-11 py-5 text-center" style="text-align: justify;">
				<font face="Encode Sans">
					<h1>
						Política de Calidad
					</h1>
				</font>

				<font face="Verdana" style="text-align: justify;">
					<h3>
						En <strong>Grupo MC</strong>, estamos comprometidos con nuestros clientes a brindar productos y servicios de calidad que cumplan con las especificaciones requeridas. Trabajamos con colaboradores enfocados al cumplimiento de los objetivos de calidad. Nos esforzamos por la mejora continua en nuestros procesos y nos aseguramos de cumplir con los requisitos legales y reglamentarios.
					</h3>
				</font>
			</div>
		</center>
	</section>

{{-- 	<section class="ftco-section" style="padding-bottom: 20px; padding-top: 20px;">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/innovacion.png); ">
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
	</section> --}}


	@endsection