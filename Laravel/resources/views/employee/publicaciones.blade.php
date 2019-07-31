@extends('employee.layout.auth')
@section('contenido')
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body" style="margin-left: 10px;">
                            <div class="card border-info mb-3" style="max-width: 20rem;">
                                <div class="card-header">
                                    <center><img src="/images/uploads/avatars/{{ $empleado->avatar }}" class="img-responsive" alt="Responsive image"></center>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><p><strong>{{ $empleado->name }}</strong></p></h4>
                                    <ul class="list-group"> 
                                        <li class="list-group-item d-flex align-items-center">
                                            <i class="fa fa-birthday-cake" aria-hidden="true" style="margin-right: 5px !important;"></i> {{ \Carbon\Carbon::parse($empleado->cumpleaños)->format('j F Y') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">  
                    @forelse( $publicaciones as $publicacion)            
                        <div class="card border-primary mb-3" >
                            <div class="card-header">
                                <small style="color: black;"> {{ $publicacion->created_at->diffForHumans() }} </small>
                            </div>
                            <div class="card-body">
                                @if( $publicacion->imagen != 'on')
                                    <div class="pull-left">
                                        <img class="media-object" src="{{ Request::is('tags/*') ? '../' : '' }}/uploads/publications/{{ $publicacion->archivo }}" alt="avatar" style="width: 64px; height: 64px;">
                                    </div>
                                @endif
                                <p class="card-text"> 
                                    <h2>
                                        <a href="{{ url('/employee/'.$publicacion->id) }}"> {!! $publicacion->contenido !!} </a>
                                    </h2>
                                </p>
                            </div>
                        </div>
                    @empty
                        <h1> Por el momento no tienes {{ $tipo}} disponibles</h1>
                    @endforelse
                </div> 
            </div>
        </div>   
    </center>
@endsection

