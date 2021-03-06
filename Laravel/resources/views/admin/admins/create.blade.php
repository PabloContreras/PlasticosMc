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
	                  	<h4 class="card-title">Crear Administrador</h4>
	                </div>
	                <center>
		                <div class="card-body col-md-6">
		                  	<div class="table-responsive">
			                    <table class="table">
				                    <form method="POST" action="{{ url('/admin/administradores') }}/@yield('editId')">
				                    	@csrf
				                    	@section('editMethod')
                    					@show
				                    	<div class="form-group has-success">
											<label class="form-control-label" for="inputSuccess1">Nombre</label>
											<input type="text" class="form-control" id="inputValid" name="name" value="@yield('editNombre')">
										</div>
				                      	<div class="form-group">
									    	<label for="exampleInputEmail1">Email</label>
									    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email" name="email" value="@yield('editEmail')">
									    </div>
									    <div class="form-group">
									    	<label for="exampleInputPassword1">Password</label>
									    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
									    </div>
									    <div class="form-group">
				                            <div class="col-md-6 col-md-offset-4">
				                                <button type="submit" class="btn btn-primary">
				                                    Aceptar
				                                </button>
				                            </div>
				                        </div>
									</form>
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