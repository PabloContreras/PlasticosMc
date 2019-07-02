@extends('plantilla')

@section('titulo')
Procesos y Servicios
@endsection

@section('contenido')
@include('modales')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Procesos y Servicios<h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Procesos y Servicios<i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container p-0">
			<div class="row no-gutters justify-content-center mb-4">
				<div class="col-auto">
					<h2>Nuestros procesos y servicios</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-2">
					<div class="row justify-content-center">
						<div class="col-12">
							<img class="img-fluid" src="{{ asset('images/servicios/s1.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">

						</div>
						<div class="col-auto mt-2">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ensamble">Ver mas</button>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="row justify-content-center">
						<div class="col-12">
							<img src="{{ asset('images/servicios/s2.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
						</div>

						<div class="col-auto mt-2">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#inyeccion">Ver mas</button>
						</div>

					</div>
				</div>
				<div class="col-2">
					<div class="row justify-content-center">
						<div class="col-12">
							<img src="{{ asset('images/servicios/s3.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
						</div>
						<div class="col-auto mt-2">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#decorado">Ver mas</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center my-4">
				<div class="col-2">
					<div class="row justify-content-center">
						<div class="col-12">
							<img src="{{ asset('images/servicios/s4.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
						</div>
						<div class="col-auto mt-2">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#esferas">Ver mas</button>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="row justify-content-center">
						<div class="col-12">
							<img src="{{ asset('images/servicios/s5.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
						</div>
						<div class="col-auto mt-2">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#metalizado">Ver mas</button>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="row justify-content-center">
						<div class="col-12">
							<img src="{{ asset('images/servicios/s6.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="60%">
						</div>
						<div class="col-auto mt-2">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#moldes">Ver mas</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection