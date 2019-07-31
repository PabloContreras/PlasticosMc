@extends('plantilla')

@section('titulo')
Contacto
@endsection

@section('contenido')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/backgrounds/{{ getRandomBackground() }}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Contacto</h1>
				<!-- <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Contacto <i class="ion-ios-arrow-forward"></i></span></p> -->
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
	<div class="container">
		<div class="row d-flex align-items-stretch no-gutters">
			<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.913598872037!2d-99.57222699764404!3d19.372893475459726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2b07012dbd093%3A0x8e75b555c71c1a31!2sMC+Pl%C3%A1sticos+de+M%C3%A9xico+SA+de+CV!5e0!3m2!1ses-419!2smx!4v1555362423348!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<!--
<section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-12 mb-4">
				<font face="Encode Sans">
				<h2 class="h4">Información de contacto</h2>

				</font>
			</div>
			<div class="w-100"></div>
			<div class="col-md-3 d-flex">
				<div class="bg-light d-flex align-self-stretch box p-4">
					<p><span>Dirección:</span> <a href="maps://Av. Central No. 211, Parque Industrial Toluca 2000 C.P. 50200, Toluca, Estado de México."> Av. Central No. 211, Parque Industrial Toluca 2000 C.P. 50200, Toluca, Estado de México.</a> </p>
				</div>
			</div>
			<div class="col-md-3 d-flex">
				<div class="bg-light d-flex align-self-stretch box p-4">
					<p><span>Teléfono</span> <a href="tel://7222766570">01 (722) 2766570</a></p>
				</div>
			</div>
			<div class="col-md-3 d-flex">
				<div class="bg-light d-flex align-self-stretch box p-4">
					<p><span>Email:</span> <a href="mailto:info@mcplasticos.com">info@mcplasticos.com</a></p>
				</div>
			</div>
		</div>
	</div>
</section> -->
@endsection