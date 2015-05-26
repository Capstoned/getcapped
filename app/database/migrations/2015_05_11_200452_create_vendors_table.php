<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('vendor_name')->unique();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->string('zip_code');
			$table->enum('service_id', array('1', '2', '3'));
			$table->text('description');
			$table->timestamps();
			$table->rememberToken();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vendors');
	}

}
