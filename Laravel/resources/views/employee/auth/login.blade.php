<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/images/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    MC Plásticos | Inicio para Empleado
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


  <!-- CSS Files -->
  <link href="{{ asset('/css/material-kit.css?v=2.0.4') }}" rel="stylesheet" />
  <!--<link href="../assets/demo/demo.css" rel="stylesheet" />-->
  <style>          
           body::after {
             content: "";
             background: url(/images/work-5.jpg);
             opacity: 0.4;
             top: 0;
             left: 0;
             bottom: 0;
             right: 0;
             background-size: cover; 
             background-position: top center;
             position: absolute;
             z-index: -1;   
           }           
        </style>
</head>
<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/')}}">
          <img src="/images/favicon.png" style="width: 40px;"> </a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          
          <!-- Authentication Links -->
          @guest
              {{--<li class="nav-item">
                  <a class="nav-link" href="{{ url('employee/login') }}">{{ __('Entrar') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('employee/register') }}">{{ __('Registro') }}</a>
                  </li>
              @endif--}}
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Salir') }}
                      </a>

                      <form id="logout-form" action="{{ url('/employee/logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" >
    <div class="container">
      <center>
        <b>
          <br>
          <h1 style="font-weight:200px;">Todos somos... 
          <img src="{{ asset('/images/favicon.png') }}" style="width: 150px;">
          </h1> 
        </b>
      </center>
      <br><br>
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form method="POST" action="{{ url('/employee/login') }}">
              @csrf
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Inicio</h4>
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                   <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                   <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Entrar') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <!-- <li>
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Síguenos en Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Síguenos en Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li>
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Síguenos en Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li> -->
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, hecho con <i class="fa fa-heart" style="color:red;"></i> por
        <a href="#" target="_blank">EOS Technology</a>.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="{{ asset('js/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('js/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for Sharrre btn -->
  <script src="{{ asset('js/js/plugins/jquery.sharrre.js') }}" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/js/material-kit.js?v=2.0.4') }}" type="text/javascript"></script>
</body>

</html>