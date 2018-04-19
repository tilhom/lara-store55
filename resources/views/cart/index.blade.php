@extends('layouts.main')
@section('title', 'Shopping Cart')
@section('extra-css')
@endsection
@section('content')
		
		@include('cart.partials.breadcrumps')
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center">
								<span>Remove</span>
							</div>
						</div>
						@include('cart.partials.cartlist')
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-md-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-md-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>${{Cart::subtotal()}}</span></p>
											<p><span>Delivery:</span> <span>$0.00</span></p>
											<p><span>Discount:</span> <span>${{Cart::tax()}}</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>${{Cart::total()}}</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('cart.partials.recomended')

@endsection