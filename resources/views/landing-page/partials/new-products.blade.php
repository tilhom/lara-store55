<div class="colorlib-shop">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
				<h2><span>New Arrival</span></h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
			@foreach($newproducts as $product)
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url({{$product->image}});">
						@if($product->sale)
						<p class="tag"><span class="sale">Sale</span></p>
						@elseif($product->new)
						<p class="tag"><span class="new">New</span></p>
						@endif
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
								<span><a href="{{ route('shop.show', $product->slug) }}"><i class="icon-eye"></i></a></span> 
								<span><a href="#"><i class="icon-heart3"></i></a></span>
								<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a></h3>
						<p class="price">
							<span>{{$product->newprice?$product->presentNewPrice():''}}</span> 
							<span class="{{$product->newprice?'sale':''}}">{{$product->presentPrice()}}</span>
						</p>
					</div>
				</div>
			</div>
			@endforeach
<!-- 			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(images/item-6.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
								<span><a href="#"><i class="icon-heart3"></i></a></span>
								<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>$300.00</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(images/item-7.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
								<span><a href="#"><i class="icon-heart3"></i></a></span>
								<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>$300.00</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(images/item-8.jpg);">
						<p class="tag"><span class="new">New</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
								<span><a href="#"><i class="icon-heart3"></i></a></span>
								<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Floral Dress</a></h3>
						<p class="price"><span>$300.00</span></p>
					</div>
				</div>
			</div> -->

		</div>
	</div>
</div>