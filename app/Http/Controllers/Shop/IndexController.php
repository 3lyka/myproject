<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
/* use App\Models\Shop; */

class IndexController extends Controller
{
	public function __invoke()
	{
		$product = Product::paginate(12);
		return view('shop.index', compact('product'));
	}
}
