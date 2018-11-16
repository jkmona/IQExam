<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
            $table->increments('id');
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

            $table->foreign('level_id')->references('id')->on('levels')->onDelete('restrict')->onUpdate('restrict');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        if (Schema::hasTable('questions'))
        {
            Schema::table('questions', function (Blueprint $table) {

            });
        }
        Schema::dropIfExists('questions');

    }

}
