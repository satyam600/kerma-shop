
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{url('frontend/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{url('frontend/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
</head>

<body>



<!-- Start Header Area -->


<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{url('index')}}"><img src="{{url('frontend/img/logo.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="{{url('index')}}">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{url('category')}}">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('single-product')}}">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('checkout')}}">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('cart')}}">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('confirmation')}}">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{url('blog')}}">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('single-blog')}}">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{url('login')}}">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('tracking')}}">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('elements')}}">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
							@if (Auth::check())
							<li class="nav-item"><a class="nav-link" href="{{url('logout')}}">Logout ({{ Auth::user()->f_name }} {{ Auth::user()->l_name}})</a></li>
							<li class="nav-item submenu dropdown">
								@auth
                                	@if(Auth::user()->isAdmin())
                                    @if(Auth::check())
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
								 	@endif
								@endif
								@endauth
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{url('userTable')}}">User Table</a></li>
									<li class="nav-item"><a class="nav-link" href="{{url('brand')}}">brand Table</a></li>
								</ul>
							</li>
							@else 
								
							 	<li class="nav-item"><a class="nav-link" href="{{url('login')}}">Login</a></li>
							@endif
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->