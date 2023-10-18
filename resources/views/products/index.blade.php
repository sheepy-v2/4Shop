@extends('layouts.app')

@section('content')
	<div class="category_links">
		@foreach($categories as $category)
			<a href="/categories/{{$category->id}}">{{ $category->name }}</a>
			<p>-</p>
		@endforeach
		<a href="{{ route('shop') }}">alle producten</a>	
	</div>

	<div class="products">
		@foreach($products as $product)
			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<div>
						<h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->price }}</em></h5>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless
						@unless($product->discount == 0)
							<p style="color: red;" > nu <b>{{$product->discount}}%</b> korting</p>
						@endunless
					</div>
					<button class="btn btn-primary">Meer info &amp; bestellen</button>
				</div>
			</a>
		@endforeach
	</div>

@endsection