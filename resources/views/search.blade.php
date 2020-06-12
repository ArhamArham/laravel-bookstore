@extends('layouts.app')

@section('content')
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Search Result</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Search <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
          <!-- Start Single Product -->
          @if (count($books) > 0)
              
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
          @else
              No product Found
          @endif
					<!-- Start Single Product -->
				</div>
				<!-- End Single Tab Content -->
			</div>
    </section>
            
    </div>
@endsection