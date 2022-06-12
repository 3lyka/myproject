<?php

namespace App\Http\Controllers\Product;
/* use Illuminate\Http\Request\ProductRequest; */
use App\Http\Controllers\Controller;
use App\Models\Product;



class IndexController extends Controller
{

    public function __invoke()
    {
		$product = Product::paginate(12);
		return view('product.index', compact('product'));
    }
}
