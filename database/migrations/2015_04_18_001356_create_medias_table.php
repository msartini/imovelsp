<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'medias' , function( Blueprint $table )
		{
                    $table->increments('id') ;
                    $table->timestamps() ;
                    $table->string('arquivo', 200) ;
                    $table->string('extensao', 4)->default('pdf') ;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('medias');
	}

}
