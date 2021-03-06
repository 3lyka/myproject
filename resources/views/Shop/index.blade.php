@extends('layouts.pattern')

@section('content')


<div class="container p-5 mt-5">
	<div class="row">
		<h1 class="text-h1">
			Главная страница
		</h1>
		<p class="text col-3">Чуть ниже будет 10 товаров фильтром </p>
	</div>
</div>

<section>
	<div class="container mb-5 mt-1">
		<div class="row">
			<div class="swiper mySwiper">
				<div class="swiper-wrapper mb-5">
					@foreach ($product as $products)
					<div class="swiper-slide">

						<div class="card h-100">
							<img src="/images/{{ $products->image }}" class="card-img-top img_size_cards" alt="...">
							<div class="card-body">
								<h5 class="card-title">{{ $products->title }}</h5>
								<p class="card-text">{{$products->content}}</p>
								<a href="{{ route ('product.show', $products->id) }}">
									<button class="btn btn-primary">
										Рандомная цена (faker) {{$products->price}}
									</button>
								</a>
								<button class="btn btn-info cart_button">
									Корзина
								</button>
							</div>
						</div>

					</div>
					@endforeach

				</div>
				<div class="swiper-pagination mt-5"></div>
			</div>
		</div>
		<!-- 		<div class="pagination_center">
			{{ $product->withQueryString()->links() }}
		</div> -->
	</div>
</section>
@endsection