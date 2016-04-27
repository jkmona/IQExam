<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iq_question', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->tinyInteger('type', false, true);
            $table->tinyInteger('difficult', false, true);
            $table->tinyInteger('category', false, true);
            $table->string('subject',500);
            $table->string('content',500)->nullable();
            $table->string('answer',500);
            $table->string('key_words',500)->nullable();
            $table->binary('main_picture')->nullable();
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
        if (Schema::hasTable('iq_question'))
        {
            Schema::table('iq_question', function (Blueprint $table) {

            });
        }
        Schema::dropIfExists('iq_question');

    }

}
