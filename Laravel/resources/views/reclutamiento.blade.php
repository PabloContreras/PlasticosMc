@extends('plantilla')

@section('titulo')
Reclutamiento
@endsection

@section('contenido')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/backgrounds/{{ getRandomBackground() }}');" data-stellar-background-ratio="0.5">
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

@if(Session::has('guardado'))
<div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success" role="alert">
				{{ Session::get('guardado') }}
			</div>
		</div>
	</div>
</div>
@else
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section ">
	<div class="container">
		<div class="row d-flex align-items-stretch no-gutters justify-content-around">
			<div class="col-md-6 p-6 p-md-5 order-md-last bg-light">
				<font face="Verdana" style="color:navy;">
					<form action="{{ route('enviar.cv') }}" enctype="multipart/form-data" method="POST" id="reclutamientoForm">
						@csrf
						<div class="row justify-content-center">
							<div class="col-auto">
								<h2>¡Compártenos tu información!</h2>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-auto">
								<p style="text-align: center">Nos interesa tenerte en nuestra base de datos para futuras posiciones</p>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-6">
								<input type="text" class="form-control" name="nombre" placeholder="Nombre" required="true">
							</div>
							<div class="form-group col-6">
								<input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required="true">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12">
								<input type="text" class="form-control" name="email" placeholder="Correo electronico" required="true">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12">
								<input type="text" class="form-control" name="telefono" placeholder="Teléfono" required="true">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-6">
								<input  class="form-control" type="text" name="municipio" placeholder="Municipio" required="true">
							</div>
							<div class="form-group col-6">
								<input class="form-control"  type="text" name="provincia" placeholder="Provincia" required="true">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-12">
								<input class="form-control" type="text" name="cp" placeholder="Código Postal" required="true">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-12">
								<select class="custom-select" name="area_interes" required="true">
									<option value="0" selected="true" disabled="true">Seleccione las áreas de interés</option>
									<option value="1">Capital Humano</option>
									<option value="2">Compras</option>
									<option value="3">Contabilidad</option>
									<option value="4">Logística y almacén</option>
									<option value="5">Producción</option>
									<option value="6">Mantenimiento</option>
									<option value="7">Sistemas</option>
									<option value="8">Transporte</option>
									<option value="9">Intendencia</option>
									<option value="10">Servicio al Cliente</option>
									<option value="11">Planeación</option>
									<option value="12">Calidad</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12">
								<p>Currículo</p>
								<input class="form-control-file" name="cv" type="file" name="adjunto" accept=".pdf" required="true">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="terminos" id="terminos" required="true">
									<label class="custom-control-label" for="terminos">Con la activación de esta casilla, usted confirma estar de acuerdo con nuestras <a href="" data-toggle="modal" data-target="#terminosModal">Condiciones del Servicio</a></label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<center>
								<input type="submit" value="Enviar" class="btn btn-primary py-3 px-5" onclick="enviar()" id="btn-enviar">
							</center>
						</div>
					</form>
				</font>
			</div>
		</div>
	</div>
</section>
@endif



<div class="modal fade" id="terminosModal" tabindex="-1" role="dialog" aria-labelledby="terminosModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Condiciones del Servicio</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				He leído, comprendido y autorizo a Grupo MC a tener este documento, mismo que contiene información personal, sensible y laboral de mi persona; la cuál será utilizada con la finalidad de recabar información necesaria para el proceso de reclutamiento y selección para ser tomado en consideración como candidato. Además autorizo el uso de mi información personal para ser utilizada como referencias a terceros. Hago constar que todos los datos antes mencionados son verdaderos y autorizo que se puedan investigar.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>


	<!--
	<section class="ftco-section contact-section">
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

@section('scripts')
<script>
	function enviar() {
		if($('#terminos').val() == 'on'){
			console.log('asd');
			$('#reclutamientoForm').submit();
		}
	}
</script>
@endsection