<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    public function product() {
	return $this->belongsToMany(product::class, 'product_image', 'image_id', 'product_id');
    }

	public function image()
	{
		return $this->belongsToMany(image::class, 'product_image_fk', 'id');
	}
}
