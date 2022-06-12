<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
		$table->unsignedBigInteger('product_id');
		$table->unsignedBigInteger('image_id');

		$table->index('product_id', 'product_image_product_idx');
		$table->index('image_id', 'product_image_image_idx');

		$table->foreign('product_id', 'product_image_product_fk')->on('product')->references('id');
		$table->foreign('image_id', 'product_image_image_fk')->on('images')->references('id');
		
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
        Schema::dropIfExists('product_images');
    }
}
