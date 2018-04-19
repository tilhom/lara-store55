<div class="col-md-10 col-md-push-2">
	<div class="row row-pb-lg">
		@foreach($products as $product)
		<div class="col-md-4 text-center">
			<div class="product-entry">
				<div class="product-img" style="background-image: url({{$product->image}});">
						@if($product->sale)
							<p class="tag"><span class="sale">Sale</span></p>
						@elseif($product->new)
							<p class="tag"><span class="new">New</span></p>
						@endif
						<div class="cart">
						<p>
							<span class="addtocart">
							<form action="{{ route('cart.store') }}" method="POST" class="pull-left">
				            {{ csrf_field() }}
				            <input type="hidden" name="id" value="{{ $product->id }}">
				            <input type="hidden" name="name" value="{{ $product->name }}">
				            <input type="hidden" name="price" value="{{ $product->price }}">
				            <button><i class="icon-shopping-cart"></i></button>
				        	</form>
								<!-- <a href=""><i class="icon-shopping-cart"></i></a> -->
							</span> 
							<span><a href="{{route('shop.show',$product->slug)}}"><i class="icon-eye"></i></a></span> 
							<span><a href="#"><i class="icon-heart3"></i></a></span>
							<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
						</p>
					</div>
				</div>
				<div class="desc">
					<h3><a href="product-detail.html">{{$product->name}}</a></h3>
					<p class="price">
						<span>{{$product->newprice?$product->newprice:''}}</span> 
						<span class="{{$product->newprice?'sale':''}}">
							{{$product->price}}</span>
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
