@extends('plantilla')

@section('titulo')
Desarrollo
@endsection

@section('contenido')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/backgrounds/{{ getRandomBackground() }}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<font face="Encode Sans"><h1 class="mb-2 bread">Desarrollo<h1></font>
					<!-- <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Desarrollo<i class="ion-ios-arrow-forward"></i></span></p> -->
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container p-0">
		<div class="row justify-content-center my-4">
			<div class="col-12">
				<img src="{{ asset('images/info.png') }}" style="margin-right: auto; margin-left: auto; display: block" alt="" width="70%">
			</div>
		</div>
	</div>
</section>
	@endsection