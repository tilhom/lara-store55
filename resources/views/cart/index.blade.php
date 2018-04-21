@extends('layouts.main')

@section('title', 'Cart')

@section('extra-css')

@endsection

@section('content')

	@include('cart.partials.breadcrumb')
		<div class="colorlib-shop">
			<div class="container">
			@include('cart.partials.infographics')
			@if (Cart::count() > 0)	
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						@include('layouts.partials.success-message')
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
						@foreach(Cart::content() as $item)
						<!-- <?php dump($item)?> -->
 						<div class="product-cart">
							<div class="one-forth">
								<a href="{{route('shop.show',$item->model->slug)}}">
								<div class="product-img" style="background-image: url({{$item->model->image}});">
								</div>
								</a>
								<div class="display-tc">
									<h3>{{$item->model->name}}</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{$item->model->price}}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" 
									value="{{$item->qty}}" min="1" max="100">
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">$120.00</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<!-- <a href="#" class="closed"></a> -->
									 <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="cart-options">Remove</button>
                            </form>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">
									@include('cart.partials.coupon')
								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p>
												<span>Subtotal:</span> 
												<span>{{Cart::subtotal()}}</span>
											</p>
											<p><span>Tax:</span> 
												<span>{{Cart::tax()}}</span></p>
											<!-- <p><span>Discount:</span> <span>$45.00</span></p> -->
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> 
												<span>{{Cart::total()}}</span></p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6  text-center">
										<a href="{{route('shop.index')}}" class="btn btn-primary">Continue shopping</a>
									</div>
									<div class="col-md-6">
										<a href="{{route('checkout.index')}}" class="btn btn-success">Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@else
			<div class="container">
                <h3>No items in Cart!</h3>
                <div class="spacer"></div>
                <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                <div class="spacer"></div>
			</div>
            @endif
			</div>
		</div>

		@include('layouts.partials.recommended-products')

@endsection