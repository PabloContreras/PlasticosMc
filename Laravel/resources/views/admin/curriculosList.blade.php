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
							<h4 class="card-title">Curriculos</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class=" text-primary">
										<th>
											ID
										</th>
										<th>
											Nombre
										</th>
										<th>
											Apellidos
										</th>
										<th>
											Correo electrónico
										</th>
										<th>
											Teléfono
										</th>
										<th>
											Municipio
										</th>
										<th>
											Provincia
										</th>
										<th>
											Área de interés
										</th>
										<th>
											CV
										</th>
									</thead>
									<tbody>
										@foreach($curriculos as $c)
											<tr>
												<td>{{ $c->id }}</td>
												<td>{{ $c->nombre }}</td>
												<td>{{ $c->apellidos }}</td>
												<td>{{ $c->email }}</td>
												<td>{{ $c->telefono }}</td>
												<td>{{ $c->municipio }}</td>
												<td>{{ $c->provincia }}</td>
												<td>{{ getAreaInteres($c->area_interes) }}</td>
												<td>
													<a href="{{ Storage::url($c->url_cv) }}" target="_blank">
														<i class="fas fa-file-download"></i>
													</a>
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