<!DOCTYPE html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('tab-title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- <link rel="icon" href="" type="image/x-icon"/> -->
	<!-- Fonts and icons -->
	<script src="{{ asset ('js/plugin/webfont/webfont.min.js') }}"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery2.2.4.js"></script>
		<script src="js/jquery2.2.4.js"></script>
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
				
				<a href="index.html" class="logo">
					<img  src="desgin/img/WaslaLogoS.png" alt="">
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

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

						{{-- <li class="nav-item dropdown hidden-caret">
								<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-envelope"></i>
								</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li> --}}
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>						
						{{-- <li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{url('/show_programmer')}}">My Profile</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{url('/edit_programmer')}}">Edit Profile</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li> --}}
						<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@if (Route::has('register'))
									<li class="nav-item">
										<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
								@endif
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{auth()->user()->firstname}} 
									</a>
	
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{url('/show_programmer')}}">My Profile</a>
										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
	
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
										{{-- <div class="dropdown-divider"></div> --}}
									
									</div>
								</li>
							@endguest
						</ul>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->

			<!-- </div> -->
		</div>
		<!-- Sidebar -->
		@if (auth()->user()->hasRole('Adminstrator'))
			@include('sidebar.adminsidebar')
		@elseif(auth()->user()->hasRole('ProjectOwner'))
			@include('sidebar.ownersidebar')
		@else
			@include('sidebar.programmersidebar')
		@endif
		<!-- End Sidebar -->
		<div>
       		 @yield('content')
        </diV>
{{-- 
		<footer class="footer">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy;  wasla.com  2020-2019</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="#">
									<i class="icon icon-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="icon icon-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="icon icon-social-linkedin"></i>
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
		</footer> --}}
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