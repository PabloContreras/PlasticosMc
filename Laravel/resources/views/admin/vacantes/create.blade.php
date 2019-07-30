@extends('admin.layout')

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
		<form method="POST" action="{{ url('/admin/vacantes/') }}/@yield('editId')" class="col-12">
			@csrf
        	@section('editMethod')
			@show
			<div class="form-group row">
				<div class="form-group col-md-3">
			      	<label for="exampleSelect1">Empresa</label>
			        <select class="form-control" id="exampleSelect1" name="empresa">
			        	<option selected=""></option>
			        	@if( isset($vacante->empresa) )
			       			@if( $vacante->empresa == "MC Plásticos")
					        	<option value="MC Plásticos" selected="">MC Plásticos</option>
					        	<option value="Fortalab">Fortalab</option>
					        	<option value="Prosentec">Prosentec</option>
					        @elseif($vacante->empresa = "Fortalab")
					        	<option value="MC Plásticos">MC Plásticos</option>
					        	<option value="Fortalab" selected="">Fortalab</option>
					        	<option value="Prosentec">Prosentec</option>
					        @elseif($vacante->empresa = "Prosentec")
					        	<option value="MC Plásticos">MC Plásticos</option>
					        	<option value="Fortalab">Fortalab</option>
					        	<option value="Prosentec">Prosentec</option>
					        @endif
					    @else
					    	<option value="MC Plásticos">MC Plásticos</option>
					        <option value="Fortalab">Fortalab</option>
					        <option value="Prosentec">Prosentec</option>
					    @endif
			    	</select>
			    </div>
				<div class="col-md-3">
					<label for="area">Área</label>
					<input class="form-control" type="text" id="area" name="area" value="@yield('editArea')">
				</div>
				<div class="col-md-3">
					<label for="puesto">Puesto</label>
					<input class="form-control" type="text" id="puesto" name="puesto" value="@yield('editPuesto')">
				</div>
				<div class="col-md-3">
					<label for="sueldo">Sueldo</label>
					<input class="form-control" type="text" id="sueldo" name="sueldo" value="@yield('editSueldo')">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-10">
					<textarea class="form-control" name="descripcion" id="" rows="3" placeholder="Descripción"> 
						@if(isset($vacante->descripcion)){{ ucfirst($vacante->descripcion) }} @endif
					</textarea>
				</div>
				<br><br>
				<div class="col-md-2 custom-control custom-switch">
			      <input type="checkbox" class="custom-control-input" id="customSwitch1" name="activo" {{ isset($vacante->activo) == 'on' ? ' checked' : '' }}>
			      <label class="custom-control-label" for="customSwitch1">Activo</label>
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