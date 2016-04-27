<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckPointsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_check_point', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('level_question_id');
            $table->string('user_answer',200);
            $table->dateTime('started_at');
            $table->dateTime('stopped_at');
            $table->unsignedInteger('time');
            $table->tinyInteger('sort', false, true);
            $table->timestamps();

            $table->index('user_id');
            $table->index('level_question_id');

            $table->foreign('user_id')->references('id')->on('iq_user')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('level_question_id')->references('id')->on('iq_level_question')->onDelete('restrict')->onUpdate('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        if (Schema::hasTable('iq_check_point'))  {
            Schema::table('iq_check_point', function(Blueprint $table)
            {
                $table->dropForeign('iq_check_point_user_id_foreign');
                $table->dropForeign('iq_check_point_level_question_id_foreign');

            });
        }

        Schema::dropIfExists('iq_check_point');
    }

}
