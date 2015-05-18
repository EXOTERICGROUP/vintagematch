<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostcatgsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postcatgs',function($table)
		{
			$table->increments('id');
			$table->integer('post_id');
			$table->integer('usr_id');
			$table->integer('news');
			$table->integer('buzz');
			$table->integer('life');
			$table->integer('entertainment');
			$table->integer('vedios');
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
		Schema::drop('postcatgs');
	}

}
