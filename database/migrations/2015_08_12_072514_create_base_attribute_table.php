<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iq_base_attribute', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
			$table->increments('id');
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
        if (Schema::hasTable('iq_base_attribute'))
        {
            Schema::table('iq_base_attribute', function(Blueprint $table)
            {
                //
            });
        }
        Schema::dropIfExists('iq_base_attribute');
	}


}
