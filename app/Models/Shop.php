<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
	use HasFactory;
	use SoftDeletes;
	use Filterable;

	protected $table = 'shop';
	protected $guarded = [];
	public function category()
	{
		
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

	public function images() {
		return $this->belongsToMany(Images::class, 'shop_images', 'shop_id', 'image_id');
	}
}
