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
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              	<div class="card">
	                <div class="card-header card-header-primary">
	                  	<h4 class="card-title">Ver información de administrador</h4>
	                </div>
	                <center>
		                <div class="card-body col-md-6">
		                  	<div class="table-responsive">
			                    <table class="table">
				                    	<div class="form-group has-success">
											<label class="form-control-label" for="inputSuccess1">Nombre: </label>
											<label>{{ $editor->name }}</label>
										</div>
				                      	<div class="form-group">
									    	<label for="exampleInputEmail1">Email: </label>
									    	<label> {{ $editor->email }}</label>
									    </div>	
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