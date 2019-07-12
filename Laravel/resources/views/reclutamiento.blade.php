@extends('plantilla')

@section('titulo')
Reclutamiento
@endsection

@section('contenido')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<font face="Encode Sans"><h1 class="mb-2 bread">Reclutamiento</h1></font>
				<!-- <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('inicio') }}">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Reclutamiento <i class="ion-ios-arrow-forward"></i></span></p> -->
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section ">
	<div class="container">
		<div class="row d-flex align-items-stretch no-gutters justify-content-around">
			<div class="col-md-6 p-6 p-md-5 order-md-last bg-light">
				<font face="Verdana" style="color:navy;">
				<form action="#" enctype="multipart/form-data">
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
						<p>Seleccione el archivo de su CV</p>
						<input type="file" name="adjunto" accept=".pdf" >
					</div>
					 
					<div class="form-group">
						<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
					</div>
					<div class="form-group">
						<center><input type="submit" value="Enviar" class="btn btn-primary py-3 px-5"></center>
					</div>
				</form>
				</font>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-12 mb-4">
				<h2 class="h4">Información de contacto</h2>
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
</section>
 -->
@endsection