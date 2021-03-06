<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
	protected $table = 'images';
	protected $guarded = [];
    use HasFactory;
    public function product() {
	return $this->belongsToMany(product::class, 'product_images', 'image_id', 'product_id');
    }
}
