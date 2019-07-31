@extends('employee.layout.auth')

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
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              	<div class="card">
	                <div class="card-header card-header-primary">
	                  	<h4 class="card-title">Ver información </h4>
	                </div>
	                <center>
		                <div class="card-body col-md-6">
		                  	<div class="table-responsive">
			                    <table class="table">
				                    	<div class="form-group has-success">
											<b><label class="form-control-label" for="inputSuccess1">Contenido: </label></b><br>
											<label> {{ $publicacion->contenido }} </label>
										</div>
				                      	<div class="form-group">
									    	<b><label for="exampleInputEmail1">Archivo: </label></b><br>
									    	<label> 
									    		@if( $publicacion->imagen === 'on')
										    		@if( $publicacion->archivo )
										    			<a href="{{ url('/admin/download/'.$publicacion->id)}}" class="btn btn-large btn-success"><i class="icon-download-alt"> </i> Descargar archivo </a>
										    		@else
										    			Esta publicación no contiene archivo adjunto
										    		@endif
										    	@else
										    		@if( $publicacion->archivo )
										    			<img src="/uploads/publications/{{ $publicacion->archivo }}" class="img-responsive" alt="Responsive image">
										    		@else
										    			Esta publicación no contiene archivo adjunto
										    		@endif
										    	@endif
									    	</label>
									    </div>	
									    <div class="form-group">
									    	<b><label for="empresa">Empresa</label></b><br>
									    	<label> {{ $publicacion->empresa }} </label>
									    </div>
									    <div class="form-group">
									    	<b><label for="area">Área</label></b><br>
									    	<label> {{ $publicacion->area }} </label>
									    </div>
									    <div class="form-group">
									    	<b><label for="puesto">Puesto</label></b><br>
									    	<label> {{ $publicacion->puesto }} </label>
									    </div>
									    <div class="form-group">
									    	<b><label for="persona">Persona</label></b><br>
									    	<label> {{ $publicacion->persona }} </label>
									    </div>
									    <a href="{{ url('/employee/publicaciones/'.$publicacion->tipo_publicacion.'s') }}" class="btn btn-success">Volver</a>
			                    </table>
		                  	</div>
		                </div>
	                </center>
              	</div>
            </div>
          </div>
        </div>
      </div>
@endsection