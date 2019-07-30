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
                                    <form action="{{ url('/'.$empleado->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <center><label>Actualizar foto de perfil</label></center>
                                        <input type="file" name="avatar" class="btn-block">
                                        <input type="submit" value="Actualizar" class="pull-right btn btn-xs btn-default">
                                    </form>
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
                    <div class="card border-primary mb-3" >
                        <div class="card-header">
                            Aquí puedes consultar tu información
                        </div>
                        <div class="card-body">
                            <div class="pull-left">
                                <a href="{{-- url('/'.$post->user->id) --}}">
                                    <img class="media-object" src="{{ Request::is('tags/*') ? '../' : '' }}uploads/avatars/{{-- $post->user->avatar --}}" alt="avatar" style="width: 64px; height: 64px;">
                                </a>
                            </div>
                            <p class="card-text"> <h2><a href="{{-- url('posts/'.$post->id) --}}"> {{--!! $post->body !!--}} </a></h2></p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>   
    </center>
@endsection