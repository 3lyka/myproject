<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateproductTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->text('content');
			$table->integer('price')->default(0);
			$table->integer('sale')->default(0);
			$table->integer('description')->default(0);
			$table->boolean('is_published')->default(0);
			$table->timestamps();
			$table->softDeletes();


			$table->unsignedBigInteger('image')->nullable;
			$table->index('image', 'product_image_product_idx');

			$table->unsignedBigInteger('category_id')->nullable;
			$table->index('category_id', 'post_category_idx');
			$table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('product');
	}
}
