<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{ asset('images/favicon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <style>
        .active{
            background: #0f3a5d;
        }

        .active a {
            color: white !important;
        }
    </style>

</head>
<body>
    <font face="Encode Sans">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container d-flex" style="height: 110px">
                <div class="d-flex py-4">
                    <a class="navbar-brand" href="{{ url('/employee/inicio') }}">
                        <img src="/images/mc.png" width="90" class="d-inline-block align-top" alt="Grupo MC">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menú
                </button>
                <div class="collapse navbar-collapse pull-right-lg" id="ftco-nav" style="background-color: white; float: right; ">
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item {{ isActive('/employee/publicaciones/avisos') ? 'active' : '' }} ">
                            <a href="{{ url('/employee/publicaciones/avisos') }}" class="nav-link pl-0" style="margin-left: 15px">
                                Avisos
                            </a>
                        </li>
                        <li class="nav-item {{ isActive('/employee/publicaciones/eventos') ? 'active' : '' }} ">
                            <a href="{{ url('/employee/publicaciones/eventos') }}" class="nav-link pl-0" style="margin-left: 15px">
                                Eventos
                            </a>
                        </li>
                        <li class="nav-item {{ isActive('/employee/publicaciones/documentos') ? 'active' : '' }} ">
                            <a href="{{ url('/employee/publicaciones/documentos') }}" class="nav-link pl-0" style="margin-left: 15px">
                                Documentos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-person"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/employee/perfil') }}">Perfil</a>
                                <a class="dropdown-item" href="{{ url('/employee/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                </a>
                                <form id="logout-form" action="{{ url('/employee/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </font>
    @yield('contenido')
    <!-- End contacto -->
    <!-- Footer -->
    <font face="Encode Sans">
        <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 20px; padding-bottom: 0px; " id="datos-contacto">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-5">
                            <font face="Encode Sans">
                                <h2 class="ftco-heading-2 logo"><img src="/images/mc.png" width="80" height="80" class="d-inline-block align-top" alt="" style="margin-left: 30px; "><br>MC Plásticos</h2>
                            </font>
                            <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                            <p><i class="fas fa-map-marker-alt"></i> <span style="color:navy;">Dirección:</span> <a href="maps://Av. Central No. 211, Parque Industrial Toluca 2000 C.P. 50200, Toluca, Estado de México."> <br>Av. Central No. 211, Parque Industrial Toluca 2000 C.P. 50233, Toluca, Estado de México.</a> </p>

                            <p><i class="fas fa-phone"></i><span style="color:navy;"> Llámanos: <br>
                            </span>
                            01 (722) 2766570
                            </p>


                            <p>
                                <i class="fas fa-globe-americas"></i>
                                <span style="color: navy;"> Sitio web: <br>
                                    <a href="http://mcplasticos.com">www.mcplasticos.com</a>
                                </span>
                            </p>

                            <p><i class="fas fa-at"></i> <span style="color:navy;">info@mcplasticos.com</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>
                            &copy;<script>document.write(new Date().getFullYear());</script>  Hecho con <i class="icon-heart" alt="love"></i> Por <a href="http://www.eostechnology.mx" target="_blank"> EOS Technology </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </font>
    <!-- End footer -->
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#04233a"/></svg></div>
    <!-- End loader -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.js') }}"></script>
    <script>
        $(function () {
            $.scrollUp({
                scrollName: 'scrollUp',
                topDistance: '300',
                topSpeed: 300,
                animation: 'fade',
                animationInSpeed: 200,
                animationOutSpeed: 200,
                scrollText: '',
                activeOverlay: false,
            });
        });
    </script>
    @yield('scripts')
</body>
</html>
