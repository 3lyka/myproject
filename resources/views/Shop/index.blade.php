@extends('layouts.pattern')

@section('content')
<div class="container mb-5 mt-5">
	<div class="row">
		<h1 class="h1_text_cards fw-bold">Карточки товара</h1>
		<p class="text-secondary">Все данные выгрузил с Factory seeder</p>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			@foreach ($shop as $shops)


			<div class="col">
				<div class="card h-100">
					<img src="images/{{ $shops->image }}" class="card-img-top img_size_cards" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{ $shops->title }}</h5>
						<p class="card-text">{{$shops->content}}</p>
						<a href="{{ route ('shop.show', $shops->id) }}">
							<button class="btn btn-primary">
								Рандомная цена (faker) {{$shops->price}}
							</button>
						</a>
					</div>
				</div>
			</div>
			@endforeach

		</div>

	</div>
	<div class="pagination_center">
		{{ $shop->links() }}
	</div>
</div>
@endsection ('content')