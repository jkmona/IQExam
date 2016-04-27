<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iq_topic', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
			$table->increments('id');
            $table->unsignedInteger('question_id');
            $table->tinyInteger('value', false, true);
            $table->tinyInteger('sort', false, true);
            $table->string('content', 200);

            $table->index('question_id');
            $table->foreign('question_id')->references('id')->on('iq_question')->onDelete('restrict')->onUpdate('restrict');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('iq_topic', function(Blueprint $table)
		{
			$table->dropForeign('iq_topic_question_id_foreign');
		});
        Schema::dropIfExists('iq_topic');
	}

}
