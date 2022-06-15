<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use HasFactory;
	use SoftDeletes;
	use Filterable;

	protected $table = 'product';
	protected $guarded = [];
	public function category()
	{
		
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

	public function images() {
		return $this->belongsToMany(Images::class, 'products_images', 'products_id', 'image_id');
	}
	public function baskets()
	{
		return $this->belongsToMany(Basket::class)->withPivot('quantity');
	}
}
