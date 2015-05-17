<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estates', function(Blueprint $t)
		{
                    $t->increments('id');

                    $t->string('name');
                    $t->string('area')->nullable();
                    $t->string('bathroom')->nullable();
                    $t->string('room')->nullable();
                    $t->string('cars')->nullable();
                        
                   
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
