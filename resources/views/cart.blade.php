@extends('layouts.app')

@section('content')
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
      <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Shopping Cart</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shopping Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										@foreach($cart->getbookContents() as $product)
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{ URL::asset('public/images/books/'.$product['bookContent']->thumbnail.'.jpg') }}" alt="product img"></a></td>
										<td class="product-name"><a href="#">{{$product['bookContent']->name}}</a></td>
                                            <td class="product-price"><span class="amount">$ {{$product['bookContent']->price}}</span></td>
                                            <td class="product-quantity">
                                                <form method="POST" action="{{route('cart.update',$product['bookContent']->id)}}">
                                                @csrf
                                                <input type="number" name="qty" id="qty" class="form-control text-center" min="0"
                                                    max="99" value="{{$product['qty']}}">
                                                <input type="submit" name="update" value="Update"
                                                    class="btn btn-block btn-outline-success btn-round">
                                            </form></td>
                                            <td class="product-subtotal">${{$product['price']}}</td>
                                            <td class="product-remove">
                                                <form action="{{route('cart.remove',$product['bookContent'])}}" method="POST" accept-charset="utf-8">
                                                @csrf
                                                <input type="submit" name="remove" value="Remove"
                                                    class="btn btn-outline-danger" />
                                            </form></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="#">Coupon Code</a></li>
                                <li><a href="#">Apply Code</a></li>
                                <li><a href="{{route('checkout')}}">Check Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Total Quantity</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>{{$cart->getTotalQty()}}</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>${{$cart->getTotalPrice()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->
		<!-- Footer Area -->
		
		<!-- //Footer Area -->

	</div>
@endsection