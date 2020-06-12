@extends('layouts.app')

@section('content')
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	
	<div class="wrapper" id="wrapper">
		
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
          <!-- Start Single Product -->
          @foreach ($books as $book)
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{url('single_product/'.$book->id)}}"><img src="{{ URL::asset("public/images/books/$book->thumbnail.jpg")}}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">{{$book->name}}</a></h4>
								<ul class="prize d-flex">
									<li>${{$book->price}}</li>
									<li class="old_prize">${{$book->price}}</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
										<form id="addtocart-form-{{$book->id}}" action="{{route('cart.store',$book)}}" method="POST" style="display: none;">
										@csrf
											<input type="hidden" name="book_id" value="{{$book->id}}">
										</form>
											<li><a class="cart" href="{{route('cart.store',$book)}}" onclick="event.preventDefault();
                        document.getElementById('addtocart-form-{{$book->id}}').submit();"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
          </div>
          @endforeach
					<!-- Start Single Product -->
				</div>
				<!-- End Single Tab Content -->
			</div>
    </section>
    <!-- End BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Stay With Us</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
    <!-- End NEwsletter Area -->
    <!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                            @foreach ($categories as $category)
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-{{$category->title}}" role="tab">{{$category->title}}</a>
                            @endforeach
                            
                        </div>
					</div>
        </div>
        <!--tab goes here -->
        <div class="tab__container mt--60">
            <!-- Start Single Tab Content -->
            <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                <div class="product__indicator--4 row arrows_style owl-carousel owl-theme">
                    @foreach ($books as $book)
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{url('single_product/'.$book->id)}}"><img src="{{ URL::asset("public/images/books/$book->thumbnail.jpg")}}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">{{$book->name}}</a></h4>
								<ul class="prize d-flex">
									<li>${{$book->price}}</li>
									<li class="old_prize">${{$book->price}}</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
                      <form id="addtocart-form-{{$book->id}}" action="{{route('cart.store',$book)}}" method="POST" style="display: none;">
                        @csrf
                      </form>
											<li><a class="cart" href="{{route('cart.store',$book)}}" onclick="event.preventDefault();
                        document.getElementById('addtocart-form-{{$book->id}}').submit();"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- End Single Tab Content -->
            <!-- Start Single Tab Content -->
            @foreach ($categories as $category)
                <div class="row single__tab tab-pane fade fade" id="nav-{{$category->title}}" role="tabpanel">
                <div class="product__indicator--4 row arrows_style owl-carousel owl-theme">
                    @foreach ($category->books as $book)
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{url('single_product/'.$book->id)}}"><img src="{{ URL::asset("public/images/books/$book->thumbnail.jpg")}}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">{{$book->name}}</a></h4>
								<ul class="prize d-flex">
									<li>${{$book->price}}</li>
									<li class="old_prize">${{$book->price}}</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
                      <form id="addtocart-form-{{$book->id}}" action="{{route('cart.store',$book)}}" method="POST" style="display: none;">
						@csrf
						<input type="hidden" name="book_id" value="{{$book->id}}">
                      </form>
											<li><a class="cart" href="{{route('cart.store',$book)}}" onclick="event.preventDefault();
                        document.getElementById('addtocart-form-{{$book->id}}').submit();"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    @endforeach
                </div>
                </div>
            @endforeach
            <!-- End Single Tab Content -->
        </div>
      </div>
		</section>
		<!-- Start BEst Seller Area -->
	</div>
	<!-- //Main wrapper -->

	@endsection 