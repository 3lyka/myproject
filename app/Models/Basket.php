<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
	protected $table = 'baskets';
	protected $guarded = [];
	/**
	 * Связь «многие ко многим» таблицы `baskets` с таблицей `products`
	 */
	public function product()
	{
		
		return $this->belongsToMany(Product::class)->withPivot('quantity');
	}
}
