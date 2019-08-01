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
	                  	<h4 class="card-title">Crear Editor</h4>
	                </div>
	                <center>
		                <div class="card-body col-md-6">
		                  	<div class="table-responsive">
			                    <table class="table">
				                    <form method="POST" action="{{ url('/admin/empleados') }}/@yield('editId')">
				                    	@csrf
				                    	@section('editMethod')
                    					@show
				                    	<div class="form-group has-success">
											<label class="form-control-label" for="inputSuccess1">Nombre</label>
											<input type="text" class="form-control" id="inputValid" name="name" value="@yield('editNombre')">
										</div>
										<div class="form-group has-success">
											<label class="form-control-label" for="inputSuccess1">Empresa</label>
											<input type="text" class="form-control" id="empresa" name="empresa" value="@yield('editEmpresa')">
										</div>
										<div class="form-group has-success">
											<label class="form-control-label" for="inputSuccess1">Área</label>
											<input type="text" class="form-control" id="area" name="area" value="@yield('editArea')">
										</div>
										<div class="form-group has-success">
											<label class="form-control-label" for="inputSuccess1">Puesto real</label>
											<input type="text" class="form-control" id="puesto_real" name="puesto_real" value="@yield('editPuestoReal')">
										</div>
										<div class="form-group has-success">
											<label class="form-control-label" for="inputSuccess1">Puesto en intranet</label>
											<input type="text" class="form-control" id="puesto_intranet" name="puesto_intranet" value="@yield('editPuestoIntranet')">
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