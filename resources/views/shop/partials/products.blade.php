@foreach($products as $product)
<div class="col-md-4 text-center">
	<div class="product-entry">
		<div class="product-img" style="background-image: url({{$product->image}});">
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
			<h3><a href="product-detail.html">Floral Dress</a></h3>
			<p class="price"><span>$300.00</span></p>
		</div>
	</div>
</div>
@endforeach