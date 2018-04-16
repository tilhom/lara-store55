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
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-12 tabulation">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
							<li><a data-toggle="tab" href="#manufacturer">Manufacturer</a></li>
							<li><a data-toggle="tab" href="#review">Reviews</a></li>
						</ul>
						<div class="tab-content">
							<div id="description" class="tab-pane fade in active">
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
								<ul>
									<li>The Big Oxmox advised her not to do so</li>
									<li>Because there were thousands of bad Commas</li>
									<li>Wild Question Marks and devious Semikoli</li>
									<li>She packed her seven versalia</li>
									<li>tial into the belt and made herself on the way.</li>
								</ul>
				         </div>
				         <div id="manufacturer" class="tab-pane fade">
				         	<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						      
						   </div>
						   <div id="review" class="tab-pane fade">
						   	<div class="row">
						   		<div class="col-md-7">
						   			<h3>23 Reviews</h3>
						   			<div class="review">
								   		<div class="user-img" style="background-image: url(images/person1.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-half"></i>
								   					<i class="icon-star-empty"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
								   	<div class="review">
								   		<div class="user-img" style="background-image: url(images/person2.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-half"></i>
								   					<i class="icon-star-empty"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
								   	<div class="review">
								   		<div class="user-img" style="background-image: url(images/person3.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-full"></i>
								   					<i class="icon-star-half"></i>
								   					<i class="icon-star-empty"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
						   		</div>
						   		<div class="col-md-4 col-md-push-1">
						   			<div class="rating-wrap">
							   			<h3>Give a Review</h3>
							   			<p class="star">
							   				<span>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					(98%)
						   					</span>
						   					<span>20 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-empty"></i>
							   					(85%)
						   					</span>
						   					<span>10 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-empty"></i>
							   					<i class="icon-star-empty"></i>
							   					(98%)
						   					</span>
						   					<span>5 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-empty"></i>
							   					<i class="icon-star-empty"></i>
							   					<i class="icon-star-empty"></i>
							   					(98%)
						   					</span>
						   					<span>0 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="icon-star-full"></i>
							   					<i class="icon-star-empty"></i>
							   					<i class="icon-star-empty"></i>
							   					<i class="icon-star-empty"></i>
							   					<i class="icon-star-empty"></i>
							   					(98%)
						   					</span>
						   					<span>0 Reviews</span>
							   			</p>
							   		</div>
						   		</div>
						   	</div>
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