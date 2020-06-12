@extends('layouts.app')

@section('content')
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
		
		<!-- //Header -->
		
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Checkout Area -->
        <section class="wn__checkout__area section-padding--lg bg__white">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6 col-12">
        				<div class="customer_details">
        					<h3>Billing details</h3>
        					<div class="customar__field">
								<form action="{{route('checkout.store')}}" method="post">
									@csrf
        						<div class="margin_between">
	        						<div class="input_box space_between">
	        							<label>First name <span>*</span></label>
										<input required type="text" name="firstname" value="{{ old('firstname') }}">
										@if ($errors->has('firstname'))
                    						<span class="text-danger">{{ $errors->first('firstname') }}</span>
                						@endif
	        						</div>
	        						<div class="input_box space_between">
	        							<label>last name <span>*</span></label>
										<input required type="text" name="lastname" value="{{ old('lastname') }}">
										@if ($errors->has('lastname'))
                    						<span class="text-danger">{{ $errors->first('lastname') }}</span>
                						@endif
	        						</div>
        						</div>
        						<div class="input_box">
        							<label>User Name <span>*</span></label>
									<input disabled type="text" value="{{Auth::user()->name}}" name="username">
									
								</div>
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Phone <span>*</span></label>
										<input required type="text" name="phone" value="{{ old('phone') }}">
										@if ($errors->has('phone'))
                    						<span class="text-danger">{{ $errors->first('phone') }}</span>
                						@endif
									</div>

									<div class="input_box space_between">
										<label>Email address <span>*</span></label>
									<input disabled type="email" value="{{Auth::user()->email}}"name="email">
									</div>
								</div>
        						<div class="input_box">
        							<label>Country<span>*</span></label>
        							<select required class="select__option" name="country" value="{{ old('country') }}">
										<option value="">Select a country…</option>
										<option>Afghanistan</option>
										<option>American Samoa</option>
										<option>Anguilla</option>
										<option>American Samoa</option>
										<option>Antarctica</option>
										<option>Antigua and Barbuda</option>
									</select>
									@if ($errors->has('country'))
                    						<span class="text-danger">{{ $errors->first('country') }}</span>
                						@endif
								</div>
								<div class="input_box">
        							<label>State<span>*</span></label>
        							<select required class="select__option" name="state" value="{{ old('state') }}">
										<option value="">Select a country…</option>
										<option>Afghanistan</option>
										<option>American Samoa</option>
										<option>Anguilla</option>
										<option>American Samoa</option>
										<option>Antarctica</option>
										<option>Antigua and Barbuda</option>
									</select>
									@if ($errors->has('state'))
                    						<span class="text-danger">{{ $errors->first('state') }}</span>
                						@endif
								</div>
								<div class="input_box">
									<label>Postcode / ZIP <span>*</span></label>
									<input required type="text" name="zip" value="{{ old('zip') }}">
									@if ($errors->has('zip'))
                    						<span class="text-danger">{{ $errors->first('zip') }}</span>
                						@endif
								</div>
        						<div class="input_box">
        							<label>Address <span>*</span></label>
									<input required type="text" name="streetadd1" value="{{ old('streetadd1') }}" placeholder="Street address">
									@if ($errors->has('streetadd1'))
                    					<span class="text-danger">{{ $errors->first('streetadd1') }}</span>
                					@endif
        						</div>
        						<div class="input_box">
        							<input type="text" name="streetadd2" value="{{ old('streetadd2') }}" placeholder="Apartment, suite, unit etc. (optional)">
								
								</div>
								<input type="submit" value="Proceed">
							</form>
        					</div>
        					
        				</div>
        			</div>
        			<div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__order__box">
        					<h3 class="onder__title">Your order</h3>
        					<ul class="order__total">
        						<li>Product</li>
        						<li>Total</li>
        					</ul>
        					<ul class="order_product">
								@foreach ($cart->getbookContents() as $product)
									<li>{{$product['bookContent']->name}}<span>${{$product['price']}}</span></li>
								@endforeach</ul>
        					<ul class="shipping__method">
        						<li>Shipping 
        							<ul>
        								<li>
        									<input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
        									<label>Flat Rate: $48.00</label>
        								</li>
        							</ul>
        						</li>
        					</ul>
        					<ul class="total__amount">
        						<li>Order Total <span>${{$cart->gettotalPrice()}}</span></li>
        					</ul>
        				</div>
					    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingOne">
						          	<a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						                <span>Direct Bank Transfer</span>
						          	</a>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="payment-body">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</div>
						        </div>
						    </div>
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingTwo">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							            <span>Cheque Payment</span>
						          	</a>
						        </div>
						        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
					          		<div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
						        </div>
						    </div>
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingThree">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							            <span>Cash on Delivery</span>
						          	</a>
						        </div>
						        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					          		<div class="payment-body">Pay with cash upon delivery.</div>
						        </div>
						    </div>
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingFour">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							            <span>PayPal <img src="images/icons/payment.png" alt="payment images"> </span>
						          	</a>
						        </div>
						        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
					          		<div class="payment-body">Pay with cash upon delivery.</div>
						        </div>
						    </div>
					    </div>

        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Checkout Area -->
		<!-- Footer Area -->
		<!-- //Footer Area -->

	</div>
@endsection