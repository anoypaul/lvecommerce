<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_ms', function (Blueprint $table) {
            $table->bigIncrements('category_ms_id');
            $table->string('category_ms_name');
            $table->string('category_ms_description');
            $table->string('category_ms_image');
            $table->boolean('category_ms_status')->default(1);
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
        Schema::dropIfExists('category_ms');
    }
}
