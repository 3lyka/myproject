<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Models\Product;
use App\Http\Filters\ProductFilter;


class IndexController extends Controller
{


	public function __invoke(FilterRequest $request)
	{
		/* $this->authorize('view', auth()->user()); */
		$data = $request->validated();
		$filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
		$product = Product::filter($filter)
			->orderBy('price', 'asc')    //обращение к колонке Price метод вывода ASC (от меньшего значения к большему)
			->paginate(10); //Вывод при пагинации 10 товаров, можно менять, плюс вызвать страничную пагинацию, удобно

		return view('shop.index', compact('product'));
	}
}
