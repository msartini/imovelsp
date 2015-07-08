<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstateImages extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estate_id')->nullable();
            $table->string('name', 200)->nullable();
            $table->string('filename', 200);
            $table->string('file_original_name', 200);
            $table->string('extension', 4);
            $table->string('fullpath', 250);
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
        Schema::table('estate_images', function (Blueprint $table) {
            Schema::dropIfExists('estate_images');
        });
    }
}
