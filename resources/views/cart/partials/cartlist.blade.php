@foreach(Cart::content() as $row)
<div class="product-cart">
	<div class="one-forth">
		<div class="product-img" style="background-image: url({{ asset(\App\Product::image($row->id))}});">
		</div>
		<div class="display-tc">
			<h3>{{ $row->name }}</h3>
		</div>
	</div>
	<div class="one-eight text-center">
		<div class="display-tc">
			<span class="price">${{ \App\Product::presentPriceOne($row->price)}}</span>
		</div>
	</div>
	<div class="one-eight text-center">
		<div class="display-tc">
			<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="{{ $row->qty }}" min="1" max="100">
		</div>
	</div>
	<div class="one-eight text-center">
		<div class="display-tc">
			<span class="price">${{\App\Product::presentPriceOne($row->price*$row->qty) }}</span>
		</div>
	</div>
	<div class="one-eight text-center">
		<div class="display-tc">
			<form action="{{route('cart.destroy', $row->rowId)}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button type="submit" class="closed"></button>
			</form>
		</div>
	</div>
</div>
@endforeach