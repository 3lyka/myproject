<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Category::factory(5)->create();
		Shop::factory(50)->create();
    }
}
