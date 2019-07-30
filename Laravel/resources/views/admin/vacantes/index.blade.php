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
	                  	<h4 class="card-title">Vacantes</h4>
		                <a href="{{ url('/admin/vacantes/agregar') }}" type="submit" class="btn btn-primary float-right">Agregar Vacante</a>
	                </div>
	                <div class="card-body">
	                  <div class="table-responsive">
	                    <table class="table">
	                      	<thead class=" text-primary">
	                      		<th>
	                      			ID
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
		                        	Sueldo
		                        </th>
		                        <th>
		                        	Descripción
		                        </th>
		                        <th>
		                        	Activo
		                        </th>
		                    </thead>
	                      	<tbody>
		                        @foreach($vacantes as $vacante)
									<tr>
										<td>
											{{ $vacante->id }}
										</td>
										<td >
											{{ $vacante->empresa }}
										</td>
										<td >
											{{ $vacante->area }}
										</td>
										<td>
											{{ $vacante->puesto }}
										</td>
										<td>
											{{ $vacante->sueldo }}
										</td>
										<td>
											{{ $vacante->descripcion }}
										</td>
										<td>
											{{ $vacante->activo }}
										</td>
										<td>
											<a href="{{url('/admin/vacantes/'.$vacante->id.'/actualizar')}}" class="btn btn-primary" style="background-color: transparent; border: none; outline: none; color: blue;" > <i class="fas fa-edit"></i></a>
										</td>
										<td>
											<a href="{{ url('/admin/vacantes/'.$vacante->id) }}" class="btn btn-primary" style="background-color: transparent; border: none; outline: none; color: blue;">
												<i class="fas fa-eye" "></i>
											</a>
										</td>
										<td>
											<form action="{{ '/admin/vacantes/'.$vacante->id.'/eliminar' }}" method="post" >
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