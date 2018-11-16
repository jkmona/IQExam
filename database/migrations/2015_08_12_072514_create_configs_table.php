<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configs', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
			$table->increments('id');
            $table->string('type');
            $table->string('key',200);
            $table->string('value',200);
            $table->tinyInteger('sort', false, true);
            $table->string('notes')->nullable();
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
        if (Schema::hasTable('configs'))
        {
            Schema::table('configs', function(Blueprint $table)
            {
                //
            });
        }
        Schema::dropIfExists('configs');
	}


}
