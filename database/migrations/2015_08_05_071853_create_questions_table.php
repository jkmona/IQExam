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
		Schema::create('iq_questions', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
            $table->increments('question_id');
            $table->unsignedInteger('level_id', false);
            $table->tinyInteger('type', false, true);
            $table->tinyInteger('difficult', false, true);
            $table->tinyInteger('category', false, true);
            $table->string('subject', 100);
            $table->string('question', 200)->nullable();
            $table->string('right_answer', 200);
            $table->integer('points', false, true)->default(0);
            $table->string('key_words', 200)->nullable();
            $table->string('pic_url', 100)->nullable();
            $table->string('pic_suffix', 10)->nullable();
            $table->string('pic_full_url', 100)->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();

            $table->foreign('level_id')->references('level_id')->on('iq_level')->onDelete('restrict')->onUpdate('restrict');

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
