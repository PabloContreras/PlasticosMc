@extends('admin/layout')

@section('links')
	<style>
		@media screen and (max-width: 767px){
			.col-md-4{
				margin-bottom: 1rem;
			}
		}
	</style>
@endsection

@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Vacantes</h1>
</div>
<div class="container">
	<div class="row">
		<form action="" class="col-12">
			<div class="form-group row">
				<div class="col-md-4">
					<input class="form-control" type="text" placeholder="Puesto">
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" placeholder="Lugar de trabajo">
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" placeholder="Sueldo">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12">
					<textarea class="form-control" name="" id="" rows="5" placeholder="Descripcion"></textarea>
				</div>
			</div>
			<div class="form-group row justify-content-center">
				<div class="col-1">
					<button type="submit" class="btn btn-success">Publicar</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection