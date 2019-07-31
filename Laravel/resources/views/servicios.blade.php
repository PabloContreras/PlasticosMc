@extends('plantilla')

@section('titulo')
Procesos y Servicios
@endsection

@section('contenido')
@include('modales')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/backgrounds/{{ getRandomBackground() }}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Procesos y Servicios<h1>
					<!-- <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Procesos y Servicios<i class="ion-ios-arrow-forward"></i></span></p> -->
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container p-0">
			<div class="row justify-content-center my-4">
				<div class="col-12">
					<img src="{{ asset('images/infografia_nueva.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="100%">
				</div>
			</div>
		</div>
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container p-0">
				<div class="row justify-content-center my-4">
					<div class="col-12">
						<img src="{{ asset('images/infoMercados.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="100%">
					</div>
				</div>
			</div>
			<div class="container p-0">
				<div class="row justify-content-center my-4">
					<div class="col-12">
						<img src="{{ asset('images/infografiaFull.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="100%">
					</div>
				</div>
			</div>


		</section>



{{-- <section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container p-0">
			<div class="row no-gutters justify-content-center mb-4">
				<div class="col-auto">
					<font face="Encode Sans"><h2 style="color:navy;">Nuestros clientes</h2></font>
				</div>
			</div>
			<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-9 text-center">
							<font face="Verdana"><h2>MC Plásticos es el resultado de una historia de más de 40 años de esfuerzo y dedicación...</h2></font>
						</div>
					</div>
				</div>
			</section>
			<br><br>
			<div class="row justify-content-center">
				<div class="col-4">
					<img class="img-fluid" src="{{ asset('images/clientes/avon.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
				<div class="col-4">
					<img src="{{ asset('images/clientes/coty.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
				<div class="col-4">
					<img src="{{ asset('images/clientes/loreal.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
			</div>
			<div class="row justify-content-center my-4">
				<div class="col-4">
					<img src="{{ asset('images/clientes/revlon.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
				<div class="col-4">
					<img src="{{ asset('images/clientes/missionhills.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
				<div class="col-4">
					<img src="{{ asset('images/clientes/fortalab.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
			</div>
			<div class="row justify-content-center my-4">
				<div class="col-4">
					<img src="{{ asset('images/clientes/wella.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
				<div class="col-4">
					<img src="{{ asset('images/clientes/smasac.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
				</div>
			</div>
		</div>
	</section> --}}

	@endsection