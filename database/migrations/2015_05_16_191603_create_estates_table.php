<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $t) {
                    $t->increments('id');
                    $t->integer('category_id')->nullable();
                    $t->string('name')->nullable();
                    $t->text('description')->nullable();
                    $t->decimal('area', 10, 2)->nullable();
                    $t->integer('bathrooms')->nullable();
                    $t->integer('rooms')->nullable();
                    $t->integer('garages')->nullable();
                    $t->enum('conditional_ar', [1, 0])->default(0)->nullable();
                    $t->enum('storage', [1, 0])->default(0)->nullable();
                    $t->enum('gym', [1, 0])->default(0)->nullable();
                    $t->enum('pool', [1, 0])->default(0)->nullable();
                    $t->enum('washer', [1, 0])->default(0)->nullable();
                    $t->enum('fully_furnished', [1, 0])->default(0)->nullable();
                    $t->enum('heating', [1, 0])->default(0)->nullable();
                    $t->enum('balcony', [1, 0])->default(0)->nullable();
                    $t->enum('fireplace', [1, 0])->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('estates');
    }

}
