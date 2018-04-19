<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="colorlib-logo"><a href="{{route('landing-page')}}">Store</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="{{route('landing-page')}}">Home</a></li>
						<li class="has-dropdown">
							<a href="{{route('shop.index')}}">Shop</a>
							<ul class="dropdown">
								<li><a href="product-detail.html">Product Detail</a></li>
								<li><a href="cart.html">Shipping Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="order-complete.html">Order Complete</a></li>
								<li><a href="add-to-wishlist.html">Wishlist</a></li>
							</ul>
						</li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="{{route('cart.index')}}"><i class="icon-shopping-cart"></i> Cart [@if (Cart::instance('default')->count() > 0)
                    	{{ Cart::instance('default')->count() }}@else {{0}} @endif]</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>