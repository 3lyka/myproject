<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'title' => $this->faker->name(20),
			'image' => $this->faker->numberBetween(1, 3),
			'content' => $this->faker->text(),
			'price' => $this->faker->numberBetween(1, 1000),
			'sale' => 100,
			'description' => '1',
			'is_published' => '1',
			'category_id' => Category::get()->random()->id,
		];
	}
}
