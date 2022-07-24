<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->bigIncrements('sub_categories_id');
            $table->unsignedBigInteger('category_ms_id');
            $table->foreign('category_ms_id')->references('category_ms_id')->on('category_ms')->onDelete('cascade');
            $table->string('sub_categories_name');
            $table->string('sub_categories_description');
            $table->boolean('sub_categories_status')->default(1);
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
        Schema::dropIfExists('sub_categories');
    }
}
