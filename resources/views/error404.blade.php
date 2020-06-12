@extends('layouts.app')

@section('content')
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
	
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">404</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{url('/')}}">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">404</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

		<!-- Start Error Area -->
		<section class="page_error section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="error__inner text-center">
							<div class="error__content">
								<h2>error - not found</h2>
								<p>It looks like you are lost!</p>
							<a href="{{url('/')}}">Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Error Area -->

		
	</div>
@endsection