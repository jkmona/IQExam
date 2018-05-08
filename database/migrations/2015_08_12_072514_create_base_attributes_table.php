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
		Schema::create('iq_base_attributes', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
			$table->increments('base_id');
            $table->string('base_type');
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
        if (Schema::hasTable('iq_base_data'))
        {
            Schema::table('iq_base_data', function(Blueprint $table)
            {
                //
            });
        }
        Schema::dropIfExists('iq_base_data');
	}


}
