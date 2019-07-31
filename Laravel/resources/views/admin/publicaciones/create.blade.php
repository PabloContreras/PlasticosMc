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
	                  	<h4 class="card-title">Crear {{ $titulo }}</h4>
	                </div>
	                <center>
		                  	<div class="table-responsive">
			                    <table class="table">
				                    <form method="POST" action="{{ url('/admin/publicaciones/'.$titulo.'s') }}" enctype="multipart/form-data">
				                    	@csrf
		                				<div class="card-body col-md-12">
		                					<div class="row">
						                    	<div class="form-group col-md-6">
											    	<label for="exampleTextarea">Contenido</label>
											    	<textarea class="form-control" id="exampleTextarea" rows="1" name="contenido"></textarea>
											    </div>
											    <div class="form-group col-md-2 custom-control custom-switch">
											    	<label for="imagen">Tipo de archivo</label>
											      	<input type="checkbox" class="custom-control-input" checked="" id="imagen" name="imagen">
      												<label class="custom-control-label" for="imagen">Imagen/Archivo</label>
											    </div>
											    <div class="form-group col-md-4" id="imagen">
											      	<label for="exampleInputFile">Elige un archivo</label>
											      	<input type="file" class="form-control-file" id="exampleInputFile" name="avatar">
											    </div>
											    <div class="form-group col-md-4" id="archivo">
											      	<label for="exampleInputFile">Elige un archivo</label>
											      	<input type="file" class="form-control-file" id="exampleInputFile" name="archivo">
											    </div>
					                        </div>
					                        <div class="row">					                        	
											    <div class="form-group col-md-3">
											      	<label for="exampleSelect1">Empresa</label>
											        <select class="form-control" id="exampleSelect1" name="empresa">
											        	<option selected=""></option>
												    	<option value="MC Plásticos">MC Plásticos</option>
												        <option value="Fortalab">Fortalab</option>
												        <option value="Prosentec">Prosentec</option>
											    	</select>
											    </div>
											    <div class="form-group col-md-3">
											      	<label for="exampleSelect1">Área</label>
											        <select class="form-control" id="exampleSelect1" name="area">
										        		<option selected=""></option>
												    	<option value="MC Plásticos">MC Plásticos</option>
												        <option value="Fortalab">Fortalab</option>
												        <option value="Prosentec">Prosentec</option>
											    	</select>
											    </div>
											    <div class="form-group col-md-3">
											      	<label for="exampleSelect1">Puesto</label>
											        <select class="form-control" id="exampleSelect1" name="puesto">
											        	<option selected=""></option>
												    	<option value="MC Plásticos">MC Plásticos</option>
												        <option value="Fortalab">Fortalab</option>
												        <option value="Prosentec">Prosentec</option>
											    	</select>
											    </div>
											    <div class="form-group col-md-3">
											      	<label for="exampleSelect1">Persona</label>
											        <select class="form-control" id="exampleSelect1" name="persona">
										        		<option selected=""></option>		
												    	<option value="MC Plásticos">MC Plásticos</option>
												        <option value="Fortalab">Fortalab</option>
												        <option value="Prosentec">Prosentec</option>
											    	</select>
											    </div>

					                        </div>
										    <div class="form-group">
					                            <div class="col-md-6 col-md-offset-4">
					                                <button type="submit" class="btn btn-primary">
					                                    Aceptar
					                                </button>
					                            </div>
					                        </div>
					                    </div>
									</form>
			                    </table>
		                  	</div>
	                </center>
              	</div>
            </div>
        </div>
    </div>
</div>
@endsection