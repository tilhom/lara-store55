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