<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ URL::asset('public/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ URL::asset('public/images/icon.png') }}">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link href="{{ URL::asset('public/css/plugins.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet">
	<!-- Cusom css -->
	<link href="{{ URL::asset('public/css/custom.css') }}" rel="stylesheet">
	
    
	

	<!-- Modernizer js -->
	<script src="{{ asset('public/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
	    @section('header')
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="{{url('/')}}">
								<img src="{{ URL::asset('public/images/logo/logo.png') }}" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{url('/contact')}}">Contact</a></li>
								<li><a href="{{url('/cart')}}">Cart</a></li>
								<li><a href="{{url('/checkout')}}">Checkout</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li></li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>@guest
													Account
													
													@else
													{{ Auth::user()->name }}
												@endguest </span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														@guest
														<span>
															<a class="nav-link" href="{{ url('accountlogin') }}">{{ __('Login') }}</a>
														</span>
														
														@if (Route::has('register'))
															<span>
																<a class="nav-link" href="{{  url('accountregister') }}">{{ __('Register') }}</a>
															</span>

															
														@endif
														@else
														<span>
															<a class="dropdown-item" href="{{ route('logout') }}"
															onclick="event.preventDefault();
																		  document.getElementById('logout-form').submit();">
															 {{ __('Logout') }}
														 </a>
									 
														 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															 @csrf
														 </form>
														</span>
														@endguest
																	
																		
																
															
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{url('/contact')}}">Contact</a></li>
								<li><a href="{{url('/cart')}}">Cart</a></li>
								<li><a href="{{url('/checkout')}}">Checkout</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
			<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" method="POST" class="minisearch" action="{{route('book.search')}}">
			@csrf
				<div class="field__search">
					<input type="text" name="search" placeholder="Search entire store here...">
					<div class="action">
						<a href=""><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		</header>
        @show
        <main>
            @yield('content')
		</main>
		@section('footer')
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
										<img src="{{ URL::asset('public/images/logo/3.png')}}" alt="logo">
									</a>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="index.html">Trending</a></li>
										<li><a href="index.html">Best Seller</a></li>
										<li><a href="index.html">All Product</a></li>
										<li><a href="index.html">Wishlist</a></li>
										<li><a href="index.html">Blog</a></li>
										<li><a href="index.html">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="{{ URL::asset("public/images/icons/payment.png") }}" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		@show
<!-- JS Files -->
<script src="{{ asset('public/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('public/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/js/plugins.js') }}"></script>
	<script src="{{ asset('public/js/active.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#register').click(function () {
				$('#loginform').hide(300);
				$('#registerform').show(300);
		
			});
			$('#login').click(function () {
				$('#registerform').hide(300);
				$('#loginform').show(300);
		
			});
		});
		</script>
</body>
</html>