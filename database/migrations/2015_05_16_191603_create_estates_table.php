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
                    $t->integer('category_id');
                    $t->string('name');
                    $t->text('description');
                    $t->decimal('area', 10, 2);
                    $t->integer('bathrooms');
                    $t->integer('rooms');
                    $t->integer('garages');
                    $t->enum('conditional_ar', [1, 0])->default(0);
                    $t->enum('storage', [1, 0])->default(0);
                    $t->enum('gym', [1, 0])->default(0);
                    $t->enum('pool', [1, 0])->default(0);
                    $t->enum('washer', [1, 0])->default(0);
                    $t->enum('fully_furnished', [1, 0])->default(0);
                    $t->enum('heating', [1, 0])->default(0);
                    $t->enum('balcony', [1, 0])->default(0);
                    $t->enum('fireplace', [1, 0])->default(0);
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
