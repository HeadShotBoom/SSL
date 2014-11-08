<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clients', function($table){
            $table->increments('id');
            $table->string('first_name',128);
            $table->string('last_name', 128);
            $table->string('phone', 128);
            $table->string('email', 128);
            $table->string('website', 128);
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
        Schema::drop('clients');
	}

}
