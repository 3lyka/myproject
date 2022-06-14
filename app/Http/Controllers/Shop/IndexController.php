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







		$data = $request->validated();
		$filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
		$product = Product::filter($filter)
			->orderBy('price', 'asc')
			->paginate(10);

		return view('shop.index', compact('product'));
	}
}
