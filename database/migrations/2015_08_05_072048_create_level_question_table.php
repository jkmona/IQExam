<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelQuestionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_level_question', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->integer('level_id', false, true);
            $table->integer('question_id', false, true);
            $table->string('name',50);
            $table->tinyInteger('sort', false, true);

            $table->index('level_id');
            $table->index('question_id');

            $table->foreign('level_id')->references('id')->on('iq_level')->onDelete('restrict')->onUpdate('restrict');
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
        if (Schema::hasTable('iq_level_question'))
        {
            Schema::table('iq_level_question', function (Blueprint $table) {
                $table->dropForeign('iq_level_question_question_id_foreign');
                $table->dropForeign('iq_level_question_level_id_foreign');
            });
        }
        Schema::dropIfExists('iq_level_question');

    }

}
