@extends('layouts.main')
@section('title', 'Shop')
@section('extra-css')
@endsection
@section('content')
@include('shop.partials.breadcrumb')

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					@include('shop.partials.products')
					@include('shop.partials.sidebar')
				</div>
			</div>
		</div>
@endsection