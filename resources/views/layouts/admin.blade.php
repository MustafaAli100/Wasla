<!DOCTYPE html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('tab-title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- <link rel="icon" href="" type="image/x-icon"/> -->
	<!-- Fonts and icons -->
	<script src="{{ asset ('js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{ asset ('assets/css/fonts.min.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->

	<link  rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link  rel="stylesheet" href="{{ asset('css/atlantis.min.css') }}">
	<link  rel="stylesheet" href="{{ asset('css/lobibox.css') }}">


<body>
<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="{{url('/')}}" class="logo">
					<img  src="desgin/img/WaslaLogoS.png" alt="Wasla">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-bars"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
				
				<div class="container-fluid">
					<!-- <div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div> -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="{{ route('logout') }}" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-logout"> LogOut </i>
							</a>
						

				</div>
			</nav>
			<!-- End Navbar -->

			<!-- </div> -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a data-toggle="collapse" href="{{ url('/') }}" class="collapsed" aria-expanded="false">
								<h3 class="fa fa-home" > Home </h3>
							</a>
						</li>

						<li class="nav-item">
							<a href="{{ url('/dashbord') }}">
								<i class="fas fa-layer-group"></i>
								<p>Dashbord</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="{{ route('admin.project.index') }}">
								<i class="fas fa-layer-group"></i>
								<p>Projects</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.user.index') }}">
								<i class="fas fa-users"></i>
								<p>Users</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
        </div>
        @yield('content')
        </diV>
<!-- End Sidebar -->
<!-- <footer class="footer">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-4">
				<span class="copyright">Copyright &copy;  wasla.com  2020-2019</span>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li class="list-inline-item">
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="list-inline quicklinks">
					<li class="list-inline-item">
						<a class="nav-link" href="{{url('/Trms')}}">
					   Privacy Policy & Terms of Use</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer> -->
		</div>
		
			
	<!--   Core JS Files   -->
	<script src="{{ asset('js/lobibox.js') }}"></script>
	 <script type="text/javascript" src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
 	<script type="text/javascript" src="{{ asset('js/core/popper.min.js') }}"></script>
 	<script type="text/javascript" src="{{ asset('js/core/bootstrap.min.js') }}"></script>
	<!-- jQuery UI -->

	<script type="text/javascript" src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	
	<script type="text/javascript" src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>



	<!-- Bootstrap Notify -->
	<script type="text/javascript" src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- Sweet Alert -->
	<script type="text/javascript" src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>


	<!-- pdf and image JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"rel="stylesheet" type="text/css" />
		
	<!-- pdf and image JS -->
	<script  type="text/javascript" src="https://github.com/pipwerks/PDFObject/blob/master/pdfobject.min.js"></script>


	
	<!-- Atlantis JS -->
		<script type="text/javascript" src="{{ asset('js/costome/atlantis.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/costome/all.min.js') }}"></script>





</body>
</html>