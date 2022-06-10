<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;

class ShowController extends Controller
{

    public function __invoke(Shop $shop)
    {
		return view('shop.show', compact('shop'));
    }
}
