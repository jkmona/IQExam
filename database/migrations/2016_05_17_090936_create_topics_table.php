<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('question_id');
            $table->string('topic_key', 10);
            $table->string('topic_value', 200);
            $table->tinyInteger('sort', false, true);
            
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('topics'))  {
            Schema::table('topics', function(Blueprint $table)
            {
                $table->dropForeign('topics_question_id_foreign');
            });
        }
        Schema::dropIfExists('topics');
    }
}
