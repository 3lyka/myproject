<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    public function shop() {
	return $this->belongsToMany(Shop::class, 'shop_images', 'image_id', 'shop_id');
    }
}
