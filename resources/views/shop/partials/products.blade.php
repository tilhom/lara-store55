<div class="col-md-10 col-md-push-2">
	<div class="row row-pb-lg">
		@foreach($products as $product)
		<div class="col-md-4 text-center">
			<div class="product-entry">
				<a href="{{ route('shop.show', $product->slug) }}"></a><div class="product-img" style="background-image: url({{ asset($product->image) }});"></a>
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
						<span>{{$product->newprice?"$".$product->presentNewPrice():''}}</span> 
						<span class="{{$product->newprice?'sale':''}}">${{$product->presentPrice()}}</span>
					</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="row">
		<div class="col-md-12">
		{{$products->links()}}
		</div>
	</div>
</div>
