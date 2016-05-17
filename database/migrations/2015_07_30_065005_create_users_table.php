<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iq_user', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
			$table->increments('user_id');
            $table->string('phone',15)->nullable();
            $table->string('email',50)->nullable();
            $table->string('account',50)->nullable();
            $table->string('password',60)->nullable();
            $table->string('salt',6)->nullable();
            $table->string('real_name',50)->nullable();
            $table->string('nickname',50)->nullable();
            $table->integer('sex', false, true)->nullable();
            $table->dateTime('birthday')->nullable();
            $table->integer('points', false, true)->default(0);
            $table->boolean('active')->nullable();
            $table->tinyInteger('user_group', false, true)->nullable();
            $table->rememberToken();
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
		Schema::dropIfExists('iq_user');
	}

}
