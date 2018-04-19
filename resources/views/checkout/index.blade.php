@extends('layouts.main')
@section('title', 'Checkout')
@section('extra-css')
<script src="https://js.stripe.com/v3/"></script>
@include('checkout.partials.css')
@endsection
@section('content')
	@include('checkout.partials.breadcrumb')
			<div class="colorlib-shop">
			<div class="container">
				@include('checkout.partials.infographics')
				<div class="row">
					<div class="col-md-7">
						@include('checkout.partials.billing-details')
					</div>
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Cart Total</h2>
							<ul>
								<li>
									<span>Subtotal</span> <span>{{Cart::subtotal()}}</span>
									<ul>
										@foreach (Cart::content() as $item)
										<li>
											<span>{{$item->qty}} x {{$item->model->name}}</span> 
											<span>{{$item->model->price}}</span>
										</li>
										@endforeach
			<!-- <li><span>1 x Product Name</span> <span>$78.00</span></li> -->
									</ul>
								</li>
								<li><span>Shipping</span> <span>$0.00</span></li>
								<li><span>Tax</span> <span>{{Cart::tax()}}</span></li>
								<li>
									<span>Order Total</span> 
									<span>{{Cart::total()}}</span>
								</li>
							</ul>
						</div>
						@include('checkout.partials.payment')
						<div class="row">
							<div class="col-md-12">
								<p><a href="#" class="btn btn-primary">Place an order</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@include('layouts.partials.recommended-products')
@endsection

@section('extra-js')
 @include('checkout.partials.js')
@endsection