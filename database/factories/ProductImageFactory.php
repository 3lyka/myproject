<?php

namespace Database\Factories;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'product_id' => $this->faker->numberBetween(1, 50),
			'image_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
