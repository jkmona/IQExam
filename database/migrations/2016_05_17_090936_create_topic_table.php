<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration
{
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
            $table->increments('topic_id');
            $table->unsignedInteger('question_id');
            $table->string('topic_key', 10);
            $table->string('topic_value', 200);
            $table->tinyInteger('sort', false, true);
            
            $table->foreign('question_id')->references('question_id')->on('iq_question')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('iq_topic'))  {
            Schema::table('iq_topic', function(Blueprint $table)
            {
                $table->dropForeign('iq_topic_question_id_foreign');
            });
        }
        Schema::dropIfExists('iq_topic');
    }
}
