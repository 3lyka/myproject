<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_images', function (Blueprint $table) {
            $table->id();
		$table->unsignedBigInteger('shop_id');
		$table->unsignedBigInteger('image_id');

		$table->index('shop_id', 'shop_image_shop_idx');
		$table->index('image_id', 'shop_image_image_idx');

		$table->foreign('shop_id', 'shop_image_shop_fk')->on('shop')->references('id');
		$table->foreign('image_id', 'shop_image_image_fk')->on('images')->references('id');
		
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_images');
    }
}
