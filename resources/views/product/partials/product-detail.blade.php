<div class="colorlib-shop">
	<div class="container">
		<div class="row row-pb-lg">
			<div class="col-md-10 col-md-offset-1">
				<div class="product-detail-wrap">
					<div class="row">
						<div class="col-md-5">
							<div class="product-entry">
								<div class="product-img" style="background-image: url({{ asset($product->image) }});">
									@if($product->sale)
									<p class="tag"><span class="sale">Sale</span></p>
									@elseif($product->new)
									<p class="tag"><span class="new">New</span></p>
									@endif
								</div>
								<div class="thumb-nail">
									<a href="#" class="thumb-img" style="background-image: url({{ asset($product->image) }});"></a>
									<a href="#" class="thumb-img" style="background-image: url({{ asset('images/item-12.jpg')}});"></a>
									<a href="#" class="thumb-img" style="background-image: url({{ asset('images/item-11.jpg')}});"></a>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="desc">
								<h3>{{$product->name}}</h3>
								<p class="price">
									{{$product->newprice?"<span>$".$product->presentNewPrice()."</span>":''}} 
									<span class="{{$product->newprice?'sale':''}}">${{$product->presentPrice()}}</span> 
									<span class="rate text-right">
										<i class="icon-star-full"></i>
										<i class="icon-star-full"></i>
										<i class="icon-star-full"></i>
										<i class="icon-star-full"></i>
										<i class="icon-star-half"></i>
										(74 Rating)
									</span>
								</p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<div class="color-wrap">
									<p class="color-desc">
										Color: 
										<a href="#" class="color color-1"></a>
										<a href="#" class="color color-2"></a>
										<a href="#" class="color color-3"></a>
										<a href="#" class="color color-4"></a>
										<a href="#" class="color color-5"></a>
									</p>
								</div>
								<div class="size-wrap">
									<p class="size-desc">
										Size: 
										<a href="#" class="size size-1">xs</a>
										<a href="#" class="size size-2">s</a>
										<a href="#" class="size size-3">m</a>
										<a href="#" class="size size-4">l</a>
										<a href="#" class="size size-5">xl</a>
										<a href="#" class="size size-5">xxl</a>
									</p>
								</div>
								<div class="row row-pb-sm">
									<div class="col-md-4">
                            <div class="input-group">
                            	<span class="input-group-btn">
                               	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="" id="minus">
                                  <i class="icon-minus2"></i>
                               	</button>
                           		</span>
                            	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            	<span class="input-group-btn">
                               	<button id="plyus" type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="icon-plus2"></i>
                                </button>
                            	</span>
                         	</div>
                			</div>
								</div>
								<p><form action="{{ route('cart.store') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $product->id }}">
									<input type="hidden" name="name" value="{{ $product->name }}">
									<input type="hidden" name="quantity" id="soni" value="1">
									<input type="hidden" name="price" value="{{ $product->price }}">
									<button type="submit" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart" style="display: initial;"></i>Add to Cart</button>
								</form></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('product.partials.similar')

<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
	$(function(){
		$(".thumb-img").click(function(e){
			e.preventDefault();
			$(".product-img").css("background-image",$(this).css("background-image"))
		});
		$("#plyus").click(function(){
			if ($("#quantity").val()<=99){
				$("#quantity").val(1*$("#quantity").val()+1);
				$("#soni").val($("#quantity").val());
			}
		});
		$("#minus").click(function(){
			if ($("#quantity").val()>1){
				$("#quantity").val(1*$("#quantity").val()-1);
				$("#soni").val($("#quantity").val());
			}

		})
	})
</script>