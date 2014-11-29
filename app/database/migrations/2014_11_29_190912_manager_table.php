<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ManagerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create manager table - stores passwords and relevant info
		Schema::create('manager', function($table) {
			$table->increments('id');
			$table->text('description');
			$table->string('URL', 60)->nullable();
			$table->string('username', 60);
			$table->string('password', 60);
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
		Schema::drop('manager');
	}

}
