@extends('layouts.main')
@section('title', 'Shop')
@section('extra-css')
@endsection
@section('content')
@include('product.partials.breadcrumb')

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					@include('product.partials.product-detail')
				</div>
			</div>
		</div>
@endsection
@section('extra-js')
<script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
@endsection