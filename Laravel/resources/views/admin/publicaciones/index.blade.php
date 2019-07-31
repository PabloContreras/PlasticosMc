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
	                  	<h4 class="card-title" style="text-transform: capitalize;">{{ $titulo}}s</h4>
		                <a href="{{ url('/admin/publicaciones/'.$titulo.'s/agregar') }}" type="submit" class="btn btn-primary float-right">Agregar {{ $titulo }}</a>
	                </div>
	                <div class="card-body">
	                  	<div class="table-responsive">
		                    <table class="table">
		                      	<thead class=" text-primary">
			                        <th>
			                        	Contenido
			                        </th>
			                        <th>
			                        	Empresa
			                        </th>
			                        <th>
			                        	Área
			                        </th>
			                        <th>
			                        	Puesto
			                        </th>
			                        <th>
			                        	Persona
			                        </th>
			                        <th></th>
			                        <th></th>
			                    </thead>
		                      	<tbody>
			                        @foreach($publicaciones as $publicacion)
										<tr>
											<td >
												{{ $publicacion->contenido }}
											</td>
											<td>
												{{ $publicacion->empresa }}
											</td>
											<td>
												{{ $publicacion->area }}
											</td>
											<td>
												{{ $publicacion->puesto }}
											</td>
											<td>
												{{ $publicacion->persona }}
											</td>
											<td>
												<a href="{{ url('/admin/publicaciones/'.$titulo.'s/'.$publicacion->id) }}" class="btn btn-primary" style="background-color: transparent; border: none; outline: none; color: blue;">
													<i class="fas fa-eye" "></i>
												</a>
											</td>
											<td>
												<form action="{{ '/admin/publicaciones/'.$titulo.'s/'.$publicacion->id.'/eliminar' }}" method="post" >
													{{csrf_field()}}
													{{ method_field('DELETE') }}
													<button type="submit" class="btn btn-primary" style="background-color: transparent; border: none;">
														<i class="fas fa-user-minus" style="color: blue;"></i>
													</button>
												</form>
												
											</td>
										</tr>
			                        @endforeach
		                     	</tbody>
		                    </table>
	                  	</div>
	                </div>
              	</div>
            </div>
        </div>
    </div>
</div>
@endsection