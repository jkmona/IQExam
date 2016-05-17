<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_user_test', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('test_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('question_id');
            $table->string('user_answer', 200);
            $table->tinyInteger('pass', false, true);
            $table->dateTime('started_at')->nullable();
            $table->dateTime('stopped_at')->nullable();
            $table->unsignedInteger('time_spent')->nullable();
            $table->integer('sort', false, true);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('iq_user')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('question_id')->references('question_id')->on('iq_question')->onDelete('restrict')->onUpdate('restrict');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        if (Schema::hasTable('iq_user_test'))  {
            Schema::table('iq_user_test', function(Blueprint $table)
            {
                $table->dropForeign('iq_user_test_user_id_foreign');
                $table->dropForeign('iq_user_test_question_id_foreign');
            });
        }
        Schema::dropIfExists('iq_user_test');
    }

}
