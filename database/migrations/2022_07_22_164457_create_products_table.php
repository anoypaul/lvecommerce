<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('products_id');
            $table->Integer('category_ms_id');
            $table->Integer('sub_categories_id');
            $table->Integer('brands_id');
            $table->Integer('units_id');
            $table->Integer('sizes_id');
            $table->Integer('colors_id');
            $table->string('products_code');
            $table->string('products_name');
            $table->string('products_description');
            $table->float('products_price');
            $table->string('products_image');
            $table->boolean('products_status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
