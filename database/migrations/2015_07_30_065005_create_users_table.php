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
		Schema::create('users', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
			$table->increments('id');
            $table->string('account',50)->unique();
            $table->string('password',60)->nullable();
            $table->string('salt',6)->nullable();
            $table->integer('points', false, true)->default(0);
            $table->string('real_name',50)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email',50)->nullable();
            $table->string('nickname',50);
            $table->string('avatar_url',100)->nullable();
            $table->string('sex', 10)->nullable();
            $table->dateTime('birthday')->nullable();
            $table->boolean('active')->default(true);
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
		Schema::dropIfExists('users');
	}

}
