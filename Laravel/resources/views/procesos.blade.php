@extends('plantilla')

@section('titulo')
Mercados y clientes
@endsection

@section('contenido')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Mercados y clientes<h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Mercados y clientes<i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container p-0">
			<div class="row no-gutters justify-content-center mb-4">
				<div class="col-auto">
					<h2>Nuestros mercados</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container p-0">
		<div class="row justify-content-center my-4">
			<div class="col-12">
				<img src="{{ asset('images/mercados_y_clientes.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="70%">
			</div>
		</div>
	</div>
</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container p-0">
			<div class="row no-gutters justify-content-center mb-4">
				<div class="col-auto">
					<h2>Nuestros clientes</h2>
				</div>
			</div>
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
	</section>
	@endsection