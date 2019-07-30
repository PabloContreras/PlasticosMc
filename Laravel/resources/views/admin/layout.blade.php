<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="{{ asset('css/admin/sb-admin-2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	@yield('links')
</head>
<body>
	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/perfil') }}">
					<img src="{{ asset('images/mc.png') }}" alt="" class="img-fluid" width="80px">
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0">

				<!-- Nav Item - Dashboard -->
				<li class="nav-item active">


					<!-- Divider -->
					<hr class="sidebar-divider">


					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item {{ Request::path() == 'admin/perfil' ? ' active' : '' }} {{ Request::path() == 'admin/home' ? ' active' : '' }}">
						<a class="nav-link collapsed" href="{{ url('/admin/perfil') }}">
							<i class="fas fa-users-cog"></i>
							<span>Perfil</span>
						</a>
					</li>
					<li class="nav-item {{ Request::path() == 'admin/administradores' ? ' active' : '' }}">
						<a class="nav-link collapsed" href="{{ url('/admin/administradores') }}">
							<i class="fas fa-users-cog"></i>
							<span>Administradores</span>
						</a>
					</li>
					<li class="nav-item {{ Request::path() == 'admin/editores' ? ' active' : '' }}">
						<a class="nav-link collapsed" href="{{ url('/admin/editores') }}">
							<i class="fas fa-users-cog"></i>
							<span>Editores</span>
						</a>						
					</li>
					<li class="nav-item {{ Request::path() == 'admin/empleados' ? ' active' : '' }}">
						<a class="nav-link collapsed" href="{{ url('/admin/empleados') }}">
							<i class="fas fa-users-cog"></i>
							<span>Empleados</span>
						</a>						
					</li>
					<li class="nav-item {{ Request::path() == 'admin/vacantes' ? ' active' : '' }}">
						<a class="nav-link collapsed" href="{{ url('/admin/vacantes') }}">
							<i class="fas fa-users-cog"></i>
							<span>Vacantes</span>
						</a>						
					</li>

					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">


				</ul>
				<!-- End of Sidebar -->

				<!-- Content Wrapper -->
				<div id="content-wrapper" class="d-flex flex-column">

					<!-- Main Content -->
					<div id="content">

						<!-- Topbar -->
						<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

							<!-- Sidebar Toggle (Topbar) -->
							<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
								<i class="fa fa-bars"></i>
							</button>

							<!-- Topbar Search -->
							<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
								<div class="input-group">
									<input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">
											<i class="fas fa-search fa-sm"></i>
										</button>
									</div>
								</div>
							</form>

							<!-- Topbar Navbar -->
							<ul class="navbar-nav ml-auto">

								<!-- Nav Item - Search Dropdown (Visible Only XS) -->
								<li class="nav-item dropdown no-arrow d-sm-none">
									<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-search fa-fw"></i>
									</a>
									<!-- Dropdown - Messages -->
									<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
										<form class="form-inline mr-auto w-100 navbar-search">
											<div class="input-group">
												<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
												<div class="input-group-append">
													<button class="btn btn-primary" type="button">
														<i class="fas fa-search fa-sm"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
								</li>

	

								<div class="topbar-divider d-none d-sm-block"></div>

								<!-- Nav Item - User Information -->
								<li class="nav-item dropdown no-arrow">
									<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
										<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
									</a>
									<!-- Dropdown - User Information -->
									<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
										<a class="dropdown-item" href="#">
											<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
											Perfil
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
											<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
												Salir
											</a>

											<form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
											@csrf
											</form>
										</a>
									</div>
								</li>

							</ul>

						</nav>
						<!-- End of Topbar -->

						<!-- Begin Page Content -->
						<div class="container-fluid">

							<!-- Page Heading -->
							@yield('contenido')


						</div>
						<!-- /.container-fluid -->

					</div>
					<!-- End of Main Content -->

					<!-- Footer -->
					<footer class="sticky-footer bg-white">
						<div class="container my-auto">
							<div class="copyright text-center my-auto">
								<p class="copyright text-center">
						            &copy;
						          <script>
						            document.write(new Date().getFullYear())
						          </script>, Hecho con <i class="fa fa-heart" style="color: red;"></i> & <i class="fa fa-coffee" style="color: black;"></i> por <a href="https://www.eostechnology.mx" target="_blank">EOS Technology</a>.
						        </p>
							</div>
						</div>
					</footer>
					<!-- End of Footer -->

				</div>
				<!-- End of Content Wrapper -->

			</div>
			<!-- End of Page Wrapper -->

			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>

			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/bootstrap.min.js') }}"></script>
			<script src="{{ asset('js/popper.min.js') }}"></script>
			<script src="{{ asset('js/admin/jquery.easing.min.js') }}"></script>
			<script src="{{ asset('js/admin/sb-admin-2.min.js') }}"></script>
			<script src="{{ asset('js/admin/Chart.js') }}"></script>
			<script src="https://kit.fontawesome.com/0017b15585.js"></script>
		</body>
</html>