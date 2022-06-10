<?php

namespace App\Http\Controllers\Shop;
/* use Illuminate\Http\Request\ShopRequest; */
use App\Http\Controllers\Controller;
use App\Models\Shop;



class IndexController extends Controller
{

    public function __invoke()
    {
		$shop = Shop::paginate(12);
		return view('shop.index', compact('shop'));
    }
}
