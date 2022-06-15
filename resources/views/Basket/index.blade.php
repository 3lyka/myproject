@extends('layouts.pattern')

@section('content')
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
			<p>Цена: {{ number_format($products->price, 2, '.', '') }}</p>
			<!-- Форма для добавления товара в корзину -->
			<form action="{{ route('basket.add', ['id' => $products->id]) }}" method="post" class="form-inline">
				@csrf
				<label for="input-quantity">Количество</label>
				<input type="text" name="quantity" id="input-quantity" value="1" class="form-control mx-2 w-25">
				<button type="submit" class="btn btn-success">Добавить в корзину</button>
			</form>
		</div>
	</div>
</div>
@endsection('content')